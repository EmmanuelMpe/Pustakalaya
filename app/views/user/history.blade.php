<?php

if (Auth::user()->isAdmin()) {
  $events = LogEvent::where('user_id','=',Auth::user()->id)->orWhere(
    'actor_id','=',Auth::user()->id)->get();

} elseif (Auth::user()->isLibrarian()) {
  $events = LogEvent::where('user_id','=',Auth::user()->id)->
    orWhere('actor_id','=',Auth::user()->id)->get();

} elseif (Auth::user()->isStudet()) {
  $events = LogEvent::where('user_id','=',Auth::user()->id)->
    where('actor_id','=',Auth::user()->id)->get();
}

?>

<div class="panel panel-default">
  <div class="panel-heading">History</div>
  <ul class="list-group">
    @if (count($events)==0)
    <br><center>Nothing to show</center><br>
    @else
      @foreach ($events as $event)
      <li class="list-group-item">
        {{ $event->pretty() }}
      </li>
      @endforeach
    @endif
  </ul>
</div>
