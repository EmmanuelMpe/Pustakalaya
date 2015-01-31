@extends('layout.basic') @section('content')

<div class="row">
  <div class="col-lg-6">
    <h2>Add a User</h2>
  </div>
</div>

<!-- Type of user must be inferred by the link or something and additional
information should be passed for creating users like student -->

<hr>


<div class="contact-form">
  <div class="row">
    <div class="col-lg-8">
      <form class="form-horizontal">
        <fieldset>
          <div class="form-group">
            <label for="inputUsername" class="col-lg-4 control-label">Username</label>
            <div class="col-lg-8">
              <input class="form-control" id="inputUsername" value="Username" type="text">
            </div>
          </div>
          <div class="form-group">
            <label for="inputName" class="col-lg-4 control-label">Name</label>
            <div class="col-lg-8">
              <input class="form-control" id="inputName" value="Name" type="text">
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail" class="col-lg-4 control-label">Email</label>
            <div class="col-lg-8">
              <input class="form-control" id="inputEmail" value="Email" type="text">
            </div>
          </div>
          <div class="form-group">
            <label for="inputAddress" class="col-lg-4 control-label">Address</label>
            <div class="col-lg-8">
              <input class="form-control" id="inputAddress" value="Address" type="text">
            </div>
          </div>
          <div class="form-group">
            <label for="inputContact" class="col-lg-4 control-label">Contact</label>
            <div class="col-lg-8">
              <input class="form-control" id="inputContact" value="Contact" type="text">
            </div>
          </div>

          <div class="form-group">
            <div class="col-lg-8 col-lg-offset-4">
              <button type="submit" class="btn btn-primary">Save</button>
              <button class="btn btn-default pull-right">Cancel</button>
            </div>
          </div>

        </fieldset>
      </form>
    </div>

    @include('layout.alertbox')

  </div>
</div>

@stop
