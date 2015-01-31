@extends('layout.basic') @section('content')

<div class="row">
  <div class="col-lg-8 col-md-7 col-sm-6">
    <h2>Admin<span class="lead">/Puspe (This page needs major designing changes and improvements.)</span></h2>
  </div>
</div>

<div class="row">
  <div class="col-md-2">
    <ul class="nav nav-pills nav-stacked">
      <li>
        <a href="{{{ URL::to('/admin') }}}"> Home </a>
      </li>
      <li>
        <a href="{{{ URL::to('/recommended') }}}"> Recommended Books </a>
      </li>
      <li>
        <a href="{{{ URL::to('/trending') }}}"> Trending </a>
      </li>
      <li>
        <a href="{{{ URL::to('/add') }}}"> Add </a>
      </li>
      <li>
        <a href="{{{ URL::to('/remove') }}}"> Remove </a>
      </li>
      <li class="active">
        <a href="{{{ URL::to('/userlist') }}}"> User List </a>
      </li>
    </ul>
  </div>

  <div class="col-lg-10">
    <div class="row">
      <div class="col-lg-2 col-md-4 col-sm-3">
        <h2>069/BCT</h2>
      </div>
      <div class="col-lg-8 pull-right">
        <form class="form">
          <fieldset>
            <div class="form-group">
              <label for="inputType" class="col-lg-1 control-label">Type:</label>
              <div class="col-lg-2">
                <select id="inputType">
                  <option>Staff</option>
                  <option>Student</option>
                </select>
              </div>
            </div>
            <!-- Authority will be visible and batch and programs will be hidden when staff is selected.
            The view will be reversed for the selection of student. -->
            <div class="form-group">
              <label for="inputAuthority" class="col-lg-2 control-label">Authority:</label>
              <div class="col-lg-3">
                <select id="inputAuthority">
                  <option>Administrator</option>
                  <option>Librarian</option>
                  <option>Verifier</option>
                </select>
              </div>
            </div>
            <div class="form-group hidden">
              <label for="inputBatch" class="col-lg-1 control-label">Batch:</label>
              <div class="col-lg-2">
                <select id="inputBatch">
                  <option>2068</option>
                  <option>2069</option>
                  <option>2070</option>
                  <option>2071</option>
                </select>
              </div>
            </div>
            <div class="form-group hidden">
              <label for="inputProgram" class="col-lg-1 control-label">Program:</label>
              <div class="col-lg-2">
                <select id="inputProgram">
                  <option>BAE</option>
                  <option>BCE</option>
                  <option>BCT</option>
                  <option>BEL</option>
                  <option>BEX</option>
                  <option>BME</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <div class="col-lg-2">
                <button type="submit" class="btn btn-primary">Filter</button>
              </div>
            </div>

          </fieldset>
        </form>
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
