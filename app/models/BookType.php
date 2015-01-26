<?php

// Model for the table booktypes
class BookType extends Eloquent {

  // Explicitly specify the table
  protected $table='booktypes';

  // We don't need the default timestamps
  public $timestamps=false;

}
