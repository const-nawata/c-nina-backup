<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
// 	protected $hidden = array('password', 'remember_token');

	protected $fillable = [
		'username'
		,'password'
		,'email'
		,'surname'
		,'name'
		,'address'
		,'phone'
		,'role'
		,'isActive'
		,'activationCode'
		,'remember_token'
];

	public static $validation = [
	    'username'  => 'required|alpha_num|unique:users'
	    ,'password'  => 'required|confirmed|min:6'
	    ,'email'     => 'required|email'
	];


	protected function generateCode() {
	    return Str::random( 20 ); // default lenth is 16
	}
//______________________________________________________________________________

	public function sendActivationMail() {
	    $activationUrl = action(
	        'UsersController@getActivate',
	        [
	            'userId'		=> $this->id,
	            'activationCode'=> $this->activationCode,
	        ]
	    );

		//XXX	Not work
// 	    $that = $this;
// 	    Mail::send('emails/activation',
// 	        [ 'activationUrl' => $activationUrl ],
// 	        function ($message) use($that) {
// 	            $message->to($that->email)->subject('Thank you for registration!');
// 	        }
// 	    );
	}
//______________________________________________________________________________

	public function register() {

	    $this->password = Hash::make($this->password);
	    $this->activationCode = $this->generateCode();
	    $this->isActive = FALSE;
	    $this->save();

	    Log::info("User [{$this->email}] registered. Activation code: {$this->activationCode}");

// 	    $this->sendActivationMail();	//XXX Not work

	    return $this->id;
	}
//______________________________________________________________________________

	public function activate($activationCode) {

		if ($this->isActive || $activationCode != $this->activationCode)
	        return FALSE;

	    $this->activationCode = '';
	    $this->isActive = TRUE;
	    $this->save();

	    Log::info("User [{$this->email}] successfully activated");

	    return TRUE;
	}
//______________________________________________________________________________

}//	Class end
