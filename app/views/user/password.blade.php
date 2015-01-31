@extends('layout.basic')
@section('content')

<div class="row">
  <div class="col-lg-6">
    <h2>Profile</h2>
    <p class="lead">Change your passoword</p>
  </div>
</div>

<div class="contact-form">
  <div class="row">
    <div class="col-lg-8">
      <form class="form-horizontal">
        <fieldset>
          <div class="form-group">
            <label for="inputPasswordNew" class="col-lg-4 control-label"> New Password </label>
            <div class="col-lg-8">
              <input class="form-control" id="inputPasswordNew" placeholder="Set New Password" type="password">
            </div>
          </div>
          <div class="form-group">
            <label for="inputPasswordConfirm" class="col-lg-4 control-label"> Confirm Password </label>
            <div class="col-lg-8">
              <input class="form-control" id="inputPasswordConfirm" placeholder="Confirm New Password" type="password">
            </div>
          </div>

          <div class="form-group">
            <div class="col-lg-8 col-lg-offset-4">
              <button type="submit" class="btn btn-primary">Submit</button>
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
