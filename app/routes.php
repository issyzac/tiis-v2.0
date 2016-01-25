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
	return View::make('home');
});

Route::get('schedule/age', function(){
    return View::make('Schedule.age');
});

Route::get('home', function()
{
    return View::make('home');
});

Route::get('child/search', function()
{
    return View::make('Child.search');
});

Route::get('child/register', function()
{
    return View::make('Child.register');
});

Route::get('child/info', function()
{
    return View::make('Child.childinfo');
});

Route::get('child/duplicates', function()
{
    return View::make('Child.duplicates');
});

Route::get('schedule/scheduled', function(){
     return View::make('Schedule.scheduled');
});


Route::get('schedule/doselist', function(){
     return View::make('Schedule.doselist');
});

Route::get('immunization/monthlyplan', function()
{
    return View::make('immunization.monthlyplan');
});

Route::get('immunization/vaccinationregister', function()
{
    return View::make('immunization.vaccinationregister');
});

