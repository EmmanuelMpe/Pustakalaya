@extends('layout.basic') @section('content')

<div class="row">
  <div class="col-lg-6">
    @if ($forupdate)
    <h2>Edit book</h2> @else
    <h2>Add a Book</h2> @endif
  </div>
</div>
<hr>

<div class="create-form">
  <div class="row">
    <div class="col-lg-8">
      <form class="form-horizontal" method="POST" @if ($forupdate) action="{{URL::to('/book').'/'.$bookinfo->isbn}}" @else action="{{URL::to('/book')}}" @endif>
        @if ($forupdate)
        <input type="hidden" name="_method" value="put"> @endif

        <fieldset>
          <!--<legend>Add New Book</legend> -->
          <div class="form-group">
            <label for="inputISBN" class="col-lg-4 control-label">ISBN</label>
            <div class="col-lg-8">
              <input class="form-control" id="inputISBN" name="isbn" type="text" required value="{{$bookinfo->isbn}}">
            </div>
          </div>
          <div class="form-group">
            <label for="inputTitle" class="col-lg-4 control-label">Title</label>
            <div class="col-lg-8">
              <input class="form-control" id="inputTitle" name="name" type="text" required value="{{$bookinfo->name}}">
            </div>
          </div>
          <div class="form-group">
            <label for="inputAuthor" class="col-lg-4 control-label">Author</label>
            <div class="col-lg-8">
              <input class="form-control" id="inputAuthor" name="author" type="text" required value="{{$bookinfo->author}}">
            </div>
          </div>

          <div class="form-group">
            <label for="inputPublisher" class="col-lg-4 control-label">Publisher</label>
            <div class="col-lg-8">
              <input class="form-control" id="inputPublisher" name="publisher" type="text" required value="{{$bookinfo->publisher}}">
            </div>
          </div>

          <div class="form-group">
            <label for="inputEdition" class="col-lg-4 control-label">Edition</label>
            <div class="col-lg-8">
              <input class="form-control" id="inputEdition" name="edition" type="text" required>
            </div>
          </div>

          <div class="form-group">
            <label for="inputQty" class="col-lg-4 control-label">Quantity</label>
            <div class="col-lg-8">
              <input class="form-control" id="inputQty" name="quantity" type="number">
            </div>
          </div>

          <div class="form-group">
            <label for="inputType" class="col-lg-4 control-label">
              Type</label>
            <div class="col-lg-8">
              <select class="selectpicker" data-width="auto" id="inputType" name="type_name">
                <option>Lendable</option>
                <option>Reference</option>
                <option>NonLendable</option>
              </select>
            </div>
          </div>

         @include ('layout.submitbtn')

        </fieldset>
      </form>
    </div>

    @include('layout.alertbox')

  </div>
</div>
@stop
