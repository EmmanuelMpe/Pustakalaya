@extends('layout.basic') @section('content')

<div class="row">
  <div class="col-lg-6 col-md-7 col-sm-6">
    <h2>{{ $bookinfo->type_name }}</h2>
  </div>
</div>

<div class="row">
  <div class="col-lg-4">
    <div class="panel panel-default">
      <div class="panel-heading">Basic information</div>
      <ul class="list-group">
        <li class="list-group-item lead">
        {{{ $bookinfo->name }}}

        </li>
        <li class="list-group-item">
        {{{ $bookinfo->author }}}
        </li>
        <li class="list-group-item">
        {{{ $bookinfo->publisher }}}
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

    <div class="recommendation-table">
      <div class="panel panel-default">
        <div class="panel-heading">Books</span>
      </div>

      <table class="table table-hover ">
        <!-- <legend>Lent Books <b>3/7</b> -->
        </legend>
        <thead>
          <tr>
            <th>Id</th>
            <th>Edition</th>
            <th>Date Issued</th>
            <th>Expiry Date</th>
          </tr>
        </thead>
        <tbody>
          <!-- tr class="info | success | danger | warning | active" -->
          <tr>
            <td>1038</td>
            <td>2010</td>
            <td>2014-12-25</td>
            <td>2015-02-25</td>
          </tr>
          <tr>
            <td>1038</td>
            <td>2010</td>
            <td>2014-12-25</td>
            <td>2015-02-25</td>
          </tr>
          <tr>
            <td>1038</td>
            <td>2010</td>
            <td>2014-11-15</td>
            <td>2015-01-15</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>


  <div class="similar-table">
    <div class="panel panel-default">
      <div class="panel-heading">Similar Books</span>
    </div>

    <table class="table table-hover ">
      <!-- <legend>Lent Books <b>3/7</b> -->
      </legend>
      <thead>
        <tr>
          <th>Book</th>
          <th>Author</th>
        </tr>
      </thead>
      <tbody>
        <!-- tr class="info | success | danger | warning | active" -->
        <tr>
          <td>Into the wild</td>
          <td>Me</td>
        </tr>
        <tr>
          <td>Back to the jungle</td>
          <td>She</td>
        </tr>
        <tr>
          <td>Into the city</td>
          <td>He</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

</div>
</div>
@stop
