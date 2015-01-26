@extends('layout.basic')

@section('content')

<div class="row">
  <div class="col-lg-8 col-md-7 col-sm-6">
    <h2>Search<span class="lead">/Book Log</span></h2>
  </div>
</div>

<div class="row">
  <div class="col-md-2">
    <ul class="nav nav-pills nav-stacked">
    <li><a href="{{{ URL::to('/search') }}}">Home</a></li>
    <li><a href="{{{ URL::to('/booklist') }}}">Book List</a></li>
    <li class="active"><a href="{{{ URL::to('/booklog') }}}">Book Log</a></li>
    </ul>
  </div>

  <div class="bookaddition-form">
    <div class="col-lg-10 pull-right">
      <table class="table table-striped table-hover ">
        <thead>
          <tr>
            <th>DateTime</th>
            <th>Remarks</th>
          </tr>
        </thead>
        <tbody>
          <tr class="success">
            <td>2015-01-13 14:23:45</td>
            <td><span class="badge"><b>7</b></span> <strong>Back to the Jungle</strong> were added.</td>
          </tr>
          <tr class="success">
            <td>2014-11-07 15:57:31</td>
            <td><span class="badge"><b>7</b></span> <strong>Into the Wild</strong> were added.</td>
          </tr>
          <tr class="danger">
            <td>2014-08-17 11:43:09</td>
            <td><span class="badge"><b>2</b></span> <strong>Kingdom of Fire</strong> were removed.</td>
          </tr>
          <tr class="success">
            <td>2014-07-19 12:53:40</td>
            <td><span class="badge"><b>12</b></span> <strong>Back to the Jungle</strong> were added.</td>
          </tr>
          <tr class="success">
            <td>2014-06-27 10:53:01</td>
            <td><span class="badge"><b>17</b></span> <strong>Kingdom of Fire</strong> were added.</td>
          </tr>
          <tr class="success">
            <td>2015-01-13 14:23:45</td>
            <td><span class="badge"><b>7</b></span> <strong>Back to the Jungle</strong> were added.</td>
          </tr>
          <tr class="success">
            <td>2014-11-07 15:57:31</td>
            <td><span class="badge"><b>7</b></span> <strong>Into the Wild</strong> were added.</td>
          </tr>
          <tr class="danger">
            <td>2014-08-17 11:43:09</td>
            <td><span class="badge"><b>2</b></span> <strong>Kingdom of Fire</strong> were removed.</td>
          </tr>
          <tr class="success">
            <td>2014-07-19 12:53:40</td>
            <td><span class="badge"><b>12</b></span> <strong>Back to the Jungle</strong> were added.</td>
          </tr>
          <tr class="success">
            <td>2014-06-27 10:53:01</td>
            <td><span class="badge"><b>17</b></span> <strong>Kingdom of Fire</strong> were added.</td>
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