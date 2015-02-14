<?php

class AddTeamController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	public function index()
	{
		$listLeague = DB::table('teamx')->distinct()->get();

		return View::make('admin.team',array('listLeague'=>$listLeague));

	}
	public function AddTeam()
	{
		//
		$listLeague = DB::table('teamx')->get();

		$nomequipe = Input::get('nomequipe');
		$nomcomplet = Input::get('nomcomplet');
		$stade = Input::get('stade');
		$ligue = Input::get('ligue');
		$nomPresident = Input::get('nomPresident');
		$entraineur = Input::get('entraineur');

		$equipe = new Equipe();
		$equipe->name = $nomequipe ;
		$equipe->fullname = $nomcomplet;
		$equipe->stade = $stade;

		$equipe->ligue = $ligue;

		$equipe->nomPresident = $nomPresident;
		$equipe->Entraineur = $entraineur ;
return $ligue ;
		$equipe->save();
		return '1';

	}

	public function UpdateTeam()
	{
		//
	}

	public function DeleteTeam()
	{
		//
	}

}
