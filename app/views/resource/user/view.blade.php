@extends('layout.basic') @section('content')

<div class="row">
  <div class="col-lg-6 col-md-7 col-sm-6">
    @if ($user->role->name=="Student")
    <h2>{{$stdinfo->rollnumber}}</h2>
    @endif
  </div>
</div>

<div class="row">
  <div class="col-lg-4">
    <div class="panel panel-default">
      <div class="panel-heading">Basic information</div>
      <ul class="list-group">
        <li class="list-group-item lead">
          {{{$user->name}}}
          <span class="badge"><b> रु 123 </b></span>
        </li>
        <li class="list-group-item">
          {{{$user->email}}}
        </li>
        <li class="list-group-item">
          {{{$user->address}}}
        </li>
      </ul>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading">Notifications</div>
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
    <div class="lend-table">
      <div class="panel panel-default">
        <div class="panel-heading">Books lent <span class="badge">
            <b>{{count($books)}}/7</b></span>
        </div>

        @if (count($books)==0)
        <div class="panel-body text-center">
        None
        </div>
        @else
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
            @foreach ($books as $book)
            <tr>
              <td>$book->id</td>
              <td>$book->bookInfo->name</td>
              <td>$book->bookInfo->author</td>
              <td>$book->edition</td>
              <td>$book->assigned_date</td>
              <td>Calculate the shit.</td>
              <td>Calculate this shit too.</td>
            </tr>
            @endforeach
          </tbody>
        </table>
        @endif
      </div>
    </div>

    <div class="lend-table">
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
