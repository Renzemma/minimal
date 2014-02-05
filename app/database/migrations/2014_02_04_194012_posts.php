<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Posts extends Migration {

	public function up()
	{
		Schema::create('posts', function($table){
			$table->increments('id');
			$table->integer('user_id')->unsigned();
			$table->string('content');
			$table->timestamps();
			
			$table->foreign('user_id')->references('id')->on('users')->onDelete('CASCADE')->onUpdate('CASCADE');
		});
	}

	public function down()
	{
		DB::statement('SET FOREIGN_KEY_CHECKS=0;');
		Schema::dropIfExists('posts');
		DB::statement('SET FOREIGN_KEY_CHECKS=1;');
	}

}
