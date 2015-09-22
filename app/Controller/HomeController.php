<?php
namespace App\Controller ;

//use Symfony\Component\HttpFoundation\Session\Session;

class HomeController extends BaseController {
  protected $config = array(
    'img' => array(
      'width' => 195,
      'height' => 310
    ),
    'nb_results' => 30
  );

	public function indexAction(\Slim\Http\Request $request){
    $offset = $this->config['nb_results']*(int)$request->get('page');
    $data = $this->callApi('category.json?from_slug=all&fields=programs&order_by_created_at=1&&offset='.$offset.'&nb_results='.$this->config['nb_results'].'&img_width='.$this->config['img']['width'].'&img_height='.$this->config['img']['height']);
    //$data = $this->callApi('search/mama.json?nb_results=100&img_width='.$this->config['img']['width'].'&img_height='.$this->config['img']['height']);
  	//$data = array_merge($data['Films'], $data['Documentaires']);

  	return $this->app->render('home/index.twig', array(
      'programs' => $data['programs']
  	)) ;
  }


	public function searchAction(\Slim\Http\Request $request){
    $offset = $this->config['nb_results']*(int)$request->get('page');
	  $data = $this->callApi('search/'.$request->post('search').'.json?offset='.$offset.'&nb_results='.$this->config['nb_results'].'&img_width='.$this->config['img']['width'].'&img_height='.$this->config['img']['height']);
	  $data = array_merge($data['Films'], $data['Documentaires']);
	
  	return $this->app->render('home/index.twig', array(
      'programs' => $data
  	)) ;
  }

  //category.json?from_slug=musique&fields=programs&offset=0&nb_results=10&order_by_created_at=1&skKey=6bc791699a6e1f21979b418a22826c4c
	public function categorieAction(\Slim\Http\Request $request, $route_params = null){
    $offset = $this->config['nb_results']*(int)$request->get('page');
	  $data = $this->callApi('category.json?from_slug='.$route_params['categorie'].'&fields=programs&order_by_created_at=1&&offset='.$offset.'&nb_results='.$this->config['nb_results'].'&img_width='.$this->config['img']['width'].'&img_height='.$this->config['img']['height']);
	  //$data = array_merge($data['Films'], $data['Documentaires']);
	  
  	return $this->app->render('home/index.twig', array(
      'programs' => $data['programs'],
      's_category' => $route_params['categorie']
  	)) ;
  }
}
