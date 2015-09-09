<?php
namespace App\Controller ;

//use Symfony\Component\HttpFoundation\Session\Session;

class HomeController extends BaseController {
	public function indexAction(\Slim\Http\Request $request){

  	return $this->app->render('home/index.twig', array(

  		)) ;
  }
}