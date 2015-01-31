@extends('layout.basic')

@section('content')

<div class="row">
  <div class="col-lg-8 col-md-7 col-sm-6">
    <h2>Admin Panel</h2>
  </div>
</div>


<hr>

<!--
<div class="row">
  <div class="col-md-2">
    <ul class="nav nav-pills nav-stacked">
    <li class="active"><a href="{{{ URL::to('/admin') }}}">Home</a></li>
    <li><a href="{{{ URL::to('/recommended') }}}">Recommended Books</a></li>
    <li><a href="{{{ URL::to('/trending') }}}">Trending</a></li>
    <li><a href="{{{ URL::to('/add') }}}"> Add</a></li>
    <li><a href="{{{ URL::to('/remove') }}}"> Remove</a></li>
    <li><a href="{{{ URL::to('/userlist') }}}"> User List</a></li>
    </ul>
  </div>
-->

  <div class="recommendation-table ">
    <div class="col-lg-12">
      <table class="table table-striped table-hover">
        <legend>Recommended Books</legend>
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
        </tbody>
      </table>
      <div class="col-lg-12">
        <div class="help-block pull-right">
          <a href="{{{ URL::to('/recommended') }}}">See More ...</a>
        </div>
      </div>
    </div>
  </div>

  <div class="trending-table">
    <div class="col-lg-12">
      <table class="table table-striped table-hover">
        <legend>Trending</legend>
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
        </tbody>
      </table>
      <div class="col-lg-12">
        <div class="help-block pull-right">
          <a href="{{{ URL::to('/trending') }}}">See More ...</a>
        </div>
      </div>
    </div>
  </div>

</div>

@stop
