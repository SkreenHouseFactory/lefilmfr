<?php
namespace App\Controller ;

//use Symfony\Component\HttpFoundation\Session\Session;

class FilmController extends BaseController {
	public function ficheAction(\Slim\Http\Request $request){
    $program = $this->callApi('program/78.json?fields=related');
    print_r($program);
  	return $this->app->render('film/fiche.twig', array(
      'film' => $program
  	));
  }
}