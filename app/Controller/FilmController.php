<?php
namespace App\Controller ;

//use Symfony\Component\HttpFoundation\Session\Session;

class FilmController extends BaseController {
  protected $config = array(
    'img' => array(
      'width' => 160,
      'height' => 100
  ));

	public function ficheAction(\Slim\Http\Request $request, $route_params = null){
    //die($route_params['id']);
    $teasers = $this->callApi('category.json?from_slug=all&fields=programs&order_by_created_at=1&&offset='.rand(0,50).'&nb_results=4&img_width='.$this->config['img']['width'].'&img_height='.$this->config['img']['height']);
    
    $program = $this->callApi('program/'.$route_params['id'].'.json?fields=related,related_programs,teaser,player,metadata&allow_with=1');
    //print_r($program);
  	return $this->app->render('film/fiche.twig', array(
      'film' => $program,
      'teasers' => $teasers['programs']
  	));
  }
}