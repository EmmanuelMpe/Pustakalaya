<?php

// Model for the table roles
class Role extends Eloquent {

  // Explicitly specify the table
  protected $table='roles';

  // We don't need the default timestamps
  public $timestamps=false;

}
