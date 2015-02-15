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

  // Event handler for all events
  public static function handle() {
    $event = Event::firing();
    $event_str = implode('.',(array_slice(explode(".",$event),1)));
    $logevent = new LogEvent;
    $logevent->time = new DateTime;
    $logevent->type = $event_str;
    $logevent->user_id = Auth::user()->id;
    $logevent->save();
  }
}
