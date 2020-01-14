<?php

use Phalcon\Loader;
use Phalcon\Di\FactoryDefault;
use Phalcon\Mvc\View;
use Phalcon\Mvc\Url as UrlProvider;
use Phalcon\Mvc\Application;
use Phalcon\Db\Adapter\Pdo\Mysql as DbAdapter;
use Phalcon\Mvc\View\Engine\Volt;

// Define some absolute path constants to aid in locating resources
define('BASE_PATH', dirname(__DIR__));
define('APP_PATH', BASE_PATH . '/app');
// ...

$loader = new Loader();

$loader->registerDirs(
    [
        APP_PATH . '/controllers/',
        APP_PATH . '/models/',
    ]
);

$loader->register();


// ...

// Create a DI
$di = new FactoryDefault();



// ...

// Setup the view component && Register Volt as template engine
$di->set(
    'view',
    function () {
        $view = new View();
        $view->setViewsDir(APP_PATH . '/views/');
//		  $view->setViewsDir('../app/views/');
        $view->registerEngines(
				[
					'.volt' => 'Phalcon\Mvc\View\Engine\Volt',
				]
			);
        return $view;
    }
);




// ...

// Setup a base URI
$di->set(
    'url',
    function () {
        $url = new UrlProvider();
        $url->setBaseUri('/');
        return $url;
    }
);
// Setup the database service
$di->set(
    'db',
    function () {
        return new DbAdapter(
            [
//'192.168.0.7',
                'host'     => '192.168.0.7',
                'username' => 'tutorial',
                'password' => 'Mundo54/',
                'dbname'   => 'php',
            ]
        );
    }
);


// ...

$application = new Application($di);
$response = $application->handle();
$response->send();


