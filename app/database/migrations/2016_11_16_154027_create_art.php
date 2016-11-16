<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArt extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('art2', function($newtable)
		{
			$newtable->increments('id');
			$newtable->string('artist');
			$newtable->string('title', 500);
			$newtable->text('description');
			$newtable->date('created');
			$newtable->boolean('alumni');
			$newtable->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP')); // <- b/c timestamps() not working
			$newtable->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		// drop the table
		Schema::drop('art2');
	}

}
