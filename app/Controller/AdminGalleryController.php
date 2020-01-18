<?php
App::uses('AppController', 'Controller');
App::uses('AdminController', 'Controller');
App::uses('AdminContentController', 'Controller');
class AdminGalleryController extends AdminContentController {
    public $name = 'AdminGallery';
    public $uses = array('Photoalbum');

    public $paginate = array(
        'conditions' => array('Photoalbum.object_type' => 'Photoalbum'),
        'fields' => array('modified', 'title', 'slug', 'published', 'featured'),
        'limit' => 10
    );
}
