<?php
App::uses('AppController', 'Controller');
App::uses('AdminController', 'Controller');
App::uses('AdminContentController', 'Controller');
App::uses('Article', 'Article.Model');
class AdminArticlesController extends AdminContentController {
    public $name = 'AdminArticles';
    public $uses = array('Article.Article');

    public $paginate = array(
        'conditions' => array(),
        'fields' => array('modified', 'title', 'slug', 'published', 'featured'),
        'limit' => 10
    );
}
