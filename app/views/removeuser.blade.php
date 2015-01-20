<div class="col-lg-8">
  <form class="form-horizontal">
    <fieldset>
      <legend>Remove User</legend>
      <div class="form-group">
        <label for="inputBookIDs" class="col-lg-2 control-label">User IDs</label>
        <div class="col-lg-10">
          <textarea class="form-control" rows="3" id="inputBookIDs" placeholder="Place book IDs here...">
          </textarea>
          <span class="help-block">Enter user ids seperated by a semicolon.</span>
        </div>
      </div>
      <div class="form-group">
        <div class="col-lg-10 col-lg-offset-2">
          <button type="submit" class="btn btn-primary">Remove</button>
          <button class="btn btn-default pull-right">Cancel</button>
        </div>
      </div>
    </fieldset>
  </form>
</div>
<div class="col-lg-4">
  <div class="alert alert-dismissable alert-success">
    <button type="button" class="close" data-dismiss="alert">×</button>        
    <span class="badge"><b>12</b></span> users were removed.</a>
  </div>
  <div class="alert alert-dismissable alert-danger">
    <button type="button" class="close" data-dismiss="alert">×</button>
    Unable to remove. Try again.</a>
  </div>
</div>
