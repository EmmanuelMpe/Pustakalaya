<?php

class BookItemController extends \BaseController {

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    if (!Auth::check() || !Auth::user()->isAdmin())
      App::abort(403);
    return View::make('book.create');
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
    for ($i=0; $i<(int)Input::get('quantity'); $i++) {
      $bookitem = new Book;
      $bookitem->info_isbn = Input::get('isbn');
      $bookitem->edition = Input::get('edition');
      $bookitem->save();
    }
    return Redirect::to('/book');
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
