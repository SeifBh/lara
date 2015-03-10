<?php

class ScoreController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$data = Auth::user();
		        $user_id = Auth::user()->id;

		$score = DB::table('history')->where('user_id','=',$user_id)->pluck('score');
		return View::make('score',array('data'=>$data,'score'=>$score));
	}




}
