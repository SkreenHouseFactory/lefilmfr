<?php
/* class étendu par les autres */
namespace App\Controller ;

use Symfony\Component\HttpFoundation\Session\Session;
use Guzzle\Http\Client;

abstract class BaseController {

  protected $api_url = array(
    'development' => 'https://api.myskreen.com/api/2,3/',//program/78.json
    'production' => 'https://api.myskreen.com/api/2,3/'
  );
  
	public function __construct(\Slim\Slim &$app, Session $session = null){
		$this->em = $app->entity_manager ;
		$this->app = $app ;
    $this->session = $session;
  }
  
  protected function callApi($path) {
    $client = new Client($this->api_url[$this->app->getMode()], array(
      'request.options' => array(
         //'exceptions' => false,
         'allow_redirects' => true
       ),
    ));
    //$client->setDefaultOption('auth', array('clever', 'uEEaWJ9', 'Basic'));
    $url = $path.(strstr($path, '?') ? '&' : '?').'skKey=6bc791699a6e1f21979b418a22826c4c';
    $request = $client->get($url);
    //$request->setBody($this->getUserQuery($user));
    try {
      $response = $request->send();
      //print_r((string)$url);
      return $response->json();
    } catch(\Exception $e){
      die('<error>API error</error> '.$e->getMessage());
    }
  }
}
