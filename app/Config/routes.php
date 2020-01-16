<?php
Router::parseExtensions('json', 'xml');

Router::connect('/', array('controller' => 'pages', 'action' => 'home'));

Router::connect('/articles', array(
	'controller' => 'Articles',
	'action' => 'index',
	'objectType' => 'Article',
),
	array('named' => array('page' => 1))
);
Router::connect('/articles/:slug',
	array(
		'controller' => 'Articles',
		'action' => 'view',
		'objectType' => 'Article'
	),
	array('pass' => array('slug'))
);
Router::connect('/articles/page/:page', array(
	'controller' => 'Articles',
	'action' => 'index',
	'objectType' => 'Article'
),
	array('named' => array('page' => '[\d]*'))
);

Router::connect('/news', array(
	'controller' => 'Articles',
	'action' => 'index',
	'objectType' => 'News',
),
	array('named' => array('page' => 1))
);
Router::connect('/news/:slug',
	array(
		'controller' => 'Articles',
		'action' => 'view',
		'objectType' => 'News'
	),
	array('pass' => array('slug'))
);
Router::connect('/news/page/:page', array(
	'controller' => 'Articles',
	'action' => 'index',
	'objectType' => 'News'
),
	array('named' => array('page' => '[\d]*'))
);

CakePlugin::routes();
require CAKE . 'Config' . DS . 'routes.php';
