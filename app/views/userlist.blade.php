@extends('layout.basic')

@section('content')

<div class="row">
  <div class="col-lg-8 col-md-7 col-sm-6">
    <h2>Admin<span class="lead">/Puspe</span></h2>
  </div>
</div>

<div class="row">
  <div class="col-md-2">
    <ul class="nav nav-pills nav-stacked">
    <li><a href="{{{ URL::to('/admin') }}}">Home</a></li>
    <li><a href="{{{ URL::to('/recommended') }}}">Recommended Books</a></li>
    <li><a href="{{{ URL::to('/trending') }}}">Trending</a></li>
    <li><a href="{{{ URL::to('/add') }}}"> Add</a></li>
    <li><a href="{{{ URL::to('/remove') }}}"> Remove</a></li>
    <li class="active"><a href="{{{ URL::to('/userlist') }}}">User List</a></li>
    </ul>
  </div>

  <div class="col-lg-10">
    <div class="row">
      <div class="col-lg-8 col-md-7 col-sm-6">
        <h2>069/BCT</h2>
      </div>
    </div>
    <div class="recommendation-table ">
      <div class="col-lg-6">
        <table class="table table-striped table-hover">
          <thead>
            <tr>
              <th>CRN</th>
              <th>Name</th>
              <th>Issued</th>
              <th>Fine</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>501</td>
              <td>Abinash Manandher</td>
              <td>6/7</td>
              <td>NRs. 45</td>
            </tr>
            <tr>
              <td>501</td>
              <td>Abinash Manandher</td>
              <td>6/7</td>
              <td>NRs. 45</td>
            </tr>
            <tr>
              <td>501</td>
              <td>Abinash Manandher</td>
              <td>6/7</td>
              <td>NRs. 45</td>
            </tr>
            <tr>
              <td>501</td>
              <td>Abinash Manandher</td>
              <td>6/7</td>
              <td>NRs. 45</td>
            </tr>
            <tr>
              <td>501</td>
              <td>Abinash Manandher</td>
              <td>6/7</td>
              <td>NRs. 45</td>
            </tr>
            <tr>
              <td>501</td>
              <td>Abinash Manandher</td>
              <td>6/7</td>
              <td>NRs. 45</td>
            </tr>
            <tr>
              <td>501</td>
              <td>Abinash Manandher</td>
              <td>6/7</td>
              <td>NRs. 45</td>
            </tr>
            <tr>
              <td>501</td>
              <td>Abinash Manandher</td>
              <td>6/7</td>
              <td>NRs. 45</td>
            </tr>
            <tr>
              <td>501</td>
              <td>Abinash Manandher</td>
              <td>6/7</td>
              <td>NRs. 45</td>
            </tr>
            <tr>
              <td>501</td>
              <td>Abinash Manandher</td>
              <td>6/7</td>
              <td>NRs. 45</td>
            </tr>
            <tr>
              <td>501</td>
              <td>Abinash Manandher</td>
              <td>6/7</td>
              <td>NRs. 45</td>
            </tr>
            <tr>
              <td>501</td>
              <td>Abinash Manandher</td>
              <td>6/7</td>
              <td>NRs. 45</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="col-lg-6">
        <table class="table table-striped table-hover">
          <thead>
            <tr>
              <th>CRN</th>
              <th>Name</th>
              <th>Issued</th>
              <th>Fine</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>502</td>
              <td>Anish Shrestha</td>
              <td>4/7</td>
              <td>NRs. 18</td>
            </tr>
            <tr>
              <td>502</td>
              <td>Anish Shrestha</td>
              <td>4/7</td>
              <td>NRs. 18</td>
            </tr>
            <tr>
              <td>502</td>
              <td>Anish Shrestha</td>
              <td>4/7</td>
              <td>NRs. 18</td>
            </tr>
            <tr>
              <td>502</td>
              <td>Anish Shrestha</td>
              <td>4/7</td>
              <td>NRs. 18</td>
            </tr>
            <tr>
              <td>502</td>
              <td>Anish Shrestha</td>
              <td>4/7</td>
              <td>NRs. 18</td>
            </tr>
            <tr>
              <td>502</td>
              <td>Anish Shrestha</td>
              <td>4/7</td>
              <td>NRs. 18</td>
            </tr>
            <tr>
              <td>502</td>
              <td>Anish Shrestha</td>
              <td>4/7</td>
              <td>NRs. 18</td>
            </tr>
            <tr>
              <td>502</td>
              <td>Anish Shrestha</td>
              <td>4/7</td>
              <td>NRs. 18</td>
            </tr>
            <tr>
              <td>502</td>
              <td>Anish Shrestha</td>
              <td>4/7</td>
              <td>NRs. 18</td>
            </tr>
            <tr>
              <td>502</td>
              <td>Anish Shrestha</td>
              <td>4/7</td>
              <td>NRs. 18</td>
            </tr>
            <tr>
              <td>502</td>
              <td>Anish Shrestha</td>
              <td>4/7</td>
              <td>NRs. 18</td>
            </tr>
            <tr>
              <td>502</td>
              <td>Anish Shrestha</td>
              <td>4/7</td>
              <td>NRs. 18</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div id="pagination-block">
      <div class="row pull-right col-lg-2">
        <div class="col-lg-10 pull-right">
          <ul class="pagination">
            <li class="active"><a href="#A">A</a>
            </li>
            <li><a href="#B">B</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

@stop
