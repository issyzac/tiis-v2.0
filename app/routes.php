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
	return View::make('trial');
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

Route::get('child/duplicates', function()
{
    return View::make('Child.duplicates');
});

