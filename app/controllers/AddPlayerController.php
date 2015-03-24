<?php

class AddPlayerController extends BaseController {

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



        $data = Auth::user();
        $league = League::all();

    $selectedLeague = Input::get('league');

 	$listTeam = DB::table('team')->get();
 	$position = DB::table('player')->get();

 	return View::make('admin.player',array('league'=>$league,'data'=>$data,'listTeam'=>$listTeam,'position'=>$position));





	}


	public function AddPlayer()
	{

//Get name of player		
$nom = Input::get('nom');

//Get name of league
$selectedLeague = Input::get('league');


//Get team ID
$idTeam = Input::get('team');

//Get name of selected team
$nameTeam = DB::table('team')->where('team_id','=',$idTeam)->pluck('name');

//Get Position of player
$selectedOption = Input::get('pos');

$player = new Player ();
$player->name = $nom;
$player->league = $selectedLeague;
$player->team = $nameTeam;
$player->team_id=$idTeam;
$player->position = $selectedOption;
$player->save();

return Response::json('succes');



	}


public function SupprimerJoueur()
{

        $data = Auth::user();

        $league = League::all();

    $selectedLeague = Input::get('league');

 	$listTeam = DB::table('team')->get();
 	$position = DB::table('player')->get();

 	return View::make('admin.player.supp',array('league'=>$league,'data'=>$data,'listTeam'=>$listTeam,'position'=>$position));



}
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
	$id = Input::get("player_id");
	$name = Input::get("name");
	$position = Input::get("position");
DB::table('player')
            ->where('player_id', $id)
            ->update(array('name' => $name ,
            			'position'=> $position));

        return Response::json('succes');
}
public function delete()
{
	$id = Input::get("player_id");
DB::table('player')->where('player_id', '=', $id)->delete();
        return Response::json('Ce Joueur est supprimé avec succes');


}


}
