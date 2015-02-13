@extends('layout.basic') @section('content')

<div class="row">
  <div class="col-lg-6">
    @if ($forupdate)
    <h2>Edit {{$type}}</h2>
    @else
    <h2>Add {{$type}}</h2>
    @endif
  </div>
</div>

<!-- Type of user must be inferred by the link or something and
additional information should be passed for creating users like
student -->

<hr>
<div class="contact-form">
  <div class="row">
    <div class="col-lg-8">
      <form class="form-horizontal" method="POST"
        @if ($forupdate)
        action="{{URL::to('user').'/'.$user->id}}"
        @else
        action="{{URL::to('user')}}"
        @endif
        >

        <fieldset>
          @if ($forupdate)
          <input type="hidden" name="_method" value="put">
          @else
          <input type="hidden" name="role" value="{{$type}}">
          @endif

          <div class="form-group">
            <label for="inputName"
              class="col-lg-4 control-label">Name</label>
            <div class="col-lg-8">
              <input class="form-control" id="inputName"
              name="name" type="text" required
              @if ($forupdate)
              value="{{$user->name}}"
              @else
              value="{{Input::old('name')}}"
              @endif
              >
            </div>
          </div>

          <div class="form-group">
            <label for="inputEmail"
              class="col-lg-4 control-label">Email</label>
            <div class="col-lg-8">
              <input class="form-control" id="inputEmail"
              name="email" type="email" required
              value="{{$user->email}}">
            </div>
          </div>
          <div class="form-group">
            <label for="inputAddress"
              class="col-lg-4 control-label">Address</label>
            <div class="col-lg-8">
              <input class="form-control" id="inputAddress"
              name="address" type="text" required
              value="{{$user->address}}">
            </div>
          </div>
          <div class="form-group">
            <label for="inputContact"
              class="col-lg-4 control-label">Phone</label>
            <div class="col-lg-8">
              <input class="form-control" id="inputContact"
              name="phone" type="tel" required
              value="{{$user->phone}}">
            </div>
          </div>
          @if ($type=="Student")
          <div class="form-group">
            <label for="inputRoll"
              class="col-lg-4 control-label">Roll Number</label>
            <div class="col-lg-8">
              <input class="form-control" id="inputRoll"
              name="rollnumber" type="text"
              value="{{Input::old('rollnumber')}}" required>
            </div>
          </div>

          <div class="form-group">
            <label for="inputDepart"
              class="col-lg-4 control-label">Department</label>
            <div class="col-lg-8">
              <input class="form-control" id="inputDepart"
              name="department_sname" type="text"
              value="{{Input::old('department_sname')}}"
              required>
            </div>
          </div>
          @endif

         @include ('layout.submitbtn')

        </fieldset>
      </form>
    </div>

    <div class="col-lg-4">
    @include ('layout.alertbox')
    </div>

  </div>
</div>

@stop
