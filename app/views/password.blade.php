@extends('layout.basic')

@section('content')

<div class="row">
  <div class="col-lg-6">
    <h2>Change Password</h2>
    <!-- <p class="lead">hehe</p> -->
  </div>
</div>

<div class="contact-form">
  <div class="row">
    <div class="col-lg-8">
      <form class="form-horizontal">
        <fieldset>
          <div class="form-group">
            <label for="inputPasswordNew" class="col-lg-2 control-label">New Password</label>
            <div class="col-lg-10">
              <input class="form-control" id="inputPasswordNew" placeholder="Set New Password" type="password">
            </div>
          </div>
          <div class="form-group">
            <label for="inputPasswordConfirm" class="col-lg-2 control-label">Confirm Password</label>
            <div class="col-lg-10">
              <input class="form-control" id="inputPasswordConfirm" placeholder="Confirm New Password" type="password">
            </div>
          </div>

          <div class="form-group">
            <div class="col-lg-10 col-lg-offset-2">
              <button type="submit" class="btn btn-primary">Submit</button>
              <button class="btn btn-default pull-right">Cancel</button>
            </div>
          </div>

        </fieldset>
      </form>
    </div>
    <div class="col-lg-4">
      <div class="alert alert-dismissable alert-danger">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>Password</strong> didn't match.</a>
      </div>

    </div>
  </div>
</div>

@stop
