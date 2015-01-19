@extends('layout.basic')

@section('content')

<div class="row">
  <div class="col-lg-8 col-md-7 col-sm-6">
    <h2>History</h2>
    <p class="lead">Puspe</p>
  </div>
</div>

<div class="lend-table">
  <div class="row">
    <div class="col-lg-12">
      <table class="table table-striped table-hover ">
        <legend>Books Log</legend>
          <tr>
            <td>2015-01-13 14:23:45</td>
            <td><strong>Back to the Jungle</strong> was returned.</td>
          </tr>
          <tr>
            <td>2014-11-07 15:57:31</td>
            <td><strong>Back to the Jungle</strong> was renewed.</td>
          </tr>
          <tr>
            <td>2014-08-17 11:43:09</td>
            <td><strong>Back to the Jungle</strong> was issued.</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>

<div class="recomendation-table">
  <div class="row">
    <div class="col-lg-12">
      <table class="table table-striped table-hover ">
        <legend>Recomended Books</legend>
        <thead>
          <tr>
            <th>Id</th>
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
            <td>3/3</td>
            <td>058-27*</td>
          </tr>
          <tr>
            <td>100/31</td>
            <td>Set The History</td>
            <td>ABdV</td>
            <td>2015</td>
            <td>Reference</td>
            <td>3/3</td>
            <td>058-27*</td>
          </tr>
          <tr>
            <td>100/31</td>
            <td>Set The History</td>
            <td>ABdV</td>
            <td>2015</td>
            <td>Reference</td>
            <td>3/3</td>
            <td>058-27*</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>

<div id="pagination-block">
  <div class="row">
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

@stop
