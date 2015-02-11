<?php

class BookController extends \BaseController {

  // Display a listing of the resource.
  public function index() {
    if (!Auth::check())
      App::abort(403);

    $type = 'Lendable';
    if (Input::has('type'))
      $type = Input::get('type');

    if ($type!='All')
      $books = Book::where('type_name','=',$type)->paginate(10);
    else
      $books = Book::paginate(10);

    return View::make('book.list')->withBooks($books);
  }


  // Show the form for creating a new resource.
  public function create() {
    if (!Auth::check() || !Auth::user()->isAdmin())
      App::abort(403);

    $book = Session::get('book', new Book);
    $forupdate = Session::get('forupdate',false);

    return View::make('book.create')->withForupdate(false)->
      withBook($book)->withForupdate($forupdate);
  }


  // Store a newly created resource in storage.
  public function store()
  {
    if (!Auth::check() || !Auth::user()->isAdmin())
      App::abort(403);

    // Validation rules
    $rules = array('isbn'=>'required','name'=>'required',
      'author'=>'required','publisher'=>'required',
      'type_name'=>'required|exists:booktypes,name');

    // Validate
    $validator = Validator::make(Input::all(), $rules);
    // Create book and populate
    $book = new Book;
    // TODO dont do this here; may try to load data of bad type
    $book->populateFromInput();

    $messages = array();

    // If fails, construct messagebag and redirect
    if ($validator->fails()) {
      foreach ($validator->messages()->all() as $mesg) {
        $messages[] = array('error',$mesg);
      }
      // TODO load into book only data where validation failed
      //

      return Redirect::to('/book/create')->withMessages($messages)->
        withBook($book)->withForupdate('false');
    }

    // All is good. Save book
    $book->save();

    return Redirect::to('/books');
  }

  // Display the specified resource.
  public function show($id)
  {
    if (!Auth::check())
      App::abort(403);

    $book = Book::find($id);
    return View::make('book.view')->withBook($book);
  }


  // Show the form for editing the specified resource.
  public function edit($id)
  {
    if (!Auth::check() || !Auth::user()->isAdmin())
      App::abort(403);

    $book = Book::find($id);

    return View::make('book.create')->withBook($book)->
      withForupdate(true);
  }

  // Update the specified resource in storage.
  public function update($id)
  {
    if (!Auth::check() || !Auth::user()->isAdmin())
      App::abort(403);

    $book = Book::find($id);
    $book->populateFromInput();
    $messages = array();

    // Validation rules
    $rules = array('name'=>'required',
      'author'=>'required','publisher'=>'required',
      'type_name'=>'required|exists:booktypes,name');

    // Validate
    $validator = Validator::make(Input::all(), $rules);

    // If fails, construct messagebag and redirect
    if ($validator->fails()) {
      foreach ($validator->messages()->all() as $mesg) {
        $messages[] = array('error',$mesg);
      }
      return Redirect::to('/book/create')->withMessages($messages)->
        withBook($book)->withForupdate(true);
    }

    // All is good. Save book
    $book->save();

    return Redirect::to('books');
  }

  // Remove the specified resource from storage.
  public function destroy($id)
  {
    if (!Auth::check() || !Auth::user()->isAdmin())
      App::abort(403);
    Book::find($id)->delete();
    return Redirect::to('books');
  }

}
