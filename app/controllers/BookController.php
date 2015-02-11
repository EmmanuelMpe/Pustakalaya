<?php

class BookController extends \BaseController {

  // Display a listing of the resource.
  public function index() {
    if (!Auth::check())
      App::abort(403);

    $type = 'All';
    if (Input::has('type'))
      $type = Input::get('type');

    if ($type!='All')
      $books = BookInfo::where('type_name','=',$type)->paginate(10);
    else
      $books = BookInfo::paginate(10);

    return View::make('bookinfo.list')->withBooks($books);
  }


  // Show the form for creating a new resource.
  public function create() {
    if (!Auth::check() || !Auth::user()->isAdmin())
      App::abort(403);

    $bookinfo = Session::get('bookinfo', new BookInfo);
    $forupdate = Session::get('forupdate',false);

    return View::make('bookinfo.create')->withForupdate(false)->
      withBookinfo($bookinfo)->withForupdate($forupdate);
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
    // Create bookinfo and populate
    $bookinfo = new BookInfo;
    // TODO dont do this here; may try to load data of bad type
    $bookinfo->populateFromInput();

    $messages = array();

    // If fails, construct messagebag and redirect
    if ($validator->fails()) {
      foreach ($validator->messages()->all() as $mesg) {
        $messages[] = array('error',$mesg);
      }
      // TODO load into bookinfo only data where validation failed
      //

      return Redirect::to('/book/create')->withMessages($messages)->
        withBookinfo($bookinfo)->withForupdate('false');
    }

    // All is good. Save bookinfo
    $bookinfo->save();

    return Redirect::to('/books');
  }

  // Display the specified resource.
  public function show($id)
  {
    if (!Auth::check())
      App::abort(403);

    $bookinfo = BookInfo::find($id);
    return View::make('bookinfo.view')->withBookinfo($bookinfo);
  }


  // Show the form for editing the specified resource.
  public function edit($id)
  {
    if (!Auth::check() || !Auth::user()->isAdmin())
      App::abort(403);

    $bookinfo = BookInfo::find($id);

    return View::make('bookinfo.create')->withBookinfo($bookinfo)->
      withForupdate(true);
  }

  // Update the specified resource in storage.
  public function update($id)
  {
    if (!Auth::check() || !Auth::user()->isAdmin())
      App::abort(403);

    $bookinfo = BookInfo::find($id);
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
        withBookinfo($bookinfo)->withForupdate(true);
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
    BookInfo::find($id)->delete();
    return Redirect::to('books');
  }

}
