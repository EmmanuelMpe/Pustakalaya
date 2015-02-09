<?php

// Model for the table bookinfo
class BookInfo extends Eloquent {

  // Explicitly specify the table
  protected $table='bookinfo';

  // Our primary key is the isbn, not id
  protected $primaryKey = 'isbn';

  // We don't need the default timestamps
  public $timestamps=false;

  // Get all the Books for this BookInfo
  public function books() {
    return $this->hasMany('Book','info_isbn','isbn');
  }

  // Get the BookType for this BookInfo
  public function bookType() {
    return $this->belongsTo('BookType','type_name','name');
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
