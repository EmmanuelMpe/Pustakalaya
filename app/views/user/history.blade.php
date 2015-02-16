<?php

if (Auth::user()->isAdmin()) {
  $events = LogEvent::where('user_id','=',Auth::user()->id)->orWhere(
    'actor_id','=',Auth::user()->id)->get();

} elseif (Auth::user()->isLibrarian()) {
  $events = LogEvent::where('user_id','=',Auth::user()->id)->
    orWhere('actor_id','=',Auth::user()->id)->get();

} elseif (Auth::user()->isStudent()) {
  $events = LogEvent::where('user_id','=',Auth::user()->id)->
    where('actor_id','=',Auth::user()->id)->get();
}

?>

<div class="panel panel-default">
  <div class="panel-heading">History</div>
    @if ($events->count() ==0)
    <div class="panel-body text-center">
        None
    </div>
    @else
    <ul class="list-group">
        @foreach ($events as $event)
        <li class="list-group-item">
          {{ $event->pretty() }}
        </li>
        @endforeach
      </ul>
    @endif
</div>
