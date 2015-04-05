<?php

class GameController extends BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /game
	 *
	 * @return Response
	 */
public function AddGame_index()
{
	$data = Auth::user();
	$league = League::all();
	return View::make('admin.game.AddGame',array('league'=>$league,'data'=>$data));
}

public function AddGame_succes()
{
	$selectedequipe1 = Input::get('s1');
	$selectedequipe2 = Input::get('s2');
	$etat = Input::get('etat');
	$date = Input::get('date');
	$lieu = Input::get('lieu');
	$league_id = Input::get('id');
    $match = new Match();
    $match->nomEquipe1 = $selectedequipe1 ;
    $match->nomEquipe2 = $selectedequipe2 ;
    $match->etat =$etat ;
    $match->date =$date ;
    $match->lieu = $lieu ;
    $match->league_id = $league_id ;
    $match->save();
    return Response::json('succes');
}

public function EditGame_index()
{
	$data = Auth::user();
    $league = League::all();
    $selectedLeague = Input::get('league');
 	$listTeam = DB::table('team')->get();
 	$position = DB::table('player')->get();

 	return View::make('admin.game.EditGame',array('league'=>$league,'data'=>$data,'listTeam'=>$listTeam,'position'=>$position));

}

public function EditGame_succes()
{
		$id = Input::get('match_id');
		$nom1 = Input::get('nom1');
		$nom2 = Input::get('nom2');
		$etat = Input::get('etat');
		$date = Input::get('date');
		$lieu = Input::get('lieu');
DB::table('match')
            ->where('match_id', $id)
            ->update(array('nomEquipe1' => $nom1 ,
            			'nomEquipe2'=> $nom2,
            			'etat' => $etat,
            			'date'=> $date,
            			'lieu'=>$lieu));

}

public function DeleteGame_index()
{
	$data = Auth::user();
    $league = League::all();
    $selectedLeague = Input::get('league');
 	$listTeam = DB::table('team')->get();
 	$position = DB::table('player')->get();

 	return View::make('admin.game.DeleteGame',array('league'=>$league,'data'=>$data,'listTeam'=>$listTeam,'position'=>$position));

}

public function DeleteGame_succes()
{
		$id = Input::get('match_id');
		DB::table('history')->where('match_id', '=', $id)->delete();	
		DB::table('match')->where('match_id', '=', $id)->delete();
		return Response::json('Ce Match est supprimee avec succes');
}




public function Edit_Update_Result()
{ 	

	$league = League::all();
	$matchall = Match::all();
	$listTeam = DB::table('team')->get();
	$match = DB::table('match')->get();
    $data = Auth::user();
    return View::make('admin.resultats',array('league'=>$league,'match'=>$match,'data'=>$data,'listTeam'=>$listTeam));
}


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
        return Response::json('succes');

	}



}