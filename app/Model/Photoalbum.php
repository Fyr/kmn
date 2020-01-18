<?php
App::uses('AppModel', 'Model');
App::uses('Article', 'Article.Model');
class Photoalbum extends Article {
    protected $objectType = 'Photoalbum';

    var $hasOne = array(
        'Media' => array(
            'foreignKey' => 'object_id',
            'conditions' => array('Media.object_type' => 'Photoalbum', 'Media.main' => 1),
            'dependent' => true
        ),
    );

}
