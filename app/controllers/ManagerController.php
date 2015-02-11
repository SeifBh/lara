
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

    if (Auth::check()) {
        $data = Auth::user();
        return View::make('manager', array('data'=>$data))
      ->with(array('x'=>$x,'y'=>$y));
    }
    else
    {


    return View::make('login');

    }




  }

  public function store()
  {
    
 /*   $historique = new Historique([
    'user_id'=>profile('uid'),
    'p1'=>Input::get('p1'),
    'p2'=>Input::get('p2'),

    $historique->save()
      ]);

*/

  }



}
        