@extends('layout.basic')

@section('content')

<div class="row">
  <div class="col-lg-8 col-md-7 col-sm-6">
    <h2>Admin</h2>
    <p class="lead">Puspe</p>
  </div>
</div>

<div class="row">
  <div class="col-md-2">
    <ul class="nav nav-pills nav-stacked">
    <li><a href="/admin">Home</a></li>
    <li><a href="/addbooks">Add Books</a></li>
    <li class="active"><a href="/booklist">Book List</a></li>
    <li><a href="/bookinfo">Book Info</a></li>
    </ul>
  </div>

  <div class="lend-table">
    <div class="col-lg-10">
      <table class="table table-striped table-hover ">
        </tbody><legend>Book Lists</legend>
        <thead>
          <tr>
            <th>ISBN</th>
            <th>Title</th>
            <th>Author</th>
            <th>Edition</th>
            <th>Type</th>
            <th>Quantity</th>
            <th>Range</th>
          </tr>
        </thead>
        <tbody>
          <tr class="info">
            <td>123-45-6-7890</td>
            <td>Into the wild</td>
            <td>Me</td>
            <td>2010</td>
            <td>Lending</td>
            <td>25</td>
            <td>523/207 - 523/231</td>
          </tr>
          <tr>
            <td>123-4-65-8790</td>
            <td>Kingdom of Fire</td>
            <td>Me</td>
            <td>2012</td>
            <td>Not to Issue</td>
            <td>15</td>
            <td>523/256 - 523/270</td>
          </tr>
          <tr class="danger">
            <td>2-1-18-2015</td>
            <td>Set The History</td>
            <td>ABdV</td>
            <td>2015</td>
            <td>Reference</td>
            <td>31</td>
            <td>523/308 - 523/339</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

<div id="pagination-block">
    <div class="row pull-right">
      <div class="col-lg-12">
        <ul class="pagination">
          <li class="disabled"><a href="#">«</a>
          </li>
          <li class="active"><a href="#">1</a>
          </li>
          <li><a href="#">2</a>
          </li>
          <li><a href="#">3</a>
          </li>
          <li><a href="#">4</a>
          </li>
          <li><a href="#">5</a>
          </li>
          <li><a href="#">»</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>

@stop