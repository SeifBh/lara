<?php

class MatchController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{


 	$listTeam = DB::table('team')->get();

 	return View::make('admin.match',array('listTeam'=>$listTeam));

	}
	public function AddMatch()
	{
    $match = new Match();
    $match->nomEquipe1 = 'Club Sfaxien' ;
    $match->nomEquipe2 = 'club bizertien' ;
    $match->lieu = 'rades' ;
    $match->date ='2015-04-15' ;
    $match->r1 = '4' ;
    $match->r2 ='5' ;
    $match->save();
    return 'Vous avez ajoutez un match avec succes';
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function SaveMatch()
	{
		//
		$user_id = Auth::user()->id;
		$match_id = Input::get('id_match');
		$p1 = Input::get('p1');
		$p2 = Input::get('p2');

		$hist = new Historique();
		$hist->user_id = $user_id;
		$hist->match_id = $match_id;
		$hist->p1 = $p1;
		$hist->p2 = $p2;

		$hist->save();
	}


	


}
