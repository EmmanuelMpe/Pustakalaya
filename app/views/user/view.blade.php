@extends('layout.basic')
@section('content')


<div class="row">
  <div class="col-lg-4">
    <h2>
    @if ($user->isStudent())
        {{$stdinfo->batch.
        $stdinfo->department_sname.
        $stdinfo->rollnumber}}
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
          <a href="#" class="" data-toggle="tooltip"
             data-placement="bottom" title="" data-original-title="Delete"
            onclick="document.df.submit()"
            >
            <span class="glyphicon glyphicon-trash"> </span>
          </a>
        </div>
          <form action="/user/{{$user->id}}" method="POST" name="df">
            <input type="hidden" name="_method" value="delete">
          </form>
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



@if (Auth::user()->isLibrarian())
<div class="panel panel-default">
  <div class="panel-heading">History</div>
    <div class="panel-body">

<div class="transaction-form">
  <div class="row">
    <div class="col-lg-12">
      <form class="form-horizontal" name="actionform"
        method="POST" action="">
        <fieldset>
            <div class="form-group">
            <div class="col-lg-12">
              <textarea class="form-control" rows="2" id="inputBook"
                name="bookitem_ids" placeholder="Ids"></textarea>
              <span class="help-block">Enter id seperated by a semicolon.</span>
            </div>
          </div>

          <div class="form-group">
            <div class="col-lg-12">
              <div class="btn-group">
                <button type="submit" class="btn btn-sm btn-primary"
                  onClick="submitIssue()">Issue</button>
                <button type="submit" class="btn btn-sm btn-warning"
                  onClick="submitRenew()">Renew</button>
              </div>
              <button type="submit" class="btn btn-sm btn-success"
                onClick="submitReturn()">Return</button>
              <button class="btn btn-default btn-sm pull-right">Cancel</button>
            </div>
          </div>

        </fieldset>
      </form>
    </div>

    </div>
</div>
</div>

</div>

@endif

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

@section ('scripts')
{{ HTML::script('js/plugins/morris/morris-data.js') }}
{{ HTML::script('js/plugins/morris/morris-min.js') }}
{{ HTML::script('js/plugins/morris/morris.js') }}
{{ HTML::script('js/plugins/morris/raphael.min.js') }}
@stop
