<?php

class LeagueController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function AddLeague_index()
	{
		$data = array();

  

        $data = Auth::user();
        return View::make('admin.League.addLeague',array('data'=>$data));

        

	}

	public function AddLeague_succes()
	{

		$leaguename= Input::get('nomleague');
		$league = new League();
		$league->name = $leaguename;
		$league->save();
		return 'succes';


	}

	public function EditLeague_index()
	{

	}

	public function EditLeague_succes()
	{

	}

	public function DeleteLeague_index()
	{

	}

	public function DeleteLeague_succes()
	{
		
	}


}
