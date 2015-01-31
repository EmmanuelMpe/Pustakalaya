@extends('layout.basic')

@section('content')

<div class="row">
  <div class="col-lg-8 col-md-7 col-sm-6">
    <h2>Librarian<span class="lead">/Harikala</span></h2>
  </div>
</div>

<div class="transaction-form">
  <div class="row">
    <div class="col-lg-8">
      <form class="form-horizontal">
        <fieldset>
          <legend>Issue, Renew or Return books</legend>

          <div class="form-group">
            <label for="inputEmail" class="col-lg-2 control-label">Username</label>
            <div class="col-lg-10">
              <input class="form-control" id="inputEmail" placeholder="Username" type="text">
            </div>
          </div>

          <div class="form-group">
            <label for="textArea" class="col-lg-2 control-label">Books</label>
            <div class="col-lg-10">
              <textarea class="form-control" rows="3" id="inputBook" placeholder="Place book IDs here..."></textarea>
              <span class="help-block">Enter book ids seperated by a semicolon.</span>
            </div>
          </div>

          <div class="form-group">
            <div class="col-lg-10 col-lg-offset-2">
              <button type="submit" class="btn btn-primary">Renew</button>
              <button type="submit" class="btn btn-success">Issue</button>
              <button type="submit" class="btn btn-warning">Return</button>
              <button class="btn btn-default pull-right">Cancel</button>
            </div>
          </div>

        </fieldset>
      </form>
    </div>
    <div class="col-lg-4">
      <div class="alert alert-dismissable alert-success">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>Gone with the wind</strong> has been renewed.</a>
      </div>

      <div class="alert alert-dismissable alert-danger">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>To kill a mocking bird</strong> can't be issued. It is already issued.</a>
      </div>

    </div>
  </div>
</div>

@stop
