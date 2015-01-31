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


Route::get('/contact', function()
{
	return View::make('contact');
});

Route::get('/', array('before'=>'auth', function()
{
	return View::make('home');
}));

Route::get('/student', function()
{
	return View::make('user.view');
});

Route::get('/history', function()
{
	return View::make('user.student.history');
});

Route::get('/admin', function()
{
	return View::make('user.admin.home');
});

Route::get('/librarian', function()
{
	return View::make('user.librarian.home');
});

Route::get('/verifier', function()
{
	return View::make('user.verifier.home');
});

Route::get('/edit', function()
{
	return View::make('user.edit');
});

Route::get('/password', function()
{
	return View::make('user.password');
});

Route::get('/reset', function()
{
	return View::make('user.forgot');
});



Route::get('/login', 'LoginController@showLogin');

Route::post('/login', 'LoginController@doLogin');

Route::post('/logout', 'LoginController@doLogout');

Route::get('/tesst', function () {
  //$bt = Book::where('type_name','=','Lendable')->firstOrFail();
  $b = Book::find(1)->firstOrFail();
  return $b->bookInfo;
});

Route::get('/search', function()
{
	return View::make('search');
});

Route::get('/advance', function()
{
	return View::make('advance');
});

Route::get('/booklist', function()
{
	return View::make('booklist');
});

Route::get('/booklog', function()
{
	return View::make('booklog');
});

Route::get('/add', function()
{
	return View::make('add');
});

Route::get('/remove', function()
{
	return View::make('remove');
});

Route::get('/userlist', function()
{
	return View::make('userlist');
});



Event::listen('500', function()
{
    return Response::error('500');
});


Event::listen('404', function()
{
    return Response::error('404');
});

App::missing(function($exception) {
    return Response::view('404', array(), 404);
});
