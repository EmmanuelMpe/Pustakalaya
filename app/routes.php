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


Route::get('/student', function()
{
	return View::make('student');
});

Route::get('/librarian', function()
{
	return View::make('librarian');
});

Route::get('/verifier', function()
{
	return View::make('verifier');
});

Route::get('/', function()
{
	return View::make('home');
});

Route::get('/password', function()
{
	return View::make('password');
});

Route::get('/edit', function()
{
	return View::make('edit');
});


Route::get('/login', function()
{
	return View::make('login');
});

Route::get('/forgot', function()
{
	return View::make('forgot');
});

Route::get('/contact', function()
{
	return View::make('contact');
});

App::missing(function($exception) {
    return Response::view('404', array(), 404);
});
