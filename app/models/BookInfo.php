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
}
