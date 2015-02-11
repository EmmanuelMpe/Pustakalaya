@extends('layout.basic')
@section('content')

<div class="row">
  <div class="col-lg-6 col-md-7 col-sm-6">
    @if ($user->isStudent())
    <h2>{{$stdinfo->rollnumber}}</h2>
    @elseif ($user->isAdmin())
        @if (Auth::user()->id==$user->id)
        <h2>Dashboard</h2>
        @else
        <h2>Admin</h2>
        @endif
    @elseif ($user->isLibrarian())
    <h2>Librarian</h2>
    @elseif ($user->isVerifier())
    <h2>Verifier</h2>
    @endif
  </div>
</div>

<div class="row">
  <div class="col-lg-4">
    <div class="panel panel-default">
      <div class="panel-heading">Basic information</div>
      <ul class="list-group">
        <li class="list-group-item lead">
          {{{$user->name}}}
          @if ($user->isStudent() && $stdinfo->fineacc - $stdinfo->finepaid > 0)
          <span class="badge">
            <b> रु {{$stdinfo->fineacc - $stdinfo->finepaid}} </b>
            @if ( !Auth::user()->isStudent() )
            <a href="#" class="badge">Clear</a>
            @endif
         </span>
        @endif
        </li>
        @if ($user->email != "")
        <li class="list-group-item">
          {{{$user->email}}}
        </li>
        @endif
        @if ($user->address != "")
        <li class="list-group-item">
          {{{$user->address}}}
        </li>
        @endif
      </ul>
    </div>

    @if ($user->isStudent())
        @include ('user.history')
    @elseif ($user->isAdmin() && Auth::user()->id==$user->id)
        @include ('user.history')
    @endif
  </div>

  <div class="col-lg-8">
    @if ($user->isStudent())
        @include ('user.student.content')
        @include ('user.recommendation')
    @elseif ($user->isAdmin() && Auth::user()->id==$user->id)
        @include ('user.admin.content')
        @include ('user.recommendation')
    @endif
  </div>
</div>
@stop
