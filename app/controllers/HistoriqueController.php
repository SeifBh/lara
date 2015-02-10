<?php

class HistoriqueController extends BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /historique
	 *
	 * @return Response
	 */
	public function index()
	{

       $data = array();

    if (Auth::check()) {
        $data = Auth::user();
    }

return View::make('Historique', array('data'=>$data));


	}
}