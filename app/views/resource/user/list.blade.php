@extends('layout.basic') @section('content')

<div class="row">
  <div class="col-lg-6 col-md-7 col-sm-6">
    <h2>User list</h2>
  </div>
</div>

<div class="select-form">
  <div class="row">
    <div class="col-lg-6 col-md-7 col-sm-6">
      <form class="form">
        <fieldset>
          <div class="form-group">
            <select class="selectpicker" data-width="auto" id="inputAccess">
              <option>Student</option>
              <option>Employee</option>
              <option>Verifier</option>
              <option>Admin</option>
            </select>

            <select class="selectpicker" data-width="auto" id="inputBatch">
              <option>2067</option>
              <option>2068</option>
              <option>2069</option>
            </select>

            <select class="selectpicker" data-width="auto" id="inputProgram">
              <option>BAE</option>
              <option>BCE</option>
              <option>BCT</option>
              <option>BEL</option>
              <option>BEX</option>
              <option>BME</option>
            </select>

            <button type="submit" class="btn btn-primary">List</button>
          </div>
        </fieldset>
      </form>

    </div>
  </div>
</div>

<div class="list-table ">
  <div class="row">
    <div class="col-lg-12">

      <div class="panel panel-default">
        <div class="panel-heading">Users</div>

        @if (count($users)==0)
        <div class="panel-body text-center">
        None
        </div>
        @else
        <table class="table table-striped table-hover">
          <thead>
            <tr>
              <th>Id</th>
              <th>Name</th>
              <th>Role</th>
              <th>Email</th>
              <th>Phone</th>
              <th>Address</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($users as $user)
            <tr>
              <td>{{$user->id}}</td>
              <td><a href="{{URL::to('user').'/'.$user->id}}">
                  {{$user->name}}</a>
              </td>
              <td>{{$user->role_name}}</td>
              <td>{{$user->email}}</td>
              <td>{{$user->phone}}</td>
              <td>{{$user->address}}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
        @endif
      </div>
    </div>

    <div class="col-lg-12">
      <div id="pagination-block">
        <div class="col-lg-12">
          {{$users->links()}}
        </div>
      </div>
    </div>

  </div>

</div>

@stop
