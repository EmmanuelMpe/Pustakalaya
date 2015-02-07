<?php if (Session::has('messages'))
  $messages = Session::get('messages');
?>

@if (isset($messages))
<div class="col-lg-8">
  @foreach ($messages as $msg)
  @if ($msg[0]=='notice')
  <div class="alert alert-dismissable alert-success">
  @elseif ($msg[0]=='error')
  <div class="alert alert-dismissable alert-danger">
  @endif
    <button type="button" class="close" data-dismiss="alert">×</button>
    {{$msg[1]}}
  </div>
  @endforeach
</div>
@endif
