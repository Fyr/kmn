<?php
App::uses('Category', 'Model');
App::uses('Product', 'Model');
class AppController extends Controller {
	public $components = array(
		'Auth' => array(
			'authorize'      => array('Controller'),
			'loginAction'    => array('plugin' => '', 'controller' => 'pages', 'action' => 'home', '?' => array('login' => 1)),
			'loginRedirect'  => array('plugin' => '', 'controller' => 'user', 'action' => 'index'),
			'ajaxLogin' => 'Core.ajax_auth_failed',
			'logoutRedirect' => '/',
			'authError'      => 'You must sign in to access that page'
		),
	);

	protected $aCategories, $currUser, $aNavBar, $currMenu, $aBottomLinks, $currLink;

	public function __construct($request = null, $response = null) {
		$this->_beforeInit();
		parent::__construct($request, $response);
		$this->_afterInit();
	}

	protected function _beforeInit() {
		$this->helpers = array_merge(array('ArticleVars', 'Media'), $this->helpers); // 'ArticleVars', 'Media.PHMedia', 'Core.PHTime', 'Media', 'ObjectType'
	}

	protected function _afterInit() {
		// after construct actions here
		$this->loadModel('Settings');
		$this->Settings->initData();
	}

	public function loadModel($modelClass = null, $id = null) {
		if ($modelClass === null) {
			$modelClass = $this->modelClass;
		}

		$this->uses = ($this->uses) ? (array)$this->uses : array();
		if (!in_array($modelClass, $this->uses, true)) {
			$this->uses[] = $modelClass;
		}

		list($plugin, $modelClass) = pluginSplit($modelClass, true);

		$this->{$modelClass} = ClassRegistry::init(array(
			'class' => $plugin . $modelClass, 'alias' => $modelClass, 'id' => $id
		));
		if (!$this->{$modelClass}) {
			throw new MissingModelException($modelClass);
		}
		return $this->{$modelClass};
	}


	public function isAuthorized($user) {
		return Hash::get($user, 'active');
	}

	public function redirect404() {
		// return $this->redirect(array('controller' => 'pages', 'action' => 'notExists'), 404);
		throw new NotFoundException();
	}

	private function _getCurrMenu() {
		foreach($this->aNavBar as $curr => $item) {
			if ($this->request->controller == $item['url']['controller'] && $this->request->action == $item['url']['action']) {
				return $curr;
			}
		}
		return '';
	}

	public function beforeFilter() {
		$this->beforeFilterLayout();
	}

	public function beforeFilterLayout() {
		$this->aNavBar = array(
			'Home' => array('title' => __('Home'), 'icon' => 'fa-home', 'url' => array('controller' => 'pages', 'action' => 'home')),
			'Services' => array('title' => __('Services'), 'icon' => 'fa-briefcase', 'url' => array('controller' => 'pages', 'action' => 'view', 'services')),
			'About' => array('title' => __('About'), 'icon' => 'fa-user', 'url' => array('controller' => 'pages', 'action' => 'view', 'about')),
			'News' => array('title' => __('Events'), 'icon' => 'fa-calendar-check-o', 'url' => array('controller' => 'news', 'action' => 'index')),
			'Articles' => array('title' => __('Articles'), 'icon' => 'fa-pencil', 'url' => array('controller' => 'pages', 'action' => 'home')),
			'Gallery' => array('title' => __('Gallery'), 'icon' => 'fa-image', 'url' => array('controller' => 'pages', 'action' => 'home')),
			'Contacts' => array('title' => __('Contacts'), 'icon' => 'fa-envelope', 'url' => array('controller' => 'pages', 'action' => 'view', 'contacts')),
		);
		$this->currMenu = $this->_getCurrMenu();
		// $this->aBottomLinks = $this->aNavBar;
		// $this->currLink = $this->_currMenu;
		$this->Auth->allow(array('home', 'view', 'index', 'login', 'categories', 'about', 'history'));
		$this->currUser = array();
		$this->cart = array();
		if ($this->Auth->loggedIn()) {
			$this->_refreshUser();
		}
	}

	public function beforeRender() {
		$this->beforeRenderLayout();
	}

	protected function beforeRenderLayout() {
		$this->set('currUser', $this->currUser);
		$this->set('aNavBar', $this->aNavBar);
		$this->set('currMenu', $this->currMenu);
		// $this->set('aBottomLinks', $this->aBottomLinks);
		// $this->set('currLink', $this->currLink);
	}

	protected function _refreshUser($lForce = false) {
		if ($lForce) {
			$this->loadModel('User');
			$user = $this->User->findById($this->currUser['id']);
			$this->Auth->login($user['User']);
		}

		$this->currUser = AuthComponent::user();
	}
}
