@extends('layout.basic')

@section('content')
<div id="banner" class="page-header">
<div class="row">
  <div class="col-lg-12 col-md-12 col-sm-12">
    <h2 class="text-center">Pustakalaya</h2>
    <p class="lead text-center">Library Management System</p>


        <!-- temporary thing -->
          <ul>
            <li><a href="{{{ URL::to('/admin') }}}"> Admin </a>
            </li>
            <li><a href="{{{ URL::to('/librarian') }}}"> Librarian </a>
            </li>
            <li><a href="{{{ URL::to('/student') }}}"> Student </a>
            </li>
            <li><a href="{{{ URL::to('/verifier') }}}"> Verifier </a>
            </li>
          </ul>
        <!-- temporary thing  end -->

  </div>
</div>
</div>

@stop
