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
            @foreach ($books as $books)
            <tr>
              <td>123-45-6-7890</td>
              <td>Into the wild</td>
              <td>Me</td>
              <td>2010</td>
              <td>Lending</td>
              <td>17/25</td>
              <td>523/207 - 523/231</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <div id="pagination-block">
    <div class="row">
      <div class="col-lg-12">{{--$books->links()--}}</div>
    </div>
  </div>

</div>
@stop
