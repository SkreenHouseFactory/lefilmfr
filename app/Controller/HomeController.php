<?php
namespace App\Controller ;

//use Symfony\Component\HttpFoundation\Session\Session;

class HomeController extends BaseController {
	public function indexAction(\Slim\Http\Request $request){
    $data = $this->callApi('program/78.json');

  	return $this->app->render('home/index.twig', array(
      'programs' => array($data)
  	)) ;
  }


	public function searchAction(\Slim\Http\Request $request){
	$data = $this->callApi('search/'.$request->post('search').'.json?nb_results=100&img_width=160&img_height=200');
	$data = array_merge($data['Films'], $data['Documentaires']);
	
  	return $this->app->render('home/index.twig', array(
      'programs' => $data
  	)) ;
  }


	public function categorieAction(\Slim\Http\Request $request, $route_params = null){
	$data = $this->callApi('search/'.$route_params['categorie'].'.json?nb_results=100&img_width=160&img_height=200');
	$data = array_merge($data['Films'], $data['Documentaires']);
	
  	return $this->app->render('home/index.twig', array(
      'programs' => $data,
      's_category' => $route_params['categorie']
  	)) ;
  }
}
