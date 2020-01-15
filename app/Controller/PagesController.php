<?php
App::uses('AppController', 'Controller');
App::uses('Media', 'Media.Model');
App::uses('Page', 'Model');
App::uses('News', 'Model');
App::uses('Product', 'Model');
class PagesController extends AppController {
	public $uses = array('Media.Media', 'Page', 'News', 'Product', 'Category', 'Subcategory');
	public $helpers = array('Core.PHTime');

	/*
	public function beforeRender() {
		$order = 'Category.sorting';
		$aCategories = $this->Category->find('all', compact('order'));
		$order = 'Subcategory.sorting';
		$aSubcategories = $this->Subcategory->find('all', compact('order'));
		$this->set(compact('aCategories', 'aSubcategories'));

		parent::beforeRender();
	}
*/
	public function home() {
		$page = $this->Page->findBySlug('home');
		$this->set(compact('page'));
	}

	public function view($slug) {
		$this->set('page', $this->Page->findBySlug($slug));
		$this->currMenu = ucfirst($slug);
	}
}
