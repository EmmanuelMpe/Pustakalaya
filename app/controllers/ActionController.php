<?php

class ActionController extends \BaseController {

  public function isValid() {

    $rules = array('user_id'=>'required|numeric|exists:users,id',
      'bookitem_ids'=>'required|regex:/^([\d]+)((;)*([\d]+))*(;)*$/');
    $bookitem_ids = preg_split('/;/',Input::get('bookitem_ids'),NULL,
      PREG_SPLIT_NO_EMPTY);
    $messages = array(); $fails = false;

    $validator = Validator::make(Input::all(),$rules);
    if ($validator->fails()) {
      $fails = true;
      foreach ($validator->messages()->all() as $mesg) {
        $messages[] = array('error',$mesg);
      }
    }

    if (!$fails) {
      $rules2 = array('bookitem_id'=>'required|exists:bookitems,id');

      foreach ($bookitem_ids as $bookitem_id) {
        $validator = Validator::make(array('bookitem_id'=>$bookitem_id),
          $rules2);
        if ($validator->fails()) {
          $fails = true;
          $messages[] = array('error',
            "There is no book item with id $bookitem_id");
        }
      }
    }

    if ($fails)
      return array(false,$messages);
    else
      return array(true,Input::get('user_id'),$bookitem_ids);
  }

  public function postIssue() {

    $validity = $this->isValid();
    if (!$validity[0]) {
      return Redirect::to('/')->withMessages($validity[1]);
    }

    // All is good. Issue the books
    foreach ($validity[2] as $bookitem_id) {
      $bookitem = BookItem::find($bookitem_id);
      $bookitem->assigned_to = $validity[1];
      $bookitem->assigned_date = new DateTime;
      $bookitem->save();
    }

    $goodMessage = array('notice','The books were issued');
    return Redirect::to('/')->withMessages(array($goodMessage));
  }

  public function postReturn() {
    $validity = $this->isValid();
    if (!$validity[0]) {
      return Redirect::to('/')->withMessages($validity[1]);
    }

    // All is good. Continue to return
    foreach ($validity[2] as $bookitem_id) {
      $bookitem = BookItem::find($bookitem_id);
      $bookitem->assigned_to = NULL;
      $bookitem->assigned_date = NULL;
      $bookitem->save();
    }

    $goodMessage = array('notice','The books were returned');
    return Redirect::to('/')->withMessages(array($goodMessage));
  }

  public function postRenew() {
    $validity = $this->isValid();
    if (!$validity[0]) {
      return Redirect::to('/')->withMessages($validity[1]);
    }

    // All is good. Continue to return
    foreach ($validity[2] as $bookitem_id) {
      $bookitem = BookItem::find($bookitem_id);
      $bookitem->assigned_date = new DateTime;
      $bookitem->save();
    }

    $goodMessage = array('notice','The books were renewed');
    return Redirect::to('/')->withMessages(array($goodMessage));
  }
}
