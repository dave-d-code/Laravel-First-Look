<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	// making a table database schema on the fly. Dumb question. does this keep making tables?
	// Answer yes, code to run once only. Only for cases of dynamics tables required. Hence will be
	// commented out.

/*
	Schema::create('art', function($newtable)
	{
		$newtable->increments('id'); // auto increment. where is primary key?
		$newtable->string('artist'); // makes VARCHAR(255)
		$newtable->string('title', 500); //makes VARCHAR(500)
		$newtable->text('description'); // make text
		$newtable->date('created'); // date format
		$newtable->date('exhibition_date');
		$newtable->timestamps(); // creates 2 columns. when created, when updated
	});

*/

	// altering the above table
/*
	Schema::table('art', function($newtable)
	{
		$newtable->boolean('alumni');
		$newtable->dropColumn('exhibition_date');
	});
*/
	return View::make('hello');
});

Route::get('about', function()
{
	return 'About content goes here';
});

Route::get('about/directions', function()
{
	return 'Directions go here';
});

Route::get('about/{theSubject}', function($theSubject)
{
	return $theSubject . ' is the subject parameter';
});

Route::get('about/classes/{theSubject}', function($theSubject)
{
	return "content inside {$theSubject} classes goes here.";
});