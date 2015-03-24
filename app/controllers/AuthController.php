<?php



class AuthController extends BaseController {

  //connects app with clients fb
  public function doFacebookAuth() {

    $facebook = new Facebook(Config::get('facebook'));
    $params = array(
        'redirect_uri' => url('/login/fb/callback'),
        'scope' => 'email',
    );
    return Redirect::to($facebook->getLoginUrl($params));

  }

  //store users fb data
  public function doFacebookLogin()
  {
  	$code = Input::get('code');
    if (strlen($code) == 0) return Redirect::to('/')->with('message', 'There was an error communicating with Facebook');

    $facebook = new Facebook(Config::get('facebook'));
    $uid = $facebook->getUser();

    if ($uid == 0) return Redirect::to('/')->with('message', 'There was an error');

    $me = $facebook->api('/me');

    $profile = Profile::whereUid($uid)->first();
    if (empty($profile)) {

        $user = new User;
        $user->name = $me['first_name'].' '.$me['last_name'];
        $user->email = $me['email'];
        $user->photo = 'https://graph.facebook.com/'.$me['id'].'/picture?type=large';

        $user->save();

        $profile = new Profile();
        $profile->uid = $uid;
        $profile->username = $me['name'];
        $profile = $user->profiles()->save($profile);
    }

    $profile->access_token = $facebook->getAccessToken();
    $profile->save();

    $user = $profile->user;

    Auth::login($user);
    

    return Redirect::to('/')->with('message', 'Logged in with Facebook');

  }

  //logout/clear the session
  public function doLogout() {

    Auth::logout();
    return Redirect::to('/');

  }

public function getLogin(){

  if (Auth::check())
  {
    return Redirect::to('/');
  }
    return View::make('login');  
}
}