<?php

// Model for the table logs
class LogEvent extends Eloquent {

  // Explicitly specify the table
  protected $table='events';

  // We don't need the default timestamps, we have our own
  public $timestamps=false;

  // Get the 'user' for this log event
  public function user() {
    return $this->belongsTo('User','user_id','id');
  }

  // Get the 'book' for this log event
  public function book() {
    return $this->belongsTo('Book','book_isbn','isbn');
  }

  // Get the 'actor' for this log event
  public function actor() {
    return $this->belongsTo('User','actor_id','id');
  }
}
