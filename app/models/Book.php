<?php

// Model for the table books
class Book extends Eloquent {

  // Explicitly specify the table
  protected $table='books';

  // We don't need the default timestamps
  public $timestamps=false;

}
