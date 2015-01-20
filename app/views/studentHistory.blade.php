@extends('layout.basic')

@section('content')

<div class="row">
  <div class="col-lg-8 col-md-7 col-sm-6">
    <h2>Student<span class="lead">/Puspe</span></h2>
  </div>
</div>

<div class="row">
  <div class="col-md-2">
    <ul class="nav nav-pills nav-stacked">
    <li><a href="/student">Home</a></li>
    <li class="active"><a href="/history">History</a></li>
    </ul>
  </div>

  <div class="history-table">
    <div class="col-lg-10">
      <table class="table table-striped table-hover ">
        <legend>Books Log</legend>
          <tr>
            <td>2015-01-19 10:45:09</td>
            <td><strong>Set The History</strong> was issued.</td>
          </tr>
          <tr>
            <td>2015-01-13 14:23:45</td>
            <td><strong>Back to the Jungle</strong> was returned.</td>
          </tr>
          <tr>
            <td>2014-11-07 15:57:31</td>
            <td><strong>Back to the Jungle</strong> was renewed.</td>
          </tr>
          <tr>
            <td>2014-08-17 11:43:37</td>
            <td><strong>Kingdom of Fire</strong> was issued.</td>
          </tr>
          <tr>
            <td>2014-08-17 11:43:09</td>
            <td><strong>Back to the Jungle</strong> was issued.</td>
          </tr>
          <tr>
            <td>2015-01-19 10:45:09</td>
            <td><strong>Set The History</strong> was issued.</td>
          </tr>
          <tr>
            <td>2015-01-13 14:23:45</td>
            <td><strong>Back to the Jungle</strong> was returned.</td>
          </tr>
          <tr>
            <td>2014-11-07 15:57:31</td>
            <td><strong>Back to the Jungle</strong> was renewed.</td>
          </tr>
          <tr>
            <td>2014-08-17 11:43:37</td>
            <td><strong>Kingdom of Fire</strong> was issued.</td>
          </tr>
          <tr>
            <td>2014-08-17 11:43:09</td>
            <td><strong>Back to the Jungle</strong> was issued.</td>
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