<?php

// Model for the table bookitems
class BookItem extends Eloquent {

  // Explicitly specify the table
  protected $table='bookitems';

  // We don't need the default timestamps
  public $timestamps=false;

  // Get the bookInfo of the book
  public function bookInfo() {
    return $this->belongsTo('Books','book_isbn','isbn');
  }

  // Get the user of this book
  public function user() {
    return $this->belongsTo('User','assigned_to','id');
  }
}
