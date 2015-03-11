<?php

class AddTeamController extends BaseController {

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


		return Response::json("succes");


	}

	public function UpdateTeam()
	{
		$data = Auth::user();

        $league = League::all();

    $selectedLeague = Input::get('league');

 	$listTeam = DB::table('team')->get();
 	$position = DB::table('player')->get();

 	return View::make('admin.Match.modifier',array('league'=>$league,'data'=>$data,'listTeam'=>$listTeam,'position'=>$position));



	}

	public function edit()
	{
		$id = Input::get('match_id');
		$nom1 = Input::get('nom1');
		$nom2 = Input::get('nom2');
		$etat = Input::get('etat');
		$date = Input::get('date');
		$lieu = Input::get('lieu');

DB::table('match')
            ->where('match_id', $id)
            ->update(array('nomEquipe1' => $nom1 ,
            			'nomEquipe2'=> $nom2,
            			'etat' => $etat,
            			'date'=> $date,
            			'lieu'=>$lieu));

        return Response::json('succes');
	}

	public function DeleteTeam()
	{
				$data = Auth::user();

        $league = League::all();

    $selectedLeague = Input::get('league');

 	$listTeam = DB::table('team')->get();
 	$position = DB::table('player')->get();

 	return View::make('admin.Match.delete',array('league'=>$league,'data'=>$data,'listTeam'=>$listTeam,'position'=>$position));


	}

	public function delete()
	{
				$id = Input::get('match_id');
DB::table('history')->where('match_id', '=', $id)->delete();	


DB::table('match')->where('match_id', '=', $id)->delete();
        return Response::json('Ce Match est supprimee avec succes');
	}

	public function indexEdit()
	{
		$data = Auth::user();

        $league = League::all();

    $selectedLeague = Input::get('league');

 	$listTeam = DB::table('team')->get();
 	$position = DB::table('player')->get();

 	return View::make('admin.Team.modifier',array('league'=>$league,'data'=>$data,'listTeam'=>$listTeam,'position'=>$position));



	}


public function editTeam()
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


public function indexdelete()
{

			$data = Auth::user();

        $league = League::all();

    $selectedLeague = Input::get('league');

 	$listTeam = DB::table('team')->get();
 	$position = DB::table('player')->get();

 	return View::make('admin.Team.delete',array('league'=>$league,'data'=>$data,'listTeam'=>$listTeam,'position'=>$position));



}
public function deleteTeamx()
{
$id = Input::get('team_id');


DB::table('team')->where('team_id', '=', $id)->delete();


        return Response::json('succes');

}


































}
