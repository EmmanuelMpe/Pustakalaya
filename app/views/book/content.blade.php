<div class="books-table">
  <div class="panel panel-default">
    <div class="panel-heading"> Books </div>
    <table class="table table-hover ">
      <thead>
        <tr>
          <th>Id</th>
          <th>Edition</th>
          <th>Assigned To</th>
          <th>Issue Date</th>
          <th>Expiry Date</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        @foreach ($book->bookitems as $bookitem)
        <tr>
          <td>{{$bookitem->id}}</td>
          <td>{{$bookitem->edition}}</td>
          <td>
            @if (isset($bookitem->assigned_to))
            <a href="{{URL::to('user/'.$bookitem->user['id'])}}">
            {{$bookitem->user['name']}}
            </a>
            @else
            -
            @endif
          </td>
          <td>
          @if (isset($bookitem->assigned_date))
          {{$bookitem->assigned_date}}
          @else
           -
          @endif
          </td>
          <td>
            Calculate this shit
          </td>
          <td>
            <a href="#" >Delete</a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
