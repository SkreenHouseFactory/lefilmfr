<?php

$loader = require __DIR__.'/../vendor/autoload.php';

//env
$env = 'production';
if (preg_match('/.(dev|recette).ebbandflow.fr/', $_SERVER['HTTP_HOST']) && !isset($_GET['force_prod'])) {
  error_reporting(E_ALL | E_STRICT);
  ini_set('display_errors', 'On');
  ini_set('display_startup_errors', 'On');
  $env = 'development';
}
define('APP_PATH'   , __DIR__.'/../app/');


/**
 * Slim
 *
 * @source https://github.com/codeguy/Slim
 * @documentation http://docs.slimframework.com/
 *
 */
$app = new \Slim\Slim(array(
  'mode' => $env,
  'view' => new \Slim\Views\Twig(),
  'templates.path' => APP_PATH.'/Views'
));

// Config
require APP_PATH.'/config/env.php';
require APP_PATH.'/config/session.php';
require APP_PATH.'/config/twig.php';
//require APP_PATH.'/config/form_factory.php';


/**
 * Monolog
 *
 * @source https://github.com/Flynsarmy/Slim-Monolog
 * @source https://github.com/Seldaek/monolog
 */
$logger = new \Flynsarmy\SlimMonolog\Log\MonologWriter(array(
        'handlers' => array(
                new \Monolog\Handler\StreamHandler(APP_PATH.'logs/'.date('Y-m-d').'.log', \Slim\Log::DEBUG, true, 0777),
        ),
));
$app->config('log.writer', $logger);

/**
* Doctrine
*
* @documentation http://doctrine-orm.readthedocs.org/
*/
//$app->container->singleton('entity_manager', function() use ($app) {
//   $r = new App\Repository\BaseRepository($app->config('orm')) ;
//   return $r->getEntityManager() ;
//}) ;

/**
* SmartController
*
* @author bergstorm@georges-office.com
* @see app/Middleware/SmartController
*/
$app->container->singleton('smart_controller', function() use($app, $session){
   return new App\Middleware\SmartController($app, $session) ;
}) ;

//Add here other Dependency Injections
// ...

// Routing
$app->get('/', function () use ($app) {
    $app->smart_controller->render('Auth', 'deconnexion');
});

$app->run();
