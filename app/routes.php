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
    $sponsors = Sponsor::all();

	return View::make('base.content')->with('sponsors', $sponsors);
});

Route::resource('sponsors', 'SponsorsController');