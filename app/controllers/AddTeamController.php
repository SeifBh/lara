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
        		$league = League::all();


		return View::make('admin.team',array('league'=>$league,'data'=>$data));

	}
	public function AddTeam()
	{
		//

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
		$equipe->league_id = $SelectedLigue;

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
