@extends('layout.basic') @section('content')

<div class="row">
  <div class="col-lg-6 col-md-7 col-sm-6">
    <h2>Book Items List</h2>
  </div>
</div>

<div class="select-form">
  <div class="row">
    <div class="col-lg- col-md-7 col-sm-6">
      <form class="form">
        <fieldset>
          <div class="form-group">
            <select class="selectpicker" data-width="auto"
              id="inputAccess">
              <option>NonLendable</option>
              <option>Course</option>
              <option>Reference</option>
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
    <div class="col-lg-12">

      <div class="panel panel-default">
        <div class="panel-heading">Books Info</div>

        <table class="table table-striped table-hover ">
          <thead>
            <tr>
              <th>ISBN</th>
              <th>Title</th>
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
            <tr>
              <td>2-1-18-2015</td>
              <td>Set The History</td>
              <td>ABdV</td>
              <td>2015</td>
              <td>Reference</td>
              <td>2/31</td>
              <td>523/308 - 523/339</td>
            </tr>
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
            <tr>
              <td>2-1-18-2015</td>
              <td>Set The History</td>
              <td>ABdV</td>
              <td>2015</td>
              <td>Reference</td>
              <td>2/31</td>
              <td>523/308 - 523/339</td>
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
            <tr>
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
