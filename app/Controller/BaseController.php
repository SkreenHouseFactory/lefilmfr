<?php
/* class étendu par les autres */
namespace App\Controller ;

use Symfony\Component\HttpFoundation\Session\Session;

abstract class BaseController {
	public function __construct(\Slim\Slim &$app, Session $session = null){
		$this->em = $app->entity_manager ;
		$this->app = $app ;
    $this->session = $session;
  }
}