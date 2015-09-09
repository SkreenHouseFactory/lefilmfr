<?php
namespace App\Controller ;

//use Symfony\Component\HttpFoundation\Session\Session;

class HomeController extends BaseController {
	public function indexAction(\Slim\Http\Request $request){

  	return $this->app->render('home/index.twig', array(

  	)) ;
  }


	public function searchAction(\Slim\Http\Request $request){

  	return $this->app->render('home/index.twig', array(

  	)) ;
  }
}