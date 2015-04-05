<?php

//=====================*****/LeagueController\*****======================================

//Ajout League
Route::get('AddLeague','LeagueController@AddLeague_index');
Route::post('AddLeague_Succes','LeagueController@AddLeague_succes');

//Modif League
Route::get('EditLeague','LeagueController@EditLeague_index');
Route::post('EditPlayer_Succes','LeagueController@EditLeague_succes');

//Supp League
Route::get('DeleteLeague','LeagueController@DeleteLeague_index');
Route::post('DeleteLeague_succes','LeagueController@DeleteLeague_succes');

//=====================*****/playersController\*****======================================



//Ajout Joueur
Route::get('AddPlayer','playersController@AddPlayer_index');
Route::post('AddPlayer_Succes','playersController@AddPlayer_Succes');

//Modif Joueur
Route::get('EditPlayer','playersController@EditPlayer_index');
Route::post('EditPlayer_Succes','playersController@EditPlayer_Succes');

//Supp Joueur
Route::get('DeletePlayer','playersController@DeletePlayer_index');
Route::post('DeletePlayer_Succes','playersController@DeletePlayer_Succes');


//=====================*****/GameController\*****======================================



//Ajout Match
Route::get('AddGame','GameController@AddGame_index');
Route::post('AddGame_Succes','GameController@AddGame_succes');

//Modif Match
Route::get('EditGame','GameController@EditGame_index');
Route::post('EditGame_Succes','GameController@EditGame_succes');

//Supp Match
Route::get('DeleteGame','GameController@DeleteGame_index');
Route::post('DeleteGame_Succes','GameController@DeleteGame_succes');


//Ajout & modif resultat
Route::get('Add_Edit_Result','GameController@Edit_Update_Result');

//Sauvegarde résultat du match
Route::post('savematch', 'GameController@SaveMatch');

//=====================*****/TeamController\*****======================================

//Ajout Equipe
Route::get('AddTeam','TeamController@AddTeam_index');
Route::post('AddTeam_Succes','TeamController@AddTeam_succes');

//Modif Equipe
Route::get('EditTeam','TeamController@EditTeam_index');
Route::post('EditTeam_Succes','TeamController@EditTeam_succes');

//Supp Equipe
Route::get('DeleteTeam','TeamController@DeleteTeam_index');
Route::post('DeleteTeam_Succes','TeamController@DeleteTeam_succes');


//=====================*****/HistoriqueController\*****======================================


Route::get('Historique_Admin','HistoriqueController@historique_admin');

//=====================================================================



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



    //Facebook
    Route::get('login/fb', 'AuthController@doFacebookAuth');
    Route::get('login/fb/callback', 'AuthController@doFacebookLogin');
    Route::get('logout', 'AuthController@doLogout');


//YouCoach
Route::get('/{x}/{y}', 'ManagerController@index');

//Page Historique Utilisateur
Route::resource('/Historique', 'HistoriqueController@index');


//Page Score
Route::resource('/Score', 'ScoreController@index');





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



//Get League ID
Route::get('Ligue',function()
{

$league_id = Input::get('league_id');

$subcategories = Equipe::where('league_id','=',$league_id)->get();

return Response::json($subcategories);
});

//Get League ID
Route::get('Match',function()
{

$league_id = Input::get('league_id');

$subcategories = Match::where('league_id','=',$league_id)->get();

return Response::json($subcategories);
});



Route::get('MatchId',function()
{


$match_id = Input::get('match_id');

$subcategories = Match::where('match_id','=',$match_id)->get();

return Response::json($subcategories);
});




//Get Team ID

Route::get('Teams',function()
{


$team_id = Input::get('team_id');

$subcategories = Player::where('team_id','=',$team_id)->get();

return Response::json($subcategories);
});



//Get Team ID

Route::get('Team',function()
{


$team_id = Input::get('team_id');

$subcategories = Equipe::where('team_id','=',$team_id)->get();

return Response::json($subcategories);
});







//Get Player ID

Route::get('Players',function()
{


$player_id = Input::get('player_id');

$subcategories = Player::where('player_id','=',$player_id)->get();

return Response::json($subcategories);
});



