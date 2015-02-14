<?php

class AdminController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /admin
	 *
	 * @return Response
	 */
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



}