<?php
namespace App\Controller ;

//use Symfony\Component\HttpFoundation\Session\Session;

class HomeController extends BaseController {
	public function indexAction(\Slim\Http\Request $request){
    $data = $this->callApi('program/78.json');

  	return $this->app->render('home/index.twig', array(
      'programs' => $data
  	)) ;
  }


	public function searchAction(\Slim\Http\Request $request){
    $data = $this->callApi('search/'.$request->post('q').'.json');

  	return $this->app->render('home/index.twig', array(
      'programs' => $data
  	)) ;
  }
}