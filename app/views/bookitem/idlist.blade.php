@extends('layout.basic') @section('content')

<div class="row">
  <div class="col-lg-6">
    <h2>Newly Created Book Items</h2>
  </div>
</div>

<hr>

<div class="list-table ">
<div class="row">
  <div class="col-lg-12">
      <div class="panel panel-default">
        <div class="panel-heading"><span class="glyphicon glyphicon-book"></span> Book Info</div>

        <table class="table table-striped table-hover ">
          <thead>
            <tr>
              <th>ID</th>
              <th>ISBN</th>
              <th>Name</th>
              <th>Edition</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($bookitems as $bookitem)
            <tr>
              <td>{{$bookitem->id}}</td>
              <td>{{{$bookitem->book_isbn}}}</td>
              <td>{{{$bookitem->book->name}}}</td>
              <td>{{{$bookitem->edition}}}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>


  @include('layout.alertbox')
</div>
</div>

@stop
