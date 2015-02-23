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
    @include ('user.info')

    @if (Auth::user()->isLibrarian())
      @include ('user.librarianform')
    @elseif (Auth::user()->isVerifier())
      @include ('user.verifierform')
    @endif

      @include ('user.history')

  </div>

  <div class="col-lg-8">
  @include ('layout.alertbox')

  @if ($user->isStudent())
    @include ('user.student.content')
  @elseif ($user->isAdmin() && Auth::user()->id==$user->id)
    @include ('user.admin.content')
  @endif

  @include ('user.recommendation')
  </div>
</div>
@stop

@section('scriptcontent')
function submitIssue() {
  document.actionform.action = "/action/issue";
  return document.actionform.submit();
}

function submitRenew() {
  document.actionform.action = "/action/renew";
  return document.actionform.submit();
}

function submitReturn() {
  document.actionform.action = "/action/return";
  return document.actionform.submit();
}

function submitVerify() {
  document.actionform.action = "/action/issue";
  return document.actionform.submit();
}

@stop
