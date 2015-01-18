@extends('layout.basic')

@section('content')

<div class="row">
  <div class="col-lg-8 col-md-7 col-sm-6">
    <h2>Forgot Password</h2>
     <p class="lead">Fill in the form to retrive your password.</p>
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
            <label for="inputEmail" class="col-lg-2 control-label">Email</label>
            <div class="col-lg-10">
              <input class="form-control" id="inputEmail" placeholder="Email" type="text">
            </div>
          </div>

          <div class="form-group">
            <div class="col-lg-10 col-lg-offset-2">
              <button type="submit" class="btn btn-primary">Submit</button>
              <button class="btn btn-default pull-right">Log In</button>
            </div>
          </div>

        </fieldset>
      </form>
    </div>
    <div class="col-lg-4">
      <div class="alert alert-dismissable alert-success">
        <button type="button" class="close" data-dismiss="alert">×</button>
        Check your <strong>email</strong> for further processing.</a>
      </div>

      <div class="alert alert-dismissable alert-danger">
        <button type="button" class="close" data-dismiss="alert">×</button>
        Unable to find <strong>username</strong> and <strong>email</strong>
        </a>
      </div>

    </div>
  </div>
</div>

@stop
