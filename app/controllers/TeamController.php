<?php

class TeamController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /team
	 *
	 * @return Response
	 */

public function AddTeam_index()
	{

		$data = Auth::user();
        $league = League::all();
		return View::make('admin.team.AddTeam',array('league'=>$league,'data'=>$data));

	}
public function AddTeam_succes()
{
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


		return Response::json("succes");


}
public function EditTeam_index()
	{
	$data = Auth::user();
    $league = League::all();
    $selectedLeague = Input::get('league');
 	$listTeam = DB::table('team')->get();
 	$position = DB::table('player')->get();
 	return View::make('admin.Team.EditTeam',array('league'=>$league,'data'=>$data,'listTeam'=>$listTeam,'position'=>$position));



	}
public function EditTeam_succes()
{

$id = Input::get('team_id');
$nom = Input::get('name');
$nomcomplet = Input::get('fullname');
$stade = Input::get('stade');
$president = Input::get('president');
$coach = Input::get('coach');


DB::table('team')
            ->where('team_id', $id)
            ->update(array('name' => $nom ,
            			'fullName'=> $nomcomplet,
            			'stade' => $stade,
            			'nomPresident'=> $president,
            			'Entraineur'=>$coach));

 return Response::json('succes');


}

public function DeleteTeam_index()
{

	$data = Auth::user();
    $league = League::all();
    $selectedLeague = Input::get('league');
 	$listTeam = DB::table('team')->get();
 	$position = DB::table('player')->get();
 	return View::make('admin.Team.DeleteTeam',array('league'=>$league,'data'=>$data,'listTeam'=>$listTeam,'position'=>$position));



}

public function DeleteTeam_succes()
{

	$id = Input::get('team_id');
	DB::table('team')->where('team_id', '=', $id)->delete();
	return Response::json('succes');

}


}