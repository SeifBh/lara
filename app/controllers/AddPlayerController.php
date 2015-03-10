<?php

class AddPlayerController extends AuthedController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	public function visit()
	{
		$selectnameteam = Input::get('team');
		return $selectnameteam;
	}

	public function index()
	{

 $data = array();

    if (Auth::check()) 
                        {


        $data = Auth::user();
        $league = League::all();

    $selectedLeague = Input::get('league');

 	$listTeam = DB::table('team')->get();
 	$position = DB::table('player')->get();

 	return View::make('admin.player',array('league'=>$league,'data'=>$data,'listTeam'=>$listTeam,'position'=>$position));




}
else{
	return View::make('login');
}
	}


	public function AddPlayer()
	{
		
$nom = Input::get('nom');

$selectedLeague = Input::get('league');



$selectedOption = Input::get('pos');

$team_id = Equipe::pluck('team_id');


$selectnameteam = Input::get('team');

$player = new Player ();
$player->name = $nom;
$player->league = $selectedLeague;
$player->team = $selectnameteam;
$player->team_id=$team_id;
$player->position = $selectedOption;
$player->save();
        return Response::json('succes');



	}


public function AjouterJoueur(){}
public function ModifierJoueur()
{
        $data = Auth::user();

        $league = League::all();

    $selectedLeague = Input::get('league');

 	$listTeam = DB::table('team')->get();
 	$position = DB::table('player')->get();

 	return View::make('admin.player.modifier',array('league'=>$league,'data'=>$data,'listTeam'=>$listTeam,'position'=>$position));



}
public function hi()
{

$x = Input::get("player_id");
return $x;
return 'k';
}



}
