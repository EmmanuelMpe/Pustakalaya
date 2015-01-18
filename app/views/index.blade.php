@extends('layout.basic') @section('content') @include('layout.navbar')
<div class="container">

  <div class="row">
    <div class="col-lg-8 col-md-7 col-sm-6">
      <h2>Student</h2>
    </div>
  </div>

  <div class="lend-table">
    <div class="row">
      <div class="col-lg-12">
        <table class="table table-striped table-hover ">
          <legend>Lent Books</legend>
          <thead>
            <tr>
              <th>Id</th>
              <th>Book</th>
              <th>Author</th>
              <th>Edition</th>
              <th>Date Issued</th>
              <th>Expiry Date</th>
            </tr>
          </thead>
          <tbody>
            <!-- tr class="info | success | danger | warning | active" -->
            <tr>
              <td>1038</td>
              <td>Into the wild</td>
              <td>Me</td>
              <td>2010</td>
              <td>2014-12-25</td>
              <td>2015-02-25</td>
            </tr>
            <tr>
              <td>1038</td>
              <td>Into the wild</td>
              <td>Me</td>
              <td>2010</td>
              <td>2014-12-25</td>
              <td>2015-02-25</td>
            </tr>
            <tr class="danger">
              <td>1038</td>
              <td>Into the wild</td>
              <td>Me</td>
              <td>2010</td>
              <td>2014-12-25</td>
              <td>2015-02-25</td>
            </tr>
          </tbody>
        </table>

      </div>
    </div>
  </div>

  <hr>



  <div class="row">
    <div class="col-lg-8 col-md-7 col-sm-6">
      <h2>Librarian</h2>
      <!-- <p class="lead">hehe</p> -->
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
                <textarea class="form-control" rows="3" id="inputBook"></textarea>
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

    <hr>

  <div class="row">
    <div class="col-lg-8 col-md-7 col-sm-6">
      <h2>Verifier</h2>
      <!-- <p class="lead">hehe</p> -->
    </div>
  </div>

  <div class="transaction-form">
    <div class="row">
      <div class="col-lg-8">
        <form class="form-horizontal">
          <fieldset>
            <legend>Verify books</legend>
            <div class="form-group">
              <label for="inputEmail" class="col-lg-2 control-label">Username</label>
              <div class="col-lg-10">
                <input class="form-control" id="inputEmail" placeholder="Username" type="text">
              </div>
            </div>
            <div class="form-group">
              <label for="textArea" class="col-lg-2 control-label">Books</label>
              <div class="col-lg-10">
                <textarea class="form-control" rows="3" id="inputBook"></textarea>
                <span class="help-block">Enter book ids seperated by a semicolon.</span>
              </div>
            </div>

           <div class="form-group">
              <div class="col-lg-10 col-lg-offset-2">
                <button type="submit" class="btn btn-primary">Verify</button>
                <button class="btn btn-default pull-right">Cancel</button>
              </div>
            </div>

          </fieldset>
        </form>
      </div>
      <div class="col-lg-4">
        <div class="alert alert-dismissable alert-success">
          <button type="button" class="close" data-dismiss="alert">×</button>
          <strong>Gone with the wind</strong> has been issued.</a>
        </div>

        <div class="alert alert-dismissable alert-danger">
          <button type="button" class="close" data-dismiss="alert">×</button>
          <strong>To kill a mocking bird</strong> hasn't be issued</a>
        </div>

      </div>
    </div>
  </div>



</div>

</div>
@stop
