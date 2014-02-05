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
			$table->sting('nombre', 16);
			$table->sting('apellido', 16);
			$table->string('img');
			$table->timestamps();

		});
	}

	public function down()
	{
		Schema::dropIfExists('users');
	}

}
