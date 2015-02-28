<?php

class AddTeamController extends AuthedController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	public function index()
	{

		        $data = Auth::user();

		$listLeague = DB::table('teamx')->distinct()->get();

		return View::make('admin.team',array('listLeague'=>$listLeague,'data'=>$data));

	}
	public function AddTeam()
	{
		//
		$listLeague = DB::table('teamx')->get();

		$nomequipe = Input::get('nomequipe');

		$nomcomplet = Input::get('nomcomplet');

		$SelectedLigue = Input::get('league');

		$stade = Input::get('stade');

		$nomPresident = Input::get('nomPresident');

		$entraineur = Input::get('entraineur');

		$equipe = new Equipe();
		$equipe->name = $nomequipe ;
		$equipe->fullname = $nomcomplet;
		$equipe->stade = $stade;
		$equipe->ligue = $SelectedLigue;

		$equipe->nomPresident = $nomPresident;
		$equipe->Entraineur = $entraineur ;
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
