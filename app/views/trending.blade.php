@extends('layout.basic')

@section('content')

<div class="row">
  <div class="col-lg-8 col-md-7 col-sm-6">
    <h2>Admin/<span class="lead">Puspe</span></h2>
  </div>
</div>

<div class="row">
  <div class="col-md-2">
    <ul class="nav nav-pills nav-stacked">
    <li><a href="{{{ URL::to('/admin') }}}">Home</a></li>
    <li><a href="{{{ URL::to('/recommended') }}}">Recommended Books</a></li>
    <li class="active"><a href="{{{ URL::to('/trending') }}}">Trending</a></li>
    <li><a href="{{{ URL::to('/addnewbook') }}}">Add New Book</a></li>
    <li><a href="{{{ URL::to('/addbooks') }}}">Add Books</a></li>
    </ul>
  </div>

  <div class="recommendation-table ">
    <div class="col-lg-10 pull-right">
      <table class="table table-striped table-hover pull-right">
        <legend>Trending Books</legend>
        <thead>
          <tr>
            <th>ISBN</th>
            <th>Book</th>
            <th>Author</th>
            <th>Edition</th>
            <th>Type</th>
            <th>Available</th>
            <th>Range</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>100/31</td>
            <td>Set The History</td>
            <td>ABdV</td>
            <td>2015</td>
            <td>Reference</td>
            <td>2/31</td>
            <td>523/308 - 523/339</td>
          </tr>
          <tr>
            <td>100/31</td>
            <td>Set The History</td>
            <td>ABdV</td>
            <td>2015</td>
            <td>Reference</td>
            <td>2/31</td>
            <td>523/308 - 523/339</td>
          </tr>
          <tr>
            <td>100/31</td>
            <td>Set The History</td>
            <td>ABdV</td>
            <td>2015</td>
            <td>Reference</td>
            <td>2/31</td>
            <td>523/308 - 523/339</td>
          </tr>
          <tr>
            <td>100/31</td>
            <td>Set The History</td>
            <td>ABdV</td>
            <td>2015</td>
            <td>Reference</td>
            <td>2/31</td>
            <td>523/308 - 523/339</td>
          </tr>
          <tr>
            <td>100/31</td>
            <td>Set The History</td>
            <td>ABdV</td>
            <td>2015</td>
            <td>Reference</td>
            <td>2/31</td>
            <td>523/308 - 523/339</td>
          </tr>
          <tr>
            <td>100/31</td>
            <td>Set The History</td>
            <td>ABdV</td>
            <td>2015</td>
            <td>Reference</td>
            <td>2/31</td>
            <td>523/308 - 523/339</td>
          </tr>
          <tr>
            <td>100/31</td>
            <td>Set The History</td>
            <td>ABdV</td>
            <td>2015</td>
            <td>Reference</td>
            <td>2/31</td>
            <td>523/308 - 523/339</td>
          </tr>
          <tr>
            <td>100/31</td>
            <td>Set The History</td>
            <td>ABdV</td>
            <td>2015</td>
            <td>Reference</td>
            <td>2/31</td>
            <td>523/308 - 523/339</td>
          </tr>
          <tr>
            <td>100/31</td>
            <td>Set The History</td>
            <td>ABdV</td>
            <td>2015</td>
            <td>Reference</td>
            <td>2/31</td>
            <td>523/308 - 523/339</td>
          </tr>
          <tr>
            <td>100/31</td>
            <td>Set The History</td>
            <td>ABdV</td>
            <td>2015</td>
            <td>Reference</td>
            <td>2/31</td>
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
