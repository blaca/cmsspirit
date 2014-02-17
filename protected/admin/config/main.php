<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.

$backend=dirname(dirname(__FILE__));
$frontend=dirname($backend);
Yii::setPathOfAlias('backend', $backend);

return array(
	'basePath' => $frontend,
	'name'=>'CMS Spirit',
	'sourceLanguage'=>'us_en',
	'timeZone' => 'Asia/Shanghai',
		
		
	'controllerPath' => $backend.'/controllers',
	'viewPath' => $backend.'/views',
	'runtimePath' => $backend.'/runtime',

	// autoloading model and component classes
	'import' => array(
		'backend.models.*',
		'backend.components.*',
		'application.models.*',
		'application.components.*',
		'application.extensions.*',
		//The global controller
		'backend.controllers.BaseController',
		//RBAC
		'application.modules.srbac.controllers.SBaseController',
	),

	// preloading 'log' component
	'preload'=>array('log'),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
		/*
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'123456',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			//'ipFilters'=>array('127.0.0.1','::1'),
		), */
			
		'srbac'=>array(
			// Your application's user class (default: User)
			"userclass"=>"User",
			// Your users' table user_id column (default: userid)
			"userid"=>"userid",
			// your users' table username column (default: username)
			"username"=>"username",
			// If in debug mode (default: false)
			// In debug mode every user (even guest) can admin srbac, also
			//if you use internationalization untranslated words/phrases
			//will be marked with a red star
			"debug"=>true,
			// The number of items shown in each page (default:15)
			"pageSize"=>16,
			// The name of the super user
			"superUser" =>"Authority",
			//The css file to use
			//"css"=>"srbac_red.css", // must be in srbac css folder
			//The layout to use
			"layout"=>"backend.views.layouts.main",
			//The not authorized page
			"notAuthorizedView"=>"backend.views.site.login",
			// The always allowed actions
			"alwaysAllowed"=>array(
					'SiteLogin','SiteLogout','SiteIndex','SiteAdmin',
					'SiteError', 'SiteContact','SiteCaptcha'
			),
			// The operationa assigned to users
			"userActions"=>array(
					"Show","View","List"
			),
			// The number of lines of the listboxes
			"listBoxNumberOfLines" => 10,
			// The path to the custom images relative to basePath (default the srbac images path)
			//"imagesPath"=>"../images",
			//The icons pack to use (noia, tango)
			"imagesPack"=>"tango",
			// Whether to show text next to the menu icons (default false)
			"iconText"=>true,
		)
	),

	// application components
	'components'=>array(
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
		// cache system	
		'cache'=>array(
				'class'=>'CFileCache',
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
		/*
		'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),
		*/
		// uncomment the following to use a MySQL database
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=cmsspirit',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => 'admin',
			'charset' => 'utf8',			
			'tablePrefix' => 'SP_',
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
		// rbac
		'authManager'=>array(
				// The type of Manager (Database)
				'class'=>'CDbAuthManager',
				// The database connection used
				'connectionID'=>'db',
				// The itemTable name (default:authitem)
				'itemTable'=>'authitem',
				// The assignmentTable name (default:authassignment)
				'assignmentTable'=>'authassignment',
				// The itemChildTable name (default:authitemchild)
				'itemChildTable'=>'authitemchild',
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'menggangcsu@gmail.com',
		'cms_version' 	=> 'CMS Spirit v1.0.0',
	),
);