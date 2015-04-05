<?php

class playersController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function AddPlayer_index()
{

 $data = array();
 $data = Auth::user();
 $league = League::all();
 $selectedLeague = Input::get('league');
 $listTeam = DB::table('team')->get();
 $position = DB::table('player')->get();
 return View::make('admin.Player.AddPlayer',array('league'=>$league,'data'=>$data,'listTeam'=>$listTeam,'position'=>$position));

}

//Ajout Joueur
public function AddPlayer_Succes()

{
	//Get name  player		
	$nom = Input::get('nom');

	//Get name  league
	$selectedLeague = Input::get('league');


	//Get team ID
	$idTeam = Input::get('team');

	//Get name of selected team
	$nameTeam = DB::table('team')->where('team_id','=',$idTeam)->pluck('name');

	//Get Position 
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

public function EditPlayer_index()
{

    $data = Auth::user();
    $league = League::all();
    $selectedLeague = Input::get('league');
 	$listTeam = DB::table('team')->get();
 	$position = DB::table('player')->get();
 	return View::make('admin.Player.EditPlayer',array('league'=>$league,'data'=>$data,'listTeam'=>$listTeam,'position'=>$position));

}

public function EditPlayer_Succes()
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

public function DeletePlayer_index()
{

    $data = Auth::user();
    $league = League::all();
    $selectedLeague = Input::get('league');
 	$listTeam = DB::table('team')->get();
 	$position = DB::table('player')->get();
 	return View::make('admin.Player.DeletePlayer',array('league'=>$league,'data'=>$data,'listTeam'=>$listTeam,'position'=>$position));



}


public function DeletePlayer_Succes()
{
	$id = Input::get("player_id");
	DB::table('player')->where('player_id', '=', $id)->delete();
    return Response::json('Ce Joueur est supprimé avec succes');

}

}
