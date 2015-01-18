@extends('layout.basic')

@section('content')

<div class="row">
  <div class="col-lg-8 col-md-7 col-sm-6">
    <h2>Contact Us</h2>
    <p class="lead">Send us your queries here.</p>
  </div>
</div>

<div class="contact-form">
  <div class="row">
    <div class="col-lg-8">
      <form class="form-horizontal">
        <fieldset>
          <div class="form-group">
            <label for="textArea" class="col-lg-2 control-label">Comment</label>
            <div class="col-lg-10">
              <textarea class="form-control" rows="3" id="inputComments" placeholder="Place your comment here..."></textarea>
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
            <div class="col-lg-10 col-lg-offset-2">
              <button type="submit" class="btn btn-primary">Submit</button>
              <button class="btn btn-default pull-right">Cancel</button>
            </div>
          </div>

        </fieldset>
      </form>
    </div>
    <div class="col-lg-4">
      <div class="alert alert-dismissable alert-success">
        <button type="button" class="close" data-dismiss="alert">×</button>
        Your <strong>comment</strong> has been submitted successfully.</a>
      </div>

      <div class="alert alert-dismissable alert-danger">
        <button type="button" class="close" data-dismiss="alert">×</button>
        Unable to submit your <strong>comment.</strong> </a>
      </div>

    </div>
  </div>
</div>

@stop
