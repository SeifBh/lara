<?php

class HistoriqueController extends AuthedController {

	/**
	 * Display a listing of the resource.
	 * GET /historique
	 *
	 * @return Response
	 */
	public function index()
	{


		return View::make('Historique');


	}
}