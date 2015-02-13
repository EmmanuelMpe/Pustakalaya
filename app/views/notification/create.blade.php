@extends('layout.basic')

@section('content')

<div class="row">
  <div class="col-lg-8 col-md-7 col-sm-6">
    <h2>Notification</h2>
    <!--
    <p class="lead">Edit a notification</p>
    -->
    <p class="lead">Create a new notification</p>
  </div>
</div>

<div class="contact-form">
  <div class="row">
    <div class="col-lg-8">
      <form class="form-horizontal">
        <fieldset>
          <div class="form-group">
            <label for="textArea" class="col-lg-2 control-label">Content</label>
            <div class="col-lg-10">
              <textarea class="form-control" rows="3" id="inputContent" placeholder="Your notification"></textarea>
            </div>
          </div>
          <div class="form-group">
            <label for="inputStartdate" class="col-lg-2 control-label">Start Date</label>
            <div class="col-lg-10">
              <input class="form-control" id="inputStartdate" placeholder="Start date" type="date">
            </div>
          </div>
          <div class="form-group">
            <label for="inputExpirydate" class="col-lg-2 control-label">Expiry Date</label>
            <div class="col-lg-10">
              <input class="form-control" id="inputExpirydate" placeholder="Expiry date" type="date">
            </div>
          </div>

            @include ('layout.submitbtn')

        </fieldset>
      </form>
    </div>

    @include ('layout.alertbox')

  </div>
</div>

@stop
