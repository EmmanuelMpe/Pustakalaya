<?php

// Model for the table bookinfo
class BookInfo extends Eloquent {

  // Explicitly specify the table
  protected $table='bookinfo';

  // Our primary key is the isbn, not id
  protected $primaryKey = 'isbn';

  // We don't need the default timestamps
  protected $timestamps=false;

}
