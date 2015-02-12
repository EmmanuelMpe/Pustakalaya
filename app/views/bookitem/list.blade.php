@extends('layout.basic') @section('content')


<?php $books=array( 'a', 'b', 'c', 'd'); ?>

<div class="row">
  <div class="col-lg-6 col-md-7 col-sm-6">
    <h2>List</h2>
  </div>
</div>

<div class="list-table ">
  <div class="row">
    <div class="col-lg-12">

      <div class="panel panel-default">
        <div class="panel-heading"><span class="glyphicon glyphicon-book"></span> Book</div>

        <table class="table table-striped table-hover ">
          <thead>
            <tr>
              <th>ISBN</th>
              <th>Title</th>
              <th>Author</th>
              <th>Edition</th>
              <th>Type</th>
              <th>Available</th>
              <th>Range</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($bookitems as $bookitem)
            <tr>
              <td>{{{$bookitem->book->isbn}}}</td>
              <td>{{{$bookitem->book->name}}}</td>
              <td>{{{$bookitem->book->author}}}</td>
              <td>{{{$bookitem->edition}}}</td>
              <td>{{{$bookitem->book->type_name}}}</td>
           </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <div id="pagination-block">
    <div class="row">
      <div class="col-lg-12">{{--$bookitems->links()--}}</div>
    </div>
  </div>

</div>
@stop
