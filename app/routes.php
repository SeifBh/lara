<?php

Route::get('league','LeagueController@index');

Route::post('ff','LeagueController@add');


Route::post('user','GestionUserController@index');



Route::get('ajax-subcat',function()
{

$cat_id = Input::get('cat_id');

$subcategories = Equipe::where('league_id','=',$cat_id)->get();

return Response::json($subcategories);
});





Route::get('Resultats','AdminController@GestionResultats');


Route::get('Player','AddPlayerController@index');

Route::post('ss','AddPlayerController@AddPlayer');



Route::get('Match','MatchController@index');

Route::get('Historique_Admin','HistoriqueController@historique_admin');


Route::get('Team','AddTeamController@index');



Route::post('tt','AddTeamController@AddTeam');

Route::get('Admin','AdminController@index');


//Route::get('Team','AddTeam@index');


//Interface Administrator










//Match
Route::post('add','MatchController@AddMatch');
Route::post('savematch', 'MatchController@SaveMatch');




//Player
//Route::get('ajouter','AddPlayerController@AddPlayer');


//login page
Route::get('login','AuthController@getLogin');





//index page
Route::get('/', function()
{
    $data = array();

    if (Auth::check()) {
        $data = Auth::user();
    }

   return View::make('template.temp_index', array('data'=>$data));
});



//Controller
    //Facebook
    Route::get('login/fb', 'AuthController@doFacebookAuth');
    Route::get('login/fb/callback', 'AuthController@doFacebookLogin');
    Route::get('logout', 'AuthController@doLogout');
    //Pages
    Route::get('/{x}/{y}', 'ManagerController@index');

    Route::get('/{x}/{y}/Historique', 'HistoriqueController@index');




//Historique



//pages static


Route::get('Tunisie', function()
{
    return View::make('template.temp_tunisie');
});

Route::get('PremierLeague', function()
{
    return View::make('template.temp_Premier');
});

Route::get('BBva', function()
{
    return View::make('template.temp_espagne');  

});

Route::get('Italie', function()
{
    return View::make('template.temp_Italie');
});

Route::get('League1', function()
{
    return View::make('template.temp_League1');
});

