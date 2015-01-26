<?php

// Model for the table admininfo
class AdminInfo extends Eloquent {

  // Explicitly specify the table
  protected $table='admininfo';

  // We don't need the default timestamps
  public $timestamps=false;

}
