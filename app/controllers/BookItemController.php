<?php


class BookItemController extends \BaseController {

  // Display a listing of the resource.
  public function index() {
    if (!Auth::check())
      App::abort(403);
    App::abort(404);

    /*$type = 'All';
    if (Input::has('type'))
      $type = Input::get('type');

    if ($type!='All')
      //$bookitems = DB::table('bookitems')->groupBy('book_isbn')->get()->paginate(10);
      $bookitems = Book::paginate(10);
    else
      $bookitems = Book::paginate(10);

    return View::make('bookitem.list')->withBookitems($bookitems);
     */
  }


  // Show the form for creating a new resource.
  public function create() {
    if (!Auth::check() || !Auth::user()->isAdmin())
      App::abort(403);
    return View::make('bookitem.create');
  }


  // Store a newly created resource in storage.
  public function store()
  {
    if (!Auth::check() || !Auth::user()->isAdmin())
      App::abort(403);

    // Validation rules
    $rules = array('book_isbn'=>'required','edition'=>'required',
      'quantity'=>'required|numeric|min:1');

    // Validate
    $validator = Validator::make(Input::all(), $rules);

    $messages = array();

    // If fails, construct messagebag and redirect
    if ($validator->fails()) {
      foreach ($validator->messages()->all() as $mesg) {
        $messages[] = array('error',$mesg);
      }
      return Redirect::to('/bookitem/create')->withMessages($messages);
    }

    // All is good. Create bookitems
    $bookitems = array();
    for ($i=0; $i<Input::get('quantity'); $i++) {
      $bookitem = new BookItem(array('book_isbn'=>
        Input::get('book_isbn'),'edition'=>Input::get('edition')));
      $bookitem->save();
      $bookitems[] = $bookitem;
    }

    return View::make('bookitem.idlist')->withBookitems($bookitems);
  }

  // Display the specified resource.
  public function show($id)
  {
    if (!Auth::check())
      App::abort(403);

    $bookinfo = Book::find($id);
    // Put a checking if bookinfo is null or not
    // giving problems
    return View::make('book.view')->withBook($bookinfo);
  }


  // Show the form for editing the specified resource.
  public function edit($id)
  {
    if (!Auth::check() || !Auth::user()->isAdmin())
      App::abort(403);

    $bookinfo = Book::find($id);

    return View::make('book.create')->withBook($bookinfo)->
      withForupdate(true);
  }

  // Update the specified resource in storage.
  public function update($id)
  {
    if (!Auth::check() || !Auth::user()->isAdmin())
      App::abort(403);

    $bookinfo = Book::find($id);
    $bookinfo->populateFromInput();
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
        withBook($bookinfo)->withForupdate(true);
    }

    // All is good. Save bookinfo
    $bookinfo->save();

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
