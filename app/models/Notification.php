
<?php

use Illuminate\Database\Eloquent\SoftDeletingTrait;

// Model for the table notifications
class Book extends Eloquent {

  use SoftDeletingTrait;

  protected $dates = ['deleted_at'];

  // Explicitly specify the table
  protected $table='notifications';

  // We don't need the default timestamps
  public $timestamps=false;

 }
