@extends('layout.basic') @section('content')

<div class="row">
  <div class="col-lg-6 col-md-7 col-sm-6">
    <h2>User list</h2>
  </div>
</div>

<div class="select-form">
<div class="row">
  <div class="col-lg-6 col-md-7 col-sm-6">
    <form class="form">
      <fieldset>
        <div class="form-group">
          <select class="selectpicker" data-width="auto" id="inputAccess">
            <option>Student</option>
            <option>Employee</option>
            <option>Verifier</option>
            <option>Admin</option>
          </select>

          <select class="selectpicker" data-width="auto" id="inputBatch">
            <option>2067</option>
            <option>2068</option>
            <option>2069</option>
          </select>

          <select class="selectpicker" data-width="auto" id="inputProgram">
            <option>BAE</option>
            <option>BCE</option>
            <option>BCT</option>
            <option>BEL</option>
            <option>BEX</option>
            <option>BME</option>
          </select>

          <button type="submit" class="btn btn-primary">List</button>
        </div>
      </fieldset>
    </form>

  </div>
</div>
</div>

<div class="list-table ">
  <div class="row">
    <div class="col-lg-6">

      <div class="panel panel-default">
        <div class="panel-heading">Users</div>
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
    </div>

    <div class="col-lg-6">
      <div class="panel panel-default">
        <div class="panel-heading">Users</div>
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




</div>

@stop
