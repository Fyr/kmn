<?php
App::uses('AppController', 'Controller');
App::uses('SiteRouter', 'Lib/Routing');
App::uses('Article', 'Article.Model');
App::uses('News', 'Model');
App::uses('Photoalbum', 'Model');
App::uses('Media', 'Media.Model');
class ArticlesController extends AppController {
	public $uses = array('Article.Article', 'News', 'Photoalbum', 'Media.Media');
	public $helpers = array('Core.PHTime');

	const PER_PAGE = 8;

	public function beforeFilterLayout() {
		parent::beforeFilterLayout();
		$this->objectType = $this->getObjectType();
		$this->currMenu = $this->objectType;
	}

	public function beforeRenderLayout() {
		parent::beforeRenderLayout();
		$this->set('objectType', $this->objectType);
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
		if (is_numeric($slug)) {
			$article = $this->Article->findById($slug);
			if (!$article) {
				$this->redirect404();
				return false;
			}
			$this->redirect(SiteRouter::url(array($article['Article']['object_type'] => $article['Article'])));
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

