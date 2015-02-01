@extends('layout.basic') @section('content')

<div class="row">
  <div class="col-lg-6 col-md-7 col-sm-6">
    <h2>Book list</h2>
  </div>
</div>

<div class="select-form">
  <div class="row">
    <div class="col-lg- col-md-7 col-sm-6">
      <form class="form" method="GET" action="{{URL::to('/books')}}">
        <fieldset>
          <div class="form-group">
            <select class="selectpicker" data-width="auto"
              id="inputAccess" name="type">
              <option>All</option>
              <option>Lendable</option>
              <option>Reference</option>
              <option>NonLendable</option>
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

        @if (count($books)==0)
          No Books to show
        @else
        <table class="table table-striped table-hover ">
          <thead>
            <tr>
              <th>ISBN</th>
              <th>Title</th>
              <th>Author</th>
              <th>Publisher</th>
              <th>Type</th>
              <th>Available</th>
            </tr>
          </thead>
          <tbody>
          @foreach ($books as $book)
            <tr>
              <td>{{{$book->isbn}}}</td>
              <td>{{{$book->name}}}</td>
              <td>{{{$book->author}}}</td>
              <td>{{{$book->publisher}}}</td>
              <td>{{{$book->type_name}}}</td>
              <td>0</td>
            </tr>
          @endforeach
         </tbody>
        </table>
      @endif
      </div>
    </div>
  </div>


<div id="pagination-block">
  <div class="row">
    <div class="col-lg-12">{{$books->links()}}</div>
  </div>
</div>

</div>

@stop
