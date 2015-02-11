
<?php

class ManagerController extends BaseController {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */ 

  public function index($x,$y)
  {

       $data = array();

    if (Auth::check()) 
                        {
                                    $data = Auth::user();

                                    $z = str_replace('_', ' ', $y);

                                    $nomEquipe1 = DB::table('matchx')->where('nomEquipe1',  '=', $z )->pluck('nomEquipe1');

                                    $id_match = DB::table('matchx')->where('nomEquipe1',  '=', $z )->pluck('match_id');
                                    $nomEquipe2 = DB::table('matchx')->where('nomEquipe1',  '=', $z )->pluck('nomEquipe2');
                                                   

                                    $z3 = str_replace(' ', '_', $nomEquipe2);

                                    $date = DB::table('matchx')->where('nomEquipe1',  '=', $z )->pluck('date');

                                    $lieu =  DB::table('matchx')->where('nomEquipe1',  '=', $z )->pluck('lieu');



                                    return View::make('manager', array('data'=>$data, 'z'=>$z, 'x'=>$x, 'y'=>$y, 'z3'=>$z3, 'nomEquipe1'=>$nomEquipe1, 
                                      'nomEquipe2'=>$nomEquipe2, 'date'=>$date, 'lieu'=>$lieu, 'id_match'=>$id_match))
                                  ->with(array('x'=>$x,'y'=>$y));
                        }
    else
    {


    return View::make('login');

    }




  }

  public function store()
  {

    

  }

  public function save_match()
  {

    $user_id = Auth::user()->id;
    $match_id = Input::get('id_match');
    $p1 = Input::get('p1');
    $p2 = Input::get('p2');

    $hist = new Historique();
    $hist->user_id = $user_id;
    $hist->match_id = $match_id;
    $hist->p1 = $p1;
    $hist->p2 = $p2;

    $hist->save();


}

public function AddMatch()
{

    $match = new Match();
    $match->nomEquipe1 = 'Equipe3' ;
    $match->nomEquipe2 = 'Equipe4' ;
    $match->lieu = 'djerba' ;
    $match->date ='2015-04-10' ;
    $match->r1 = '19' ;
    $match->r2 ='4' ;
    $match->save();
    return 'succes';
}

}
        