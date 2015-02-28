<?php

class MatchController extends AuthedController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $data = Auth::user();


 	$listTeam = DB::table('teamx')->get();

 	return View::make('admin.match',array('listTeam'=>$listTeam,'data'=>$data));

	}
	public function AddMatch()
	{


		$selectedequipe1 = Input::get('s1');
		$selectedequipe2 = Input::get('s2');
		$etat = Input::get('etat');
		$date = Input::get('date');
		$lieu = Input::get('lieu');


    $match = new Match();
    $match->nomEquipe1 = $selectedequipe1 ;
    $match->nomEquipe2 = $selectedequipe2 ;

    $match->etat =$etat ;

    $match->date =$date ;

    $match->lieu = $lieu ;
    $match->save();
        return Response::json('succes');
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
		//return 'user_id:'.$user_id.'<br>match_id:'.$match_id.'<br>p1:'.$p1.'<br>p2:'.$p2;
		$hist->p1 = $p1;
		$hist->p2 = $p2;


		$hist->save();

	}

	public function addResult()
	{
		
	}


	


}
