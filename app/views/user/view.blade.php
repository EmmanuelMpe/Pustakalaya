@extends('layout.basic')
@section('content')


<div class="row">
  <div class="col-lg-4">
    <h2>
    @if ($user->isStudent())
        {{$stdinfo->rollnumber}}
    @elseif ($user->isAdmin())
        @if (Auth::user()->id==$user->id)
            Dashboard
        @else
            Admin
        @endif
    @elseif ($user->isLibrarian())
        Librarian
    @elseif ($user->isVerifier())
        Verifier
    @endif
    </h2>
  </div>
</div>

<div class="row">
  <div class="col-lg-4">
    <div class="panel panel-default">
      <div class="panel-heading">Basic information

    @if (Auth::user()->isAdmin() && Auth::user()->id!=$user->id)
        <div class="bs-component pull-right">
          <a href="{{URL::to('/user/'.$user->id.'/edit') }}" class="" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Edit">
            <span class="glyphicon glyphicon-edit"> </span>
          </a>
          <a href="{{URL::to('/user/'.$user->id.'/delete') }}" class="" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Delete">
            <span class="glyphicon glyphicon-trash"> </span>
          </a>
        </div>

        @endif



      </div>
      <ul class="list-group">
        <li class="list-group-item lead">
          {{{$user->name}}}

        @if ($user->isStudent() && $stdinfo->fineacc - $stdinfo->finepaid > 0)
          <span class="badge">
                @if ( !Auth::user()->isStudent() )
                    <a href="#" class="badge">
                        Clear <b> रु {{$stdinfo->fineacc - $stdinfo->finepaid}} </b>
                    </a>
                    @else
                        <b> रु {{$stdinfo->fineacc - $stdinfo->finepaid}} </b>
                    @endif

         </span>
        @endif

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

    @include ('layout.alertbox')

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
