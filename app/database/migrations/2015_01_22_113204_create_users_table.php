<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 * 
	 * 
	 * 
	 * @return void
	 */
	public function up()
	{
	    Schema::drop('users');
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('login')->unique();
			$table->string('password',60)->required();
			$table->float('balance')->default(0);
			$table->rememberToken();
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
