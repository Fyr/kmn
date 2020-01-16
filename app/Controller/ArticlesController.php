<?php
App::uses('AppController', 'Controller');
App::uses('SiteRouter', 'Lib/Routing');
App::uses('Article', 'Article.Model');
App::uses('News', 'Model');
App::uses('Media', 'Media.Model');
class ArticlesController extends AppController {
	public $uses = array('Article.Article', 'News', 'Media.Media');
	public $helpers = array('Core.PHTime');

	const PER_PAGE = 8;

	public function beforeFilterLayout() {
		parent::beforeFilterLayout();
		$this->objectType = $this->getObjectType();
		$this->currMenu = $this->objectType;
	}

	public function index() {
		$this->paginate = array(
			'conditions' => array($this->objectType.'.object_type' => $this->objectType, $this->objectType.'.published' => 1),
			'limit' => self::PER_PAGE,
			'order' => $this->objectType.'.modified DESC',
			'page' => $this->request->param('page')
		);
		$aArticles = $this->paginate($this->objectType);
		$this->set('aArticles', $aArticles);
	}

	public function view($slug) {
		$this->objectType = $this->getObjectType();
		if (is_numeric($slug)) {
			$article = $this->{$this->objectType}->findById($slug);
			if (!$article) {
				$this->redirect404();
				return false;
			}
			$this->redirect(array('controller' => 'articles', 'action' => 'view', $article[$this->objectType][$slug]));
			return false;
		}
		$article = $this->{$this->objectType}->findBySlug($slug);

		if (!$article && !TEST_ENV) {
			$this->inProgress();
			return false;
		}
		$aMedia = $this->Media->getObjectList($this->objectType, $article[$this->objectType]['id']);
		$this->set(compact('article', 'aMedia'));

		$this->{$this->objectType}->viewed($article[$this->objectType]['id']);
	}

}

