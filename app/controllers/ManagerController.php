
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


        $data = Auth::user();

                                    $z = str_replace('_', ' ', $y);

$GK1 = Player::where('position',  '=', 'GK1')->where('team','=',$z)->pluck('name');
$GK2 = Player::where('position',  '=', 'GK2')->where('team','=',$z)->pluck('name');
$GK3 = Player::where('position',  '=', 'GK3')->where('team','=',$z)->pluck('name');


$DR1 = Player::where('position',  '=', 'DR1')->where('team','=',$z)->pluck('name');
$DR2 = Player::where('position',  '=', 'DR2')->where('team','=',$z)->pluck('name');
$DR3 = Player::where('position',  '=', 'DR3')->where('team','=',$z)->pluck('name');


$DL1 = Player::where('position',  '=', 'DL1')->where('team','=',$z)->pluck('name');
$DL2 = Player::where('position',  '=', 'DL2')->where('team','=',$z)->pluck('name');
$DL3 = Player::where('position',  '=', 'DL3')->where('team','=',$z)->pluck('name');


$DC1 = Player::where('position',  '=', 'DC1')->where('team','=',$z)->pluck('name');
$DC2 = Player::where('position',  '=', 'DC2')->where('team','=',$z)->pluck('name');

$DC3 = Player::where('position',  '=', 'DC3')->where('team','=',$z)->pluck('name');
$DC4 = Player::where('position',  '=', 'DC4')->where('team','=',$z)->pluck('name');



$MCD1 = Player::where('position',  '=', 'MCD1')->where('team','=',$z)->pluck('name');
$MCD2 = Player::where('position',  '=', 'MCD2')->where('team','=',$z)->pluck('name');
$MCD3 = Player::where('position',  '=', 'MCD3')->where('team','=',$z)->pluck('name');


$MCG1 = Player::where('position',  '=', 'MCG1')->where('team','=',$z)->pluck('name');
$MCG2 = Player::where('position',  '=', 'MCG2')->where('team','=',$z)->pluck('name');
$MCG3 = Player::where('position',  '=', 'MCG3')->where('team','=',$z)->pluck('name');

                                    


$AC1 = Player::where('position',  '=', 'AC1')->where('team','=',$z)->pluck('name');
$AC2 = Player::where('position',  '=', 'AC2')->where('team','=',$z)->pluck('name');

$AC3 = Player::where('position',  '=', 'AC3')->where('team','=',$z)->pluck('name');
$AR1 = Player::where('position',  '=', 'AR1')->where('team','=',$z)->pluck('name');
$AR2 = Player::where('position',  '=', 'AR2')->where('team','=',$z)->pluck('name');
$AR3 = Player::where('position',  '=', 'AR3')->where('team','=',$z)->pluck('name');


$AL1 = Player::where('position',  '=', 'AL1')->where('team','=',$z)->pluck('name');
$AL2 = Player::where('position',  '=', 'AL2')->where('team','=',$z)->pluck('name');
$AL3 = Player::where('position',  '=', 'AL3')->where('team','=',$z)->pluck('name');

$FC1 = Player::where('position',  '=', 'FC1')->where('team','=',$z)->pluck('name');
$FC2 = Player::where('position',  '=', 'FC2')->where('team','=',$z)->pluck('name');
$FC3 = Player::where('position',  '=', 'FC3')->where('team','=',$z)->pluck('name');


$President = DB::table('team')->where('name',  '=', $z )->pluck('NomPresident');
$Entraineur = DB::table('team')->where('name',  '=', $z )->pluck('Entraineur');
$stade = DB::table('team')->where('name',  '=', $z )->pluck('stade');

                                    $id_match = Match::where('nomEquipe1',  '=', $z )->pluck('match_id');



                                    $nomEquipe1 = Match::where('nomEquipe1',  '=', $z )->orwhere('nomEquipe2',  '=', $z )->pluck('nomEquipe1');
                                    
                                    $nomEquipe2 = Match::where('nomEquipe2',  '=', $z )->orwhere('nomEquipe1',  '=', $z )->pluck('nomEquipe2');
                                                   

                                    $nom_Equipe_1 = str_replace(' ', '_', $nomEquipe1);
                                    $nom_Equipe_2 = str_replace(' ', '_', $nomEquipe2);

                                    $date = Match::where('nomEquipe1',  '=', $z )->pluck('date');

                                    $lieu =  Match::where('nomEquipe1',  '=', $z )->pluck('lieu');

if ($GK2 == '') {
return View::make('manager', array('data'=>$data, 'z'=>$z, 'x'=>$x, 'y'=>$y,

'nomEquipe1'=>$nomEquipe1, 
'nomEquipe2'=>$nomEquipe2,
'nom_Equipe_1' => $nom_Equipe_1,
'nom_Equipe_2' => $nom_Equipe_2,
'date'=>$date, 'lieu'=>$lieu, 'id_match'=>$id_match,
'GK1'=>$GK1,'GK2'=>$GK2,'GK3'=>$GK3,
'DR1'=>$DR1,'DR2'=>$DR2,'DR3'=>$DR3,
'DL1'=>$DL1,'DL2'=>$DL2,'DL3'=>$DL3,

'DC1'=>$DC1,'DC2'=>$DC2,
'DC3'=>$DC3,'DC4'=>$DC4,

'MCD1'=>$MCD1,'MCD2'=>$MCD2,'MCD3'=>$MCD3,
'MCG1'=>$MCG1,'MCG2'=>$MCG2,'MCG3'=>$MCG3,

'AC1'=>$AC1,'AC2'=>$AC2,'AC3'=>$AC3,

'AR1'=>$AR1,'AR2'=>$AR2,'AR3'=>$AR3,

'AL1'=>$AL1,'AL2'=>$AL2,'AL3'=>$AL3,

'FC1'=>$FC1,'FC2'=>$FC2,'FC3'=>$FC3,

'President'=>$President,'Entraineur'=>$Entraineur,'stade'=>$stade,


))
->with(array('x'=>$x,'y'=>$y));
}







  }



}
        