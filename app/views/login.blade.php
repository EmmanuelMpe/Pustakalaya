<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <title>Pustakalaya</title>
  <meta name="description" content="Pustakalaya, Library Management System." />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  {{ HTML::style('bootstrap/bootstrap.css') }}
  {{ HTML::style('bootstrap/bootswatch.css') }}
</head>
<body>
<div class="container center-block">
  <div class="row">
    <div class="col-lg-8 col-md-7 col-sm-6">
    <h1>Pustakalaya</h1>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-8 col-md-7 col-sm-6 pull-right">
    <h2 class="pull-right">Log in</h2>
    </div>
  </div>

  <div class="contact-form">
    <div class="row">
      <div class="col-lg-4 pull-right">
        <form class="form-horizontal">
          <fieldset>

            <div class="form-group">
              <label for="inputUsername" class="col-lg-2 control-label">Username</label>
              <div class="col-lg-10">
                <input class="form-control" id="inputUsername" placeholder="Username" type="text" autofocus="autofocus">
              </div>
            </div>
            <div class="form-group">
              <label for="inputPassword" class="col-lg-2 control-label">Password</label>
              <div class="col-lg-10">
                <input class="form-control" id="inputPassword" placeholder="Password" type="password">
                <div class="col-lg-6">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox"> Remember me </label>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="help-block pull-right">
                    <a href="{{{ URL::to('/reset') }}}">Forgot Password?</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="col-lg-10 col-lg-offset-2">
                <button type="submit" class="btn btn-primary pull-right col-md-4">Log In</button>
              </div>
            </div>
          </fieldset>
        </form>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-4 pull-right">
        <div class="alert alert-dismissable alert-danger">
          <button type="button" class="close" data-dismiss="alert">×</button>
          <strong>Username</strong> and <strong>password</strong> didn't match. </a>
        </div>
      </div>
    </div>
  </div>
</div>

{{ HTML::script('bootstrap/jquery-1.js') }}
{{ HTML::script('bootstrap/bootstrap.js') }}
{{ HTML::script('bootstrap/bootswatch.js') }}
</body>

<html>