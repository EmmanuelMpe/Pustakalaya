@extends('layout.basic') @section('content')

<div class="row">
  <div class="col-lg-6">
    <h2>Add a Book</h2>
  </div>
</div>

<hr>

<div class="create-form">
  <div class="row">
    <div class="col-lg-8">
      <form class="form-horizontal" method="POST"
        action="{{URL::to('/book')}}">
        <fieldset>
          <!--<legend>Add New Book</legend> -->
          <div class="form-group">
            <label for="inputISBN" class="col-lg-4 control-label">
              ISBN</label>
            <div class="col-lg-8">
              <input class="form-control" id="inputISBN"
              name="isbn" type="text">
            </div>
          </div>
          <div class="form-group">
            <label for="inputTitle" class="col-lg-4 control-label">
              Title</label>
            <div class="col-lg-8">
              <input class="form-control" id="inputTitle"
              name="title" type="text">
            </div>
          </div>
          <div class="form-group">
            <label for="inputAuthor" class="col-lg-4 control-label">
              Author</label>
            <div class="col-lg-8">
              <input class="form-control" id="inputAuthor"
              name="author" type="text">
            </div>
          </div>

          <div class="form-group">
            <label for="inputPublisher" class="col-lg-4 control-label">
              Publisher</label>
            <div class="col-lg-8">
              <input class="form-control" id="inputPublisher"
              name="publisher" type="text">
            </div>
          </div>

          <div class="form-group">
            <label for="inputEdition" class="col-lg-4 control-label">
              Edition</label>
            <div class="col-lg-8">
              <input class="form-control" id="inputEdition"
              name="edition" type="text">
            </div>
          </div>

          <div class="form-group">
            <label for="inputQty" class="col-lg-4 control-label">
              Quantity</label>
            <div class="col-lg-8">
              <input class="form-control" id="inputQty"
              name="quantity" type="number">
            </div>
          </div>

          <div class="form-group">
          <label for="inputType" class="col-lg-4 control-label">
              Type</label>
          <div class="col-lg-8">
          <select class="selectpicker" data-width="auto"
              id="inputType" name="type">
              <option>Lendable</option>
              <option>Reference</option>
              <option>NonLendable</option>
          </select>
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
