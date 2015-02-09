
<?php

class TunisieController extends BaseController {

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
    }

return View::make('tunisie5', array('data'=>$data))
      ->with(array('x'=>$x,'y'=>$y));


  }



}
        