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

  public function pretty() {
    $eventtype = explode('.',$this->type)[0];
    if ($eventtype=='user')
      return $this->prettyUser();
    elseif ($eventtype=='book')
      return $this->prettyBook();
    elseif ($eventtype=='bookitem')
      return $this->prettyBookitem();
  }

  public function prettyUser() {
    $what = implode('.',array_slice(explode('.',$this->type),1));
    $user = User::withTrashed()->find($this->user_id);
    $actor = User::withTrashed()->find($this->actor_id);
    if ($what=='create') {
      return "User <a href='/user/$user->id'>$user->name</a> was
        created by <a href='/user/$actor->id'>$actor->name</a>";
    } elseif ($what=='delete') {
      return "User <a href='/user/$user->id'>$user->name</a> was
        deleted by <a href='/user/$actor->id'>$actor->name</a>";
    } elseif ($what=='edit') {
      return "User <a href='/user/$user->id'>$user->name</a> was
        updated by <a href='/user/$actor->id'>$actor->name</a>";
    } else
        return 'Some user methods are missing';
  }

  public function prettyBook() {
    $what = implode('.',array_slice(explode('.',$this->type),1));
    $book = Book::withTrashed()->find($this->book_isbn);
    $user = User::withTrashed()->find($this->user_id);
    if ($what=='create') {
      return "Book <a href='/book/$book->isbn'>$book->name</a> was
        created by <a href='/user/$user->id'>$user->name</a>";
    } elseif ($what=='delete') {
      return "Book <a href='/book/$book->isbn'>$book->name</a> was
        deleted by <a href='/user/$user->id'>$user->name</a>";
    } elseif ($what=='edit') {
      return "Book <a href='/book/$book->isbn'>$book->name</a> was
        updated by <a href='/user/$user->id'>$user->name</a>";
    } else
        return 'Some book methods are missing';
  }

  public function prettyBookitem() {
    $what = implode('.',array_slice(explode('.',$this->type),1));
    $book = Book::find($this->book_isbn);
    $actor = User::find($this->actor_id);
    if ($what=='issue') {
      return "$book->name was issued.";
    } elseif ($what=='return') {
      return "$book->name was returned.";
    } elseif ($what=='renew') {
      return "$book->name was renewed.";
    }
    return "Something was done";
  }

  // Event handler for all events
  public static function handle($userid, $bookid, $actorid) {
    $event = Event::firing();
    $event_str = implode('.',(array_slice(explode(".",$event),1)));
    $logevent = new LogEvent;
    $logevent->time = new DateTime;
    $logevent->type = $event_str;
    $logevent->user_id = $userid;
    $logevent->book_isbn = $bookid;
    $logevent->actor_id = $actorid;
    $logevent->save();
  }
}
