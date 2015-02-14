<div class="form-group">
  <div class="col-lg-8 col-lg-offset-4">
    <div class="btn-group pull-right">
      <button type="submit" class="btn btn-primary">
      @if (isset($forupdate))
      @if ( $forupdate )
            Save
        @else
            Add
        @endif
      @else Submit
      @endif
      </button>
      <a class="btn btn-default" href="#">Cancel</a>
    </div>
  </div>
</div>
