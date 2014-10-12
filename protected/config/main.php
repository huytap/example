<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
Yii::setPathOfAlias('bootstrap', dirname(__FILE__) . '/../extensions/bootstrap');
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Citenco',
	'theme' => 'default',
	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
        'application.components.*',
        'application.extensions.CBreadcrumbs.Cbreadcrumbs',
        'application.extensions.EPhpThumb.*',
        'application.extensions.yiisortablemodel.models.*',
        'application.extensions.yiisortablemodel.behaviors.*',
        'application.extensions.yii-mail.*',
	),

	'modules'=>array(
		'admin',
		// uncomment the following to enable the Gii tool
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'Enter Your Password Here',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),
	),

	// application components
	'components'=>array(
		'cache'=>array(
           'class'=>'system.caching.CFileCache'
        ),
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
		// uncomment the following to enable URLs in path-format
		
		'urlManager'=>array(
			'urlFormat'=>'path',
			'showScriptName' => false,
			'rules'=>array(
				'lien-he.html' => 'site/contact',
				'su-kien/<sub_cms>.html' => array(
					'cms/news',
			    	'type' => 'db',
			    	'fields' => array(
			    		'cms' => array(
			    			'table' => 'menu',
			    			'field' => 'url'
			    		),
			    	)
				),
				'<cms>/<sub_cms>/<cms_detail>-<id:\d+>.html' => array(
			    	'cms/view',
			    	'type' => 'db',
			    	'fields' => array(
			    		'cms' => array(
			    			'table' => 'menu',
			    			'field' => 'url'
			    		),
			    		'sub_cms' => array(
			    			'table' => 'menu',
			    			'field' => 'url'
			    		),
			    		'cms_detail' => array(
			    			'table' => 'cms',
			    			'field' => 'url'
			    		)
			    	),
			   	),
			   	'<cms>/<sub_sub>/<sub_cms>.html' => array(
			   		'cms/index',
			   		'type' => 'db',
			   		'field' => array(
			   			'cms' => array(
			   				'table' => 'menu',
			   				'field' => 'url'
			   			),
			   			'sub_sub' => array(
			   				'table' => 'menu',
			   				'field' => 'url'
			   			),
			   			'sub_menu' => array(
			   				'table' => 'menu',
			   				'field' => 'url'
			   			)
			   		),
			   	),
			   	'<cms>/<sub_cms>.html' => array(
			   		'cms/index',
			   		'type' => 'db',
			   		'field' => array(
			   			'cms' => array(
			   				'table' => 'menu',
			   				'field' => 'url'
			   			),
			   			'sub_menu' => array(
			   				'table' => 'menu',
			   				'field' => 'url'
			   			)
			   		),
			   	),
			   	'<sub_cms>.html' => array(
			   		'cms/list',
			   		'type' => 'db',
			   		'field' => array(
			   			'sub_cms' => array(
			   				'table' => 'menu',
			   				'field' => 'url'
			   			),
			   		),
			   	),
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
		'bootstrap' => array(
            'class' => 'bootstrap.components.Bootstrap',
        ),
        'setting' => array(
            'class' => 'application.extensions.MyConfig.MyConfig',
            'cacheId' => null,
            'useCache' => false,
            'cacheTime' => 0,
            'tableName' => 'settings',
            'createTable' => false,
            'loadDbItems' => true,
            'serializeValues' => true,
            'configFile' => '',
        ),
		'mail' => array(
            'class' => 'application.extensions.yii-mail.YiiMail',
            'transportType' => 'smtp', /// case sensitive!
            'transportOptions' => array(
                'host' => 'smtp.gmail.com',
                'username' => 'huytapptit@gmail.com',
                'password' => 'Huytap@87',
                'port' => '465',
                'encryption' => 'ssl',
                'timeout' => '200',
            ),
            'viewPath' => 'application.mail',
            'logging' => true,
            'dryRun' => false
        ),
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=moitruong',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
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
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
	),
);