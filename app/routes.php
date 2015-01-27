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


Route::get('/login', 'LoginController@showLogin');
Route::post('/login', 'LoginController@doLogin');
Route::post('/logout', 'LoginController@doLogout');

Route::get('/tesst', function () {
  //$bt = Book::where('type_name','=','Lendable')->firstOrFail();
  $b = Book::find(1)->firstOrFail();
  return $b->bookInfo;
});

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

Route::get('/', array('before'=>'auth', function()
{
	return View::make('home');
}));

Route::get('/password', function()
{
	return View::make('password');
});

Route::get('/edit', function()
{
	return View::make('edit');
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


/*
 *  Some Route filters
 */

Route::filter('before', function()
{
    // Do stuff before every request to your application
});


Route::filter('after', function()
{
    // Do stuff before every request to your application
});

Route::filter('auth', function()
{
        if (Auth::guest()) return Redirect::to('login');
});

Route::filter('csrf', function()
{
    if (Request::forged()) return Response::error('500');
});
