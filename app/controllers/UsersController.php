<?php

class UsersController extends MainController {

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

	public function getLogout() {
	    Auth::logout();
	    return Redirect::to('/');
	}
//______________________________________________________________________________

}//	Class end
