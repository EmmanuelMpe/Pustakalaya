@extends('layout.basic') @section('content')

<?php

class Test
{
    public $id=10;
    public $username="hari";
    public $content="School will remain closed in Sundays.";
    public $startdate = "15/2/3";
    public $expirydate = "15/2/6";
    public $active = true;
}
$user1 = new Test;
$user2 = new Test;
$user2->id = "1";
$user2->username = "shaym";
$user2->content = "You must obey us.";
$user2->startdate = "15/2/3";
$user2->expirydate = "15/2/6";
$user2->active = false;
$notifications = array($user1,$user2);
?>

<div class="row">
  <div class="col-lg-6 col-md-7 col-sm-6">
    <h2>List</h2>
  </div>
</div>

<div class="list-table ">

  @include ('layout.alertbox')

  <div class="row">
    <div class="col-lg-12">

      <div class="panel panel-default">
        <div class="panel-heading"><span class="glyphicon glyphicon-bell"></span> Notifications </div>

        @if (count($notifications)==0)
        <div class="panel-body text-center">
            None
        </div>
        @else
        <table class="table table table-hover ">
          <thead>
            <tr>
              <th>Id</th>
              <th>Authored by</th>
              <th>Content</th>
              <th>Start date</th>
              <th>Expiry date</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            @foreach ($notifications as $notification)
            <tr 
                @if ($notification->active)
                    class="warning"
                @endif
                >
              <td class="">{{{$notification->id}}}</td>
              <td class="">{{{$notification->username}}}</td>
              <td class="">{{{$notification->content}}}</td>
              <td class="">{{{$notification->startdate}}}</td>
              <td class="">{{{$notification->expirydate}}}</td>
            <td class="">
        <div class="bs-component pull-right">
          <a href="" class="" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="Delete">
            <span class="glyphicon glyphicon-trash"> </span>
          </a>
        </div>

           </td>
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
      <div class="col-lg-12">{{--$notifications->links()--}}</div>
    </div>
  </div>

</div>

@stop
