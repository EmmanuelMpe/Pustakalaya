@extends('layout.basic')

@section('content')

<div class="row">
  <div class="col-lg-8 col-md-7 col-sm-6">
    <h2>Profile</h2>
    <p class="lead">Change your profile</p>
  </div>
</div>

<div class="contact-form">
  <div class="row">
    <div class="col-lg-8">
      <form class="form-horizontal">
        <fieldset>
          <div class="form-group">
            <label for="inputUsername" class="col-lg-2 control-label">Username</label>
            <div class="col-lg-10">
              <input class="form-control" id="inputUsername" placeholder="Username" type="text" readonly="readonly">
            </div>
          </div>
          <div class="form-group">
            <label for="inputName" class="col-lg-2 control-label">Name</label>
            <div class="col-lg-10">
              <input class="form-control" id="inputName" placeholder="Name" type="text">
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail" class="col-lg-2 control-label">Email</label>
            <div class="col-lg-10">
              <input class="form-control" id="inputEmail" placeholder="Email" type="text">
            </div>
          </div>
          <div class="form-group">
            <label for="inputAddress" class="col-lg-2 control-label">Address</label>
            <div class="col-lg-10">
              <input class="form-control" id="inputAddress" placeholder="Address" type="text">
            </div>
          </div>
          <div class="form-group">
            <label for="inputContact" class="col-lg-2 control-label">Contact</label>
            <div class="col-lg-10">
              <input class="form-control" id="inputContact" placeholder="Contact" type="text">
            </div>
          </div>

          <div class="form-group">
            <div class="col-lg-10 col-lg-offset-2">
              <button type="submit" class="btn btn-primary">Save</button>
              <button class="btn btn-default pull-right">Cancel</button>
            </div>
          </div>

        </fieldset>
      </form>
    </div>
    <div class="col-lg-4">
      <div class="alert alert-dismissable alert-success">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>Profile</strong> successfully updated.</a>
      </div>

      <div class="alert alert-dismissable alert-danger">
        <button type="button" class="close" data-dismiss="alert">×</button>
        Unable to complete <strong>changes</strong>
        </a>
      </div>
    </div>
  </div>
</div>
@stop
