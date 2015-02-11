<div class="books-table">
  <div class="panel panel-default">
    <div class="panel-heading"> Books </div>


    <table class="table table-hover ">
      <thead>
        <tr>
          <th>Id</th>
          <th>Edition</th>
          <th>Assigned To</th>
          <th>Date Issued</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($books as $book)
        <tr>
          <td>{{$book->id}}</td>
          <td>{{$book->edition}}</td>
          <td>
            @if (isset($book->assigned_to))
            <a href="{{URL::to('user/'.$book->user['id'])}}">
            {{$book->user['name']}}
            </a>
            @else
              -
            @endif
          </td>
          <td>
             @if (isset($book->assigned_date))
                {{$book->assigned_date}}
            @else
              -
            @endif
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
