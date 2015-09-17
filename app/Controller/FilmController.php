<?php
namespace App\Controller ;

//use Symfony\Component\HttpFoundation\Session\Session;

class FilmController extends BaseController {

	public function ficheAction(\Slim\Http\Request $request, $route_params = null){
    //die($route_params['id']);
    $program = $this->callApi('program/'.$route_params['id'].'.json?fields=related,related_programs,teaser,player,persons,casting&allow_with=1');
    //print_r($program);
  	return $this->app->render('film/fiche.twig', array(
      'film' => $program
  	));
  }
}