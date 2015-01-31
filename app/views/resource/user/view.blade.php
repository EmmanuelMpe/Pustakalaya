@extends('layout.basic')
@section('content')

<div class="row">
  <div class="col-lg-4 col-md-4 col-sm-4">

    <h2>069.BCT.532</h2>

    <ul class="list-group">
      <li class="list-group-item lead">
        Puspe
        <span class="badge"><b> रु 123 </b></span>
      </li>
      <li class="list-group-item">
        overall@gmail.com
      </li>
      <li class="list-group-item">
        Somewhere near Bhaktapur
      </li>
    </ul>

  </div>
</div>


<hr>

<div class="row">

  <!--
  <div class="col-md-2">
    <ul class="nav nav-pills nav-stacked">
    <li class="active"><a href="/student">Home</a></li>
    <li><a href="/history">History</a></li>
    </ul>
  </div>
  -->

  <div class="lend-table">
    <div class="col-lg-12">
      <table class="table table-striped table-hover ">
        <legend>Lent Books <b>3/7</b>
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

  <!--
  <div class="recomendation-table">
    <div class="col-lg-10">
      <table class="table table-striped table-hover ">
        <legend>Recomended Books</legend>
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
            <td>123-45-6-7890</td>
            <td>Into the wild</td>
            <td>Me</td>
            <td>2010</td>
            <td>Lending</td>
            <td>17/25</td>
            <td>523/207 - 523/231</td>
          </tr>
          <tr>
            <td>123-4-65-8790</td>
            <td>Kingdom of Fire</td>
            <td>Me</td>
            <td>2012</td>
            <td>Not to Issue</td>
            <td>11/15</td>
            <td>523/256 - 523/270</td>
          </tr>
          <tr>
            <td>9-843-15-5917</td>
            <td>Back to the Jungle</td>
            <td>Me</td>
            <td>2008</td>
            <td>Reference</td>
            <td>11/19</td>
            <td>524/143 - 524/162</td>
          </tr>
          <tr class="danger">
            <td>2-1-18-2015</td>
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
  -->

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
</div>

@stop
