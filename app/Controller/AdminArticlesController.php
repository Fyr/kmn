<?php
App::uses('AppController', 'Controller');
App::uses('AdminController', 'Controller');
App::uses('AdminContentController', 'Controller');
App::uses('Article', 'Article.Model');
class AdminArticlesController extends AdminContentController {
    public $name = 'AdminArticles';
    public $uses = array('Article.Article');

    public $paginate = array(
        'conditions' => array('Article.object_type' => 'Article'),
        'fields' => array('modified', 'title', 'slug', 'published', 'featured'),
        'limit' => 10
    );
}
