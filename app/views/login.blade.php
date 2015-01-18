@extends('layout.basic')

@section('content')

<div class="row">
  <div class="col-lg-8 col-md-7 col-sm-6">
    <h2>Log in</h2>
    <!-- <p class="lead">hehe</p> -->
  </div>
</div>

<div class="contact-form">
  <div class="row">
    <div class="col-lg-6">
      <form class="form-horizontal">
        <fieldset>
          <div class="form-group">
            <label for="inputUsername" class="col-lg-2 control-label">Username</label>
            <div class="col-lg-10">
              <input class="form-control" id="inputUsername" placeholder="Username" type="text">
            </div>
          </div>
          <div class="form-group">
            <label for="inputPassword" class="col-lg-2 control-label">Password</label>
            <div class="col-lg-10">
              <input class="form-control" id="inputPassword" placeholder="Password" type="password">
              <div class="checkbox">
                <label>
                  <input type="checkbox"> Remember me
                </label>
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="col-lg-10 col-lg-offset-2">
              <button type="submit" class="btn btn-primary">Log In</button>
              <button class="btn btn-default pull-right">Forget Password</button>
            </div>
          </div>

        </fieldset>
      </form>
    </div>
    <div class="col-lg-4">

      <div class="alert alert-dismissable alert-danger">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>Username</strong> and <strong>password</strong> didn't match. </a>
      </div>

    </div>
  </div>
</div>

@stop
