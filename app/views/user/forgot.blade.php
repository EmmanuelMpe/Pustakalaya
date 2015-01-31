@extends('layout.basic')
@section('content')

<div class="row">
  <div class="col-lg-6 col-md-7 col-sm-6">
    <h2>Profile</h2>
    <p class="lead">Reset your passoword</p>
  </div>
</div>

<div class="contact-form">
  <div class="row">
    <div class="col-lg-8">
      <form class="form-horizontal">
        <fieldset>

          <div class="form-group">
            <label for="inputUsername" class="col-lg-4 control-label">Username</label>
            <div class="col-lg-8">
              <input class="form-control" id="inputUsername" placeholder="Username" type="text">
            </div>
          </div>

          <div class="form-group">
            <label for="inputEmail" class="col-lg-4 control-label">Email</label>
            <div class="col-lg-8">
              <input class="form-control" id="inputEmail" placeholder="Email" type="text">
            </div>
          </div>

          <div class="form-group">
            <div class="col-lg-8 col-lg-offset-4">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </div>
        </fieldset>
      </form>
    </div>

    @include('layout.alertbox')

  </div>
</div>

@stop
