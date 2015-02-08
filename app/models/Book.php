<?php

// Model for the table books
class Book extends Eloquent {

  // Explicitly specify the table
  protected $table='books';

  // We don't need the default timestamps
  public $timestamps=false;

  // Get the bookInfo of the book
  public function bookInfo() {
    return $this->belongsTo('BookInfo','info_isbn','isbn');
  }

  // Get the user of this book
  public function user() {
    return $this->belongsTo('User','assigned_to','id');
  }

  // Load model from input data
  public function populateFromInput() {

    if (Input::has('isbn'))
      $this->isbn = Input::get('isbn');

    if (Input::has('name'))
      $this->name = Input::get('name');

    if (Input::has('author'))
      $this->author = Input::get('author');

    if (Input::has('publisher'))
      $this->publisher = Input::get('publisher');

    if (Input::has('type_name'))
      $this->type_name = Input::get('type_name');
  }

}
