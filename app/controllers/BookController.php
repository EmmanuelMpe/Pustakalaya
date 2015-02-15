<?php

class BookController extends \BaseController {

  // Display a listing of the resource.
  public function index() {
    $type = 'All';
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

    $book = Session::get('book', new Book);
    $forupdate = Session::get('forupdate',false);

    return View::make('book.create')->withBook($book)->
      withForupdate($forupdate);
  }


  // Store a newly created resource in storage.
  public function store()
  {


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

    $isbn = $book->isbn;
    // All is good. Save book
    $book->save();
    Event::fire('pustak.book.create',array(Auth::user()->id,$isbn,
      NULL));

    return Redirect::to('/book');
  }

  // Display the specified resource.
  public function show($id)
  {
    $book = Book::find($id);
    return View::make('book.view')->withBook($book);
  }


  // Show the form for editing the specified resource.
  public function edit($id)
  {
    $book = Book::find($id);

    return View::make('book.create')->withBook($book)->
      withForupdate(true);
  }

  // Update the specified resource in storage.
  public function update($id)
  {
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

    $isbn = $book->isbn;
    // All is good. Save book
    $book->save();

    Event::fire('pustak.book.edit',array(Auth::user()->id,$isbn,
      NULL));
    return Redirect::to('book');
  }

  // Remove the specified resource from storage.
  public function destroy($id)
  {
    Book::find($id)->delete();
    Event::fire('pustak.book.delete',array(Auth::user()->id,$id,
      NULL));
    return Redirect::to('book');
  }
}
