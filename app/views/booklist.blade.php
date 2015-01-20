@extends('layout.basic')

@section('content')

<div class="row">
  <div class="col-lg-8 col-md-7 col-sm-6">
    <h2>Search<span class="lead">/Book List</span></h2>
  </div>
</div>

<div class="row">
  <div class="col-md-2">
    <ul class="nav nav-pills nav-stacked">
    <li><a href="{{{ URL::to('/search') }}}">Home</a></li>
    <li class="active"><a href="{{{ URL::to('/booklist') }}}">Book List</a></li>
    <li><a href="{{{ URL::to('/booklog') }}}">Book Log</a></li>
    </ul>
  </div>

  <div class="lend-table">
    <div class="col-lg-10">
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
            <th></th>
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
            <td><a href="#edit" role="button" data-toggle="modal"> Edit</a></td>
          </tr>
          <tr>
            <td>123-4-65-8790</td>
            <td>Kingdom of Fire</td>
            <td>Me</td>
            <td>2012</td>
            <td>Not to Issue</td>
            <td>11/15</td>
            <td>523/256 - 523/270</td>
            <td><a href="#edit" role="button" data-toggle="modal"> Edit</a></td>
          </tr>
          <tr>
            <td>9-843-15-5917</td>
            <td>Back to the Jungle</td>
            <td>Me</td>
            <td>2008</td>
            <td>Reference</td>
            <td>11/19</td>
            <td>524/143 - 524/162</td>
            <td><a href="#edit" role="button" data-toggle="modal"> Edit</a></td>
          </tr>
          <tr class="danger">
            <td>2-1-18-2015</td>
            <td>Set The History</td>
            <td>ABdV</td>
            <td>2015</td>
            <td>Reference</td>
            <td>2/31</td>
            <td>523/308 - 523/339</td>
            <td><a href="#edit" role="button" data-toggle="modal"> Edit</a></td>
          </tr>
          <tr>
            <td>123-45-6-7890</td>
            <td>Into the wild</td>
            <td>Me</td>
            <td>2010</td>
            <td>Lending</td>
            <td>17/25</td>
            <td>523/207 - 523/231</td>
            <td><a href="#edit" role="button" data-toggle="modal"> Edit</a></td>
          </tr>
          <tr>
            <td>123-4-65-8790</td>
            <td>Kingdom of Fire</td>
            <td>Me</td>
            <td>2012</td>
            <td>Not to Issue</td>
            <td>11/15</td>
            <td>523/256 - 523/270</td>
            <td><a href="#edit" role="button" data-toggle="modal"> Edit</a></td>
          </tr>
          <tr>
            <td>9-843-15-5917</td>
            <td>Back to the Jungle</td>
            <td>Me</td>
            <td>2008</td>
            <td>Reference</td>
            <td>11/19</td>
            <td>524/143 - 524/162</td>
            <td><a href="#edit" role="button" data-toggle="modal"> Edit</a></td>
          </tr>
          <tr class="danger">
            <td>2-1-18-2015</td>
            <td>Set The History</td>
            <td>ABdV</td>
            <td>2015</td>
            <td>Reference</td>
            <td>2/31</td>
            <td>523/308 - 523/339</td>
            <td><a href="#edit" role="button" data-toggle="modal"> Edit</a></td>
          </tr>
          <tr>
            <td>9-843-15-5917</td>
            <td>Back to the Jungle</td>
            <td>Me</td>
            <td>2008</td>
            <td>Reference</td>
            <td>11/19</td>
            <td>524/143 - 524/162</td>
            <td><a href="#edit" role="button" data-toggle="modal"> Edit</a></td>
          </tr>
          <tr class="danger">
            <td>2-1-18-2015</td>
            <td>Set The History</td>
            <td>ABdV</td>
            <td>2015</td>
            <td>Reference</td>
            <td>2/31</td>
            <td>523/308 - 523/339</td>
            <td><a href="#edit" role="button" data-toggle="modal"> Edit</a></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  <div class="modal" id="edit">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h4 class="modal-title">Edit Book Information</h4>
        </div>
        <div class="modal-body">
        <form class="form-horizontal">
        <fieldset>
          <div class="form-group">
            <label for="inputISBN" class="col-lg-2 control-label">ISBN</label>
            <div class="col-lg-10">
              <input class="form-control" id="inputISBN" value="ISBN" type="text">
            </div>
          </div>
          <div class="form-group">
            <label for="inputTitle" class="col-lg-2 control-label">Title</label>
            <div class="col-lg-10">
              <input class="form-control" id="inputTitle" value="Book Title" type="text">
            </div>
          </div>
          <div class="form-group">
            <label for="inputAuthor" class="col-lg-2 control-label">Author</label>
            <div class="col-lg-10">
              <input class="form-control" id="inputAuthor" value="Author" type="text">
            </div>
          </div>
          <div class="form-group">
            <label for="inputEdition" class="col-lg-2 control-label">Edition</label>
            <div class="col-lg-10">
              <input class="form-control" id="inputEdition" value="Edition" type="text">
            </div>
          </div>
          <div class="form-group">
            <label for="inputType" class="col-lg-2 control-label">Type</label>
            <div class="col-lg-10">
              <input class="form-control" id="inputType" value="Type" type="text">
            </div>
          </div>

          <div class="form-group">
            <div class="col-lg-10 col-lg-offset-2">
              <button type="submit" class="btn btn-primary">Save</button>
              <button class="btn btn-default pull-right">Cancel</button>
            </div>
          </div>

        </fieldset>
        </form>
        </div>
      </div>
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