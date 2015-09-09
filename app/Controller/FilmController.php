<?php
namespace App\Controller ;

//use Symfony\Component\HttpFoundation\Session\Session;

class FilmController extends BaseController {
	public function ficheAction(\Slim\Http\Request $request){

  	return $this->app->render('film/fiche.twig', array(

  		)) ;
  }
}