@extends('layout.basic')

@section('content')

<div class="row">
  <div class="col-lg-8 col-md-7 col-sm-6">
    <h2>Admin</h2>
    <p class="lead">Puspe</p>
  </div>
</div>

<div class="row">
  <div class="col-md-2">
    <ul class="nav nav-pills nav-stacked">
    <li><a href="/admin">Home</a></li>
    <li><a href="/addbooks">Add Books</a></li>
    <li><a href="/booklist">Book List</a></li>
    <li class="active"><a href="/bookinfo">Book Info</a></li>
    </ul>
  </div>

  <div class="bookaddition-form">
    <div class="col-lg-10 pull-right">
      <table class="table table-striped table-hover ">
        <legend>Books Log</legend>
          <tr>
            <td>2015-01-13 14:23:45</td>
            <td><span class="badge"><b>12</b></span> <strong>Back to the Jungle</strong> were added.</td>
          </tr>
          <tr>
            <td>2014-11-07 15:57:31</td>
            <td><span class="badge"><b>7</b></span> <strong>Into the Wild</strong> were added.</td>
          </tr>
          <tr>
            <td>2014-08-17 11:43:09</td>
            <td><span class="badge"><b>2</b></span> <strong>Kingdom of Fire</strong> were removed.</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>

@stop