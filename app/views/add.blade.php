@extends('layout.basic')

@section('content')

<div class="row">
  <div class="col-lg-8 col-md-7 col-sm-6">
    <h2>Admin/<span class="lead">Puspe</span></h2>
  </div>
</div>

<div class="row">
  <div class="col-md-2">
    <ul class="nav nav-pills nav-stacked">
    <li><a href="{{{ URL::to('/admin') }}}">Home</a></li>
    <li><a href="{{{ URL::to('/recommended') }}}">Recommended Books</a></li>
    <li><a href="{{{ URL::to('/trending') }}}">Trending</a></li>
    <li class="active"><a href="{{{ URL::to('/add') }}}"> Add</a></li>
    <li><a href="{{{ URL::to('/remove') }}}"> Remove</a></li>
    </ul>
  </div>
  <div class="col-md-10 col-sm-10">
    <div class="panel panel-default">
   		<div class="panel-body">
        <ul class="nav nav-tabs">
          <li class="active"><a href="#newbook" data-toggle="tab">New Book</a>
          </li>
          <li><a href="#bookinstance" data-toggle="tab">Book Instance</a>
          </li>
          <li><a href="#user" data-toggle="tab">User</a>
          </li>
        </ul>
        <div class="tabbable">
          <div class="tab-content">
            <div class="tab-pane active" id="newbook">
              @include('addNewBook')
            </div>
            <div class="tab-pane" id="bookinstance">
              @include('addBookInstance')
            </div>
            <div class="tab-pane" id="user">
              @include('addUser')
            </div>
          </div>
        </div>              
      </div>
    </div> 
  </div>
</div>

@stop