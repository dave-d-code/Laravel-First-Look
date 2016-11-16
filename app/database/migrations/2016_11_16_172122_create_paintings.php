<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaintings extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('paintings', function($thePaintings)
		{
			$thePaintings->increments('id');
			$thePaintings->string('title');
			$thePaintings->string('artist');
			$thePaintings->integer('year');
			$thePaintings->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP')); // <- b/c timestamps() not working
			$thePaintings->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('paintings');
	}

}
