<?php

class BookController extends \BaseController {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
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

    return View::make('resource.bookinfo.list')->withBooks($books);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create() {
    if (!Auth::check() || !Auth::user()->isAdmin())
      App::abort(403);
    return View::make('resource.bookinfo.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store()
  {
    if (!Auth::check() || !Auth::user()->isAdmin())
      App::abort(403);

    $bookinfo = new BookInfo;
    $bookinfo->isbn = Input::get('isbn');
    $bookinfo->name = Input::get('title');
    $bookinfo->author = Input::get('author');
    $bookinfo->publisher = Input::get('publisher');
    $bookinfo->type_name = Input::get('type');
    $bookinfo->save();

    if ((int)Input::get('quantity')!=0) {
      for ($i=0; $i<(int)Input::get('quantity'); $i++) {
        $bookitem = new Book;
        $bookitem->info_isbn = Input::get('isbn');
        $bookitem->edition = Input::get('edition');
        $bookitem->save();
      }
    }
    return Redirect::to('/books');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    //
  }
}
