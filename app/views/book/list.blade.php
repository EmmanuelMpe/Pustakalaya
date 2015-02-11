@extends('layout.basic') @section('content')

<div class="row">
  <div class="col-lg-6 col-md-7 col-sm-6">
    <h2>List</h2>
  </div>
</div>

<div class="list-table ">
  <div class="row">
    <div class="col-lg-12">

      <div class="panel panel-default">
        <div class="panel-heading"><span class="glyphicon glyphicon-book"></span> Book Info</div>

        @if (count($books)==0) No Books to show @else
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
              <td>
                <a href="{{URL::to('book').'/'.$book->isbn}}">
                {{{$book->name}}}
                </a>
              </td>
              <td>{{{$book->author}}}</td>
              <td>{{{$book->publisher}}}</td>
              <td>{{{$book->type_name}}}</td>
              <td>{{$book->bookitems->count()}}</td>
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
