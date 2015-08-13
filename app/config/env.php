<?php

$db_config = include('database.php');

// Only invoked if mode is "production"
$app->configureMode('production', function () use ($app, $db_config) {
    $app->config(array(
        'log.enable' => true,
        'debug' => false,
        'orm' => $db_config['production']
    ));
});

// Only invoked if mode is "recette"
$app->configureMode('recette', function () use ($app, $db_config) {
    $app->config(array(
        'log.enable' => false,
        'debug' => true,
        'orm' => $db_config['development']
    ));
});

// Only invoked if mode is "development"
$app->configureMode('development', function () use ($app, $db_config) {
    $app->config(array(
        'log.enable' => false,
        'debug' => true,
        'whoops.editor' => 'sublime',
        'orm' => $db_config['development']
    ));
    $app->add(new \Zeuxisoo\Whoops\Provider\Slim\WhoopsMiddleware);
    $app->add(new \Slim\Middleware\DebugBar());
});

// Maintain splashscreen
// should be commented
/*
$c_name = 'maintain_splashscreen';
if (!$app->getCookie($c_name) && !$app->request->get('init_'.$c_name)) {
  //display splash
  die(include APP_PATH.'/Views/maintain/splashscreen.twig');
} elseif ($app->request->get('init_'.$c_name)){
  //set cookie
  $app->setCookie($c_name, 'true', '1 day') ;
}
*/
