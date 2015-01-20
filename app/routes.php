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

Route::get('/history', function()
{
	return View::make('studentHistory');
});

Route::get('/student', function()
{
	return View::make('student');
});

Route::get('/admin', function()
{
	return View::make('admin');
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

Route::get('/reset', function()
{
	return View::make('forgot');
});

Route::get('/contact', function()
{
	return View::make('contact');
});

Route::get('/search', function()
{
	return View::make('search');
});

Route::get('/addbooks', function()
{
	return View::make('addBooks');
});

Route::get('/addnewbook', function()
{
	return View::make('addNewBook');
});

Route::get('/recommended', function()
{
	return View::make('recommended');
});

Route::get('/trending', function()
{
	return View::make('trending');
});

Route::get('/booklist', function()
{
	return View::make('booklist');
});

Route::get('/booklog', function()
{
	return View::make('booklog');
});

Route::get('/advance', function()
{
	return View::make('advance');
});

App::missing(function($exception) {
    return Response::view('404', array(), 404);
});
