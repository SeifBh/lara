<?php

class AdminController extends AuthedController {

	/**
	 * Display a listing of the resource.
	 * GET /admin
	 *
	 * @return Response
	 */

	public function index()
	{
                $data = Auth::user();

		return View::make('admin.admin',array('data'=>$data));
	}
	public function Add()
	{
		//
		  $player = new Player();

	  $name_Player = Input::get('name_Player');
	  $position = Input::get('position');

	  $player->name = $name_Player;
	  $player->position = $position;
	  $player->save();
	  	  return 'Vouz avez ajouter un joueur Avec succes';


	}

public function GestionResultats()
{ 	
	        $league = League::all();

	$listTeam = DB::table('team')->get();
	$match = DB::table('match')->get();

                $data = Auth::user();

                return View::make('admin.resultats',array('league'=>$league,'match'=>$match,'data'=>$data,'listTeam'=>$listTeam));
}
	public function AddResultat()
	{
		$id_match = Input::get('id_match');
		return $id_match;

		$r1 = Input::get('r1');
		$r2 = Input::get('score2');

		DB::table('match')
            ->where('match_id', $match_id)
            ->update(array('r1' => $r1));
	}



}