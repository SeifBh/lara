<?php

class LeagueController extends AuthedController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$data = array();

    if (Auth::check()) 
        
        {


        $data = Auth::user();
        return View::make('admin.league');

        }

	}

	public function add()
	{

		$leaguename= Input::get('nomleague');
		$league = new League();
		$league->name = $leaguename;
		$league->save();
		return 'ok';


	}



}
