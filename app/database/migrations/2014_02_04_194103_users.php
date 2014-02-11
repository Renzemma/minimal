<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Users extends Migration {

	public function up()
	{
		Schema::create('users', function($table){
			$table->increments('id');
			$table->string('username', 16)->unique();
			$table->string('password', 64);
			$table->string('nombre', 16);
			$table->string('apellido', 16);
			$table->string('img');
			$table->timestamps();

		});
	}

	public function down()
	{
		DB::statement('SET FOREIGN_KEY_CHECKS=0;');
		Schema::dropIfExists('users');
		DB::statement('SET FOREIGN_KEY_CHECKS=1;');
	}

}
