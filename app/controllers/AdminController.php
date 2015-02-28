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
{ 	$listTeam = DB::table('team')->get();

                $data = Auth::user();

                return View::make('admin.resultats',array('data'=>$data,'listTeam'=>$listTeam));
}
	public function AddResultat()
	{

	}



}