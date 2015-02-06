
<?php

/*    Route::get('Tunisie/{n}', function($n)
{

  $results = DB::select('select * from ' . $n );
  return $results ;

});
*/

class TunisieController extends AuthedController {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */ 

  public function index($n)
  {

       $data = array();

    if (Auth::check()) {
        $data = Auth::user();
    }


return View::make('tunisie', array('data'=>$data))
      ->with('n', $n);


  }


  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    //
  }


  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store()
  {
    //
  }


  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    
  }


  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    //
  }


  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id)
  {
    //
  }


  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    //
  }


}
        