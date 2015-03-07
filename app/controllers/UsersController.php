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
	        Log::info( trans( 'messages.login_success', ['username'=>$username] ) );
	        return Redirect::intended();
	    }

	    Log::info( trans( 'messages.login_failed', ['username'=>$username] ) );

	    return Redirect::back()->withAlert( trans('messages.login_wrong') );
	}
//______________________________________________________________________________

}//	Class end
