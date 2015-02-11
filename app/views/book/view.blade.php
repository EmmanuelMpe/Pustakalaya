@extends('layout.basic')
@section('content')

<div class="row">
  <div class="col-lg-4">
    <h2>
    {{ $bookinfo->type_name }}
    @if (Auth::user()->isAdmin())
    <div class="btn-group pull-right">
    <a href="{{URL::to('/book/'.$bookinfo->isbn.'/edit') }}" class="btn btn-sm btn-warning">Edit</a>
    <a href="{{URL::to('/book/'.$bookinfo->isbn.'/delete') }}" class="btn btn-sm btn-danger">Delete</a>
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
          {{{ $bookinfo->name }}}
        </li>
        <li class="list-group-item">
          {{{ $bookinfo->isbn }}}
        </li>
        <li class="list-group-item">
          {{{ $bookinfo->author }}}
        </li>
        <li class="list-group-item">
          {{{ $bookinfo->publisher }}}
        </li>
      </ul>
    </div>

    @include ('book.history')
  </div>

  <div class="col-lg-8">

    @include ('book.content')

  </div>
</div>
@stop
