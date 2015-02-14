<?php

class AddPlayerController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	public function index()
	{

 	$listTeam = DB::table('team')->get();
 	$position = DB::table('players')->get();

 	return View::make('admin.player',array('listTeam'=>$listTeam,'position'=>$position));


	}
	public function AddPlayer()
	{



	  $player = new Player();
	  $nom = Input::get('nom');
	  $nomequipe = Input::get('nomequipe');
	  $position = Input::get('position');
	  $player->name = $nom;
	  $player->team = $nomequipe;
	  $player->position = $position;
	  $player->save();
	  return 'Vouz avez ajouter un joueur';
	}

	public function UpdatePlayer()
	{


	}

	public function DeletePlayer()
	{


	}



}
