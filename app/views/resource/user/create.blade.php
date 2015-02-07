@extends('layout.basic') @section('content')

<div class="row">
  <div class="col-lg-6">
    <h2>Add {{$type}}</h2>
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
        action="{{URL::to('user')}}">
        <fieldset>
          <input type="hidden" name="role" value="{{$type}}">
         <div class="form-group">
            <label for="inputName" class="col-lg-4 control-label">Name</label>
            <div class="col-lg-8">
              <input class="form-control" id="inputName" name="name"
              type="text" value="{{Input::old('name')}}" required>
            </div>
          </div>
          <div class="form-group">
          <label for="inputEmail" class="col-lg-4 control-label">Email</label>
            <div class="col-lg-8">
              <input class="form-control" id="inputEmail" name="email"
              type="email" value="{{Input::old('email')}}" required>
            </div>
          </div>
          <div class="form-group">
            <label for="inputAddress" class="col-lg-4 control-label">Address</label>
            <div class="col-lg-8">
              <input class="form-control" id="inputAddress"
              name="address" type="text" value="{{Input::old('address')}}" required>

            </div>
          </div>
          <div class="form-group">
            <label for="inputContact" class="col-lg-4 control-label">
              Phone</label>
            <div class="col-lg-8">
              <input class="form-control" id="inputContact" name="phone" type="tel" value="{{Input::old('phone')}}" required>
            </div>
          </div>
          @if ($type=="Student")
          <div class="form-group">
            <label for="inputRoll" class="col-lg-4 control-label">
              Roll Number</label>
            <div class="col-lg-8">
              <input class="form-control" id="inputRoll" name="roll" type="text" value="{{Input::old('roll')}}" required>
            </div>
          </div>

          <div class="form-group">
            <label for="inputDepart" class="col-lg-4 control-label">
              Department</label>
            <div class="col-lg-8">
              <input class="form-control" id="inputDepart" name="depart" type="text" value="{{Input::old('depart')}}" required>
            </div>
          </div>
          @endif
          <div class="form-group">
            <div class="col-lg-8 col-lg-offset-4">
            <button type="submit" class="btn btn-primary">Save</button>
            <button class="btn btn-default pull-right">Cancel</button>
            </div>
          </div>

        </fieldset>
      </form>
    </div>

    @include('layout.alertbox')

  </div>
</div>

@stop
