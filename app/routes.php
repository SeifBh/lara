
<?php

//login page
Route::get('/login', function()
{
    return View::make('login');
});


//index page
Route::get('/', function()
{
    $data = array();

    if (Auth::check()) {
        $data = Auth::user();
    }

   return View::make('index', array('data'=>$data));
});









//Controller

Route::get('login/fb', 'AuthController@doFacebookAuth');
Route::get('login/fb/callback', 'AuthController@doFacebookLogin');
Route::get('logout', 'AuthController@doLogout');
Route::get('Tunisie/{n}', 'TunisieController@index');
Route::get('BBva/{n}', 'BBvaController@index');
Route::get('Italie/{n}', 'ItalieController@index');
Route::get('PremierLeague/{n}', 'PremierController@index');
Route::get('League1/{n}', 'League1Controller@index');


//pages static
Route::get('Tunisie', function()
{
    return View::make('temp_tunisie');
});

Route::get('PremierLeague', function()
{
    return View::make('temp_Premier');
});

Route::get('BBva', function()
{
    return View::make('temp_espagne');  

});

Route::get('Italie', function()
{
    return View::make('temp_Italie');
});

Route::get('League1', function()
{
    return View::make('temp_League1');
});

