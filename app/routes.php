
<?php


Route::get('/login', function()
{
    return View::make('login');
});

Route::get('/', function()
{
    $data = array();

    if (Auth::check()) {
        $data = Auth::user();
    }

   return View::make('index', array('data'=>$data));
});


Route::get('Tunisie', function()
{
    return View::make('tunisie');
});







Route::get('BBva', function()
{

	return View::make('Espagne');
        $this->filter('before', 'auth');

});


Route::get('Italie', function()
{
	return View::make('Italie');
});


Route::get('PremierLeague', function()
{
	return View::make('Premier');
});

Route::get('League1', function()
{
	return View::make('League1');
});


Route::get('login/fb', 'AuthController@doFacebookAuth');
Route::get('login/fb/callback', 'AuthController@doFacebookLogin');
Route::get('logout', 'AuthController@doLogout');
Route::get('Tunisie/{n}', 'TunisieController@index');
Route::get('BBva/{n}', 'BBvaController@index');
Route::get('Italie/{n}', 'ItalieController@index');
Route::get('PremierLeague/{n}', 'PremierController@index');
Route::get('League1/{n}', 'League1Controller@index');




