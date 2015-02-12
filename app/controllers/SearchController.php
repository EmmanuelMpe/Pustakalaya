<?php

class SearchController extends \BaseController {

  public function getIndex() {
  }

  public function postIndex() {
    // Build validation rules
    $rules = array('query_type'=>'required|in:User,Book',
      'book_type'=>'in:Lendable,NonLendable,Reference,All',
      'user_type'=>'in:Student,Verifier,Admin,All');
    //return Input::all();

    // Validate
    $validator = Validator::make(Input::all(),$rules);
    $messages = array();

    $query = Input::get('query','');

    // If validation fails, construct messages and bail out
    if ($validator->fails()) {
      foreach ($validator->messages()->all() as $mesg) {
        $messages[] = array('error',$mesg);
      }
      return Redirect::to('/')->withMessages($messages);
    }

    $querytype = Input::get('query_type');
    if ($querytype=='Book') {
      $type = Input::get('book_type');
      if ($type=='' | $type=='All') {
        $books = Book::where('name','like',"%".$query."%")->
          orWhere('author','like',"%".$query."%")->
          orWhere('publisher','like',"%".$query."%")->
          paginate(10);
      } else {
        $books = Book::where('type_name','=',$type)->
          where('name','like',"%".$query."%")->
          orWhere('author','like',"%".$query."%")->
          orWhere('publisher','like',"%".$query."%")->
          paginate(10);
      }
        return View::make('book.list')->withBooks($books);
    } elseif ($querytype=='User') {
      return Input::all();
      $type = Input::get('user_type');
      if ($type=='')
        $users = User::paginate(10);
      else
        $users = User::where('role_name','=',$type)->paginate(10);
      return View::make('user.list')->withUsers($users);
    }
  }
}
