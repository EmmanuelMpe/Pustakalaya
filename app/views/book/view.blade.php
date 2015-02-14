@extends('layout.basic') @section('content')

<div class="row">
  <div class="col-lg-4">
    <h2>
    {{ $book->type_name }}
    @if (Auth::user()->isAdmin())
    <div class="btn-group pull-right">
    <a href="{{URL::to('bookitem/create?isbn='.$book->isbn) }}" class="btn
    btn-xs btn-primary">Add</a>
    <a href="{{URL::to('book/'.$book->isbn.'/edit') }}" class="btn
    btn-xs btn-warning">Edit</a>
    <a href="{{URL::to('book/'.$book->isbn.'/delete') }}" class="btn
    btn-xs btn-danger">Delete</a>
    </div>
    @endif
    </h2>
  </div>
</div>

<div class="row">
  <div class="col-lg-4">
    <div class="panel panel-default">
      <div class="panel-heading">Basic information</div>
      <ul class="list-group">
        <li class="list-group-item lead">
          {{{ $book->name }}}

        </li>
        <li class="list-group-item">
          {{{ $book->author }}}
        </li>
        <li class="list-group-item">
          {{{ $book->publisher }}}
        </li>
      </ul>
    </div>
    @include ('book.history')
  </div>
  <div class="col-lg-8">
  @include ('layout.alertbox')
  @include ('book.content')
  @include ('book.similar')
  </div>
</div>
@stop
