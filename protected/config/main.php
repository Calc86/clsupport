<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Support',
    'defaultController'=>'eventLog/index',

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',

        'ext.lightopenid.*',
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool

		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'qwertyui',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('10.112.28.19','10.112.28.33','127.0.0.1','::1'),
		),

	),

	// application components
	'components'=>array(
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
		// uncomment the following to enable URLs in path-format
		/*
		'urlManager'=>array(
			'urlFormat'=>'path',
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
		*/
		/*'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),*/
		// uncomment the following to use a MySQL database

		/*'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=c1clsupport',
			'emulatePrepare' => true,
			'username' => 'c1clsupport',
			'password' => '12345',
			'charset' => 'utf8',
		),*/

        'db'=>array(
            'connectionString' => 'mysql:host=10.112.28.98;dbname=asteriskcdrdb',
            'emulatePrepare' => true,
            'enableProfiling'=>true,
            'username' => 'clsupport',
            'password' => '12345',
            'charset' => 'utf8',
        ),

        'db2'=>array(
            'connectionString' => 'mysql:host=10.112.0.85;dbname=denezhka',
            'emulatePrepare' => true,
            'enableProfiling'=>true,
            'username' => 'calc',
            'password' => 'addfskGh',
            'charset' => 'utf8',
            'class' => 'CDbConnection',
        ),

        'db3'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=c1clsupport',
			'emulatePrepare' => true,
			'username' => 'c1clsupport',
			'password' => '12345',
			'charset' => 'utf8',
            'class' => 'CDbConnection',
		),
        'authManager'=>array(
            'class'=>'CDbAuthManager',
            'connectionID'=>'db3',
        ),

		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),

		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
                array(
                    // направляем результаты профайлинга в ProfileLogRoute (отображается
                    // внизу страницы)
                    'class'=>'CProfileLogRoute',
                    'levels'=>'profile',
                    'enabled'=>true,
                ),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),

        'loid' => array(
            'class' => 'ext.lightopenid.loid',
        ),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
	),
);