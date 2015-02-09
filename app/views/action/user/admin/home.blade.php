@extends('layout.basic') @section('content')

<div class="row">
  <div class="col-lg-6 col-md-7 col-sm-6">
    <h2>Admin</h2>
  </div>
</div>


<div class="row">
  <div class="col-lg-4">
    <div class="panel panel-default">
      <div class="panel-heading">Basic information</div>
      <ul class="list-group">
        <li class="list-group-item lead">
          Hari sadu
        </li>
        <li class="list-group-item">
          someemal@fuck.com
        </li>
        <li class="list-group-item">
          Near kathmandu
        </li>
      </ul>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading">History</div>
      <ul class="list-group">
        <li class="list-group-item">
          <a href="#">Going under</a> was issued yesterday.
        </li>
        <li class="list-group-item">
          <a href="#">Hethro: The Game</a> was returned on Monday.
        </li>
        <li class="list-group-item">
          <a href="#">Jeevan Katha</a> was returned on 67.12.10.
        </li>
        <li class="list-group-item">
          <a href="#">Save the Rhinos</a> was issused on 67.12.10.
        </li>
      </ul>
    </div>
  </div>

  <div class="col-lg-8">

    <div class="panel panel-default">
      <div class="panel-heading">
        <span class="glyphicon glyphicon-stats" aria-hidden="true"></span> Stats
      </div>
      <div class="panel-body">
        <a href="#" class="btn btn">
          <h4><small><span class="glyphicon glyphicon-book" aria-hidden="true"></span></small> Book </h4>
          <span>234</span>
        </a>
        <a href="#" class="btn btn-lg">
          <h4><small><span class="glyphicon glyphicon-user " aria-hidden="true"></span></small> User </h4>
          <span>34</span>
        </a>
        <a href="#" class="btn btn-lg">
          <h4><small><span class="glyphicon glyphicon-bell" aria-hidden="true"></span></small> Notification </h4>
          <span>29</span>
        </a>
        <a href="#" class="btn btn-lg">
          <h4><small><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></small> Message </h4>
          <span>10</span>
        </a>
        <a href="#" class="btn btn-lg">
          <h4><small><span class="glyphicon glyphicon-user " aria-hidden="true"></span></small> Request </h4>
          <span>110</span>
        </a>
      </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading">
        <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> New
      </div>
      <div class="panel-body">

        <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
          <a href="#" class="btn btn-lg  btn-block">
            <h2><span class="glyphicon glyphicon-book" aria-hidden="true"></span></h2>
            <h4>Book</h4>
          </a>
        </div>


        <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
          <a href="#" class="btn btn-lg  btn-block">
            <h2><span class="glyphicon glyphicon-th-large" aria-hidden="true"></span></h2>
            <h4>Book Info</h4>
          </a>
        </div>
        <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
          <a href="#" class="btn btn-lg btn-block">
            <h2><span class="glyphicon glyphicon-user " aria-hidden="true"></span></h2>
            <h4>User</h4>
          </a>
        </div>
        <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
          <a href="#" class="btn btn-lg btn-block">
            <h2><span class="glyphicon glyphicon-bell" aria-hidden="true"></span></h2>
            <h4>Notification</h4>
          </a>
        </div>

      </div>
    </div>

    <div class="recommendation-table">
      <div class="panel panel-default">
        <div class="panel-heading">Recommendations</span>
        </div>

        <table class="table table-hover ">
          <!-- <legend>Lent Books <b>3/7</b> -->
          </legend>
          <thead>
            <tr>
              <th>Id</th>
              <th>Book</th>
              <th>Author</th>
              <th>Edition</th>
              <th>Date Issued</th>
              <th>Expiry Date</th>
              <th>Fine</th>
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
              <td>NRs. 0</td>
            </tr>
            <tr>
              <td>1038</td>
              <td>Back to the jungle</td>
              <td>She</td>
              <td>2010</td>
              <td>2014-12-25</td>
              <td>2015-02-25</td>
              <td>NRs. 0</td>
            </tr>
            <tr>
              <td>1038</td>
              <td>Into the city</td>
              <td>He</td>
              <td>2010</td>
              <td>2014-11-15</td>
              <td>2015-01-15</td>
              <td>NRs. 4</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

  </div>
</div>

@stop
