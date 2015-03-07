<?php

class UsersController extends BaseController {

	public function getLogin(){
		return View::make('users/login');
	}
//______________________________________________________________________________

	public function postLogin() {
	    $creds = [
	        'password' => Input::get('password'),
	        'isActive'  => 1, // Only activated users can authorise
	    ];

	    $username 		= Input::get('username');

// 	    $ct				= strpos($username, '@') ? 'email' : 'username';
// 	    $creds["$ct"]	= $username;

	    $creds['username']	= $username;

	    // Try to authorise user
	    if (Auth::attempt($creds, Input::has('remember'))) {
	        Log::info("User [{$username}] successfully logged in.");
	        return Redirect::intended();
	    }

	    Log::info("User [{$username}] failed to login.");
	    return Redirect::back()->withAlert('Wrong username or password or accaunt is not activated yet.');
	}
//______________________________________________________________________________

}//	Class end
