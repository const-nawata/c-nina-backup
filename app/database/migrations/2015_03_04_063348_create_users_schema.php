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

			$uTable->string( 'login', 20 )->unique();
			$uTable->string( 'password' );
			$uTable->string( 'email', 100 );
			$uTable->string( 'surname', 100 )->nullable();
			$uTable->string( 'name', 100 );
			$uTable->text( 'address' )->nullable();
			$uTable->string( 'phone', 20 )->nullable();

			$uTable->enum( 'role', ['admin','client','guest'] );

			$uTable->timestamps();


			$uTable->index( ['surname', 'name'] );
		});


//TODO: Create admin record. Don't forget to generate password.

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

}//	Class end
