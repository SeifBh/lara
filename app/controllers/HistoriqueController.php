<?php

class HistoriqueController extends BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /historique
	 *
	 * @return Response
	 */

	public function historique_admin()
	{
		$nomEquipe1 = Match::pluck('nomEquipe1');
        $nomEquipe2 = Match::pluck('nomEquipe2');
		$h = DB::table('historiquex')->get();

		return View::make('admin.historique',array('h'=>$h,'nomEquipe1'=>$nomEquipe1,'nomEquipe2'=>$nomEquipe2));



	}
	public function index()
	{

       $data = array();

    if (Auth::check()) {

        $data = Auth::user();

        $user_id = Auth::user()->id;


        $nomEquipe1 = Match::pluck('nomEquipe1');
        $nomEquipe2 = Match::pluck('nomEquipe2');


		$histo=Historique::where('user_id',  '=', $user_id )->get();






return View::make('Historique', array('data'=>$data,'histo'=>$histo,'nomEquipe1'=>$nomEquipe1,'nomEquipe2'=>$nomEquipe2
));
        


    }



	}
}