<?php namespace App\Middleware;

use Slim\Middleware;
use Symfony\Component\HttpFoundation\Session\Session;

class SmartController extends Middleware
{
    /**
     * Slim Application instance
     *
     * @var \Slim\Slim
     */
    protected $app;

    public function __construct(\Slim\Slim $app, Session $session = null)
    {
      $this->app = $app;
      $this->session = $session;
    }

    /**
    * render controller & view
    */
  	public function render($controllername, $action, $namespace = 'App\Controller\\'){
      $class = $namespace . $controllername.'Controller';
      $controller = new $class($this->app, $this->session) ;
  		$controller->{$action.'Action'}($this->app->request) ;
  	}

    public function call()
    {
    }
}
