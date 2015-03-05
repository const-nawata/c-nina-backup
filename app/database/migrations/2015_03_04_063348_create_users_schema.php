<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersSchema extends Migration {

/**
 * Runs the migrations.
 *
 * @return void
 */
	public function up(){

		Schema::create( 'users', function( Blueprint $uTable ){
			$uTable->engine = 'InnoDB';
			$uTable->increments( 'id' )->unsigned();

			$uTable->string( 'username', 20 )->unique();
			$uTable->string( 'password' );
			$uTable->string( 'email', 100 );
			$uTable->string( 'surname', 100 )->nullable();
			$uTable->string( 'name', 100 )->nullable();
			$uTable->text( 'address' )->nullable();
			$uTable->string( 'phone', 20 )->nullable();


			$uTable->enum( 'role', ['admin','client','guest','seller','woker'] );

			$uTable->boolean('isActive')->default(FALSE);
			$uTable->string('activationCode');

			//	Tokent for possibility to remember use
			$uTable->rememberToken();

			$uTable->timestamps();


			$uTable->index( ['surname', 'name'] );
		});

		$this->createRootAdmin();
	}
//______________________________________________________________________________

/**
 * Reverses the migrations.
 *
 * @return void
 */
	public function down(){
		Schema::drop('users');
	}
//______________________________________________________________________________

	private function createRootAdmin(){
		$user_data	= [
			'username'	=> 'admin'
			,'password'	=> Hash::make( 'admin' )
			,'email'	=> 'nawataster@gmail.com'
			,'surname'	=> 'Root'
			,'name'	=> 'Admin'
			,'address'	=> ''
			,'phone'	=> ''
			,'role'	=> 'admin'
			,'is_active'	=> TRUE
			,'activation_code'	=> ''
		];


	    $user = new User();
    	$user	= $user->fill($user_data);
	    $id = $user->save();

	}
//______________________________________________________________________________

}//	Class end
