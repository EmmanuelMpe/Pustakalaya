@extends('layout.basic') @section('content')

<div class="row">
  <div class="col-lg-6">
    <h2>Add a Particular Book</h2>
  </div>
</div>

<hr>

<div class="create-form">
  <div class="row">

    <div class="col-lg-8">
      <form class="form-horizontal">
        <fieldset>
          <!-- <legend>Add Books</legend> -->
          <div class="form-group">
            <label for="inputISBN" class="col-lg-4 control-label">ISBN</label>
            <div class="col-lg-8">
              <input class="form-control" id="inputISBN" placeholder="ISBN" type="text">
            </div>
          </div>

        <!--
          <div class="form-group">
            <label for="inputBookIDs" class="col-lg-4 control-label">Books IDs</label>
            <div class="col-lg-8">
              <textarea class="form-control" rows="3" id="inputBookIDs" placeholder="Place book IDs here..."></textarea>
              <span class="help-block">Enter book ids seperated by a semicolon.</span>
            </div>
          </div>
        -->

          <div class="form-group">
            <label for="inputQty" class="col-lg-4 control-label">Quantity</label>
            <div class="col-lg-8">
              <input class="form-control" id="inputQty" placeholder="Quantity" type="text">
            </div>
          </div>

          <div class="form-group">
            <div class="col-lg-8 col-lg-offset-4">
              <button type="submit" class="btn btn-primary">Add</button>
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
