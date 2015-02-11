@extends('layout.basic') @section('content')


<div class="row">
  <div class="col-lg-6 col-md-7 col-sm-6">
    <h2>{{ $book->type_name }}</h2>
  </div>
</div>

<div class="row">
  <div class="col-lg-4">
    <div class="panel panel-default">
      <div class="panel-heading">Basic information</div>
      <ul class="list-group">
        <li class="list-group-item lead">
        {{{ $book->name }}}

        </li>
        <li class="list-group-item">
        {{{ $book->author }}}
        </li>
        <li class="list-group-item">
        {{{ $book->publisher }}}
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
        <div class="panel-heading">Book Items</span>
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
          @foreach ($book->bookitems as $bookitem)
          <tr>
            <td>{{$bookitem->id}}</td>
            <td>{{{$bookitem->edition}}}</td>
            <td>Whenever</td>
            <td>Never</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
  </div>
</div>

</div>
</div>
@stop
