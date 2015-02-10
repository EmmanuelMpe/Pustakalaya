<?php

class UserController extends \BaseController {

  // Display a listing of the resource.
  public function index()
  {
    if (!Auth::check() || !Auth::user()->isAdmin())
      App::abort(403);
    $userlist = User::paginate(10);
    return View::make('user.list')->withUsers($userlist)->
      withIndex(true);
  }

  // Show the form for creating a new resource.
  public function create()
  {
    if (!Auth::check() || !Auth::user()->isAdmin())
      App::abort(403);
    $usertype = 'Student';
    if (Input::has('type')) {
      if (Input::get('type')=='admin')
        $usertype = 'Admin';
      elseif (Input::get('type')=='librarian')
        $usertype = 'Librarian';
      elseif (Input::get('type')=='verifier')
        $usertype = 'Verifier';
    }

    Session::flash('usertype',$usertype);
    if (Session::has('user'))
      $user = Session::get('user');
    else
      $user = new User;
    return View::make('user.create')->withType($usertype)->
      withForupdate(false)->withUser($user);
  }

  // Store a newly created resource in storage.
  public function store()
  {
    if (!Auth::check() || !Auth::user()->isAdmin())
      App::abort(403);
    $messages = array();
    $usertype = Session::get('usertype');

    // Validation rules for input data
    $rules = array('name'=>'required',
      'role_name'=>'required|exists:roles,name',
      'email'=>'required|email|unique:users',
      'phone'=>'required|numeric', 'address'=>'required');

    if ($usertype=='Student') {
      $rules['rollnumber'] = 'required';
      $rules['department_sname'] = 'required|exists:departments,shortname';
    }

    $validator = Validator::make(Input::all(),$rules);

    // If fails, construct messagebag and redirect
    if ($validator->fails()) {
      foreach ($validator->messages()->all() as $mesg) {
        $messages[] = array('error',$mesg);
      }
      /*foreach ($validator->failed() as $failure=>$type) {
        Input::flash($failure);
      }
      //Session::flash('messages',$messages);*/
      return Redirect::to('/user/create?type='.$usertype)->
        withMessages($messages)->withInput();
    }

    $user = new User;
    $user->name = Input::get('name');
    $user->role = Input::get('role_name');
    $user->email = Input::get('email');
    $user->phone = Input::get('phone');
    $user->address = Input::get('address');
    $user->password = Hash::make('default');
    $user->save();

    if ($user->isStudent()) {
      $stdinfo = new StudentInfo;
      $stdinfo->rollnumber = Input::get('rollnumber');
      $stdinfo->user_id = $user->id;
      $stdinfo->department_sname = Input::get('department_sname');
      $stdinfo->fineacc = 0.0;
      $stdinfo->finepaid = 0.0;
      $stdinfo->save();
    } else if ($user->isAdmin()) {
      $adminfo = new AdminInfo;
      $adminfo->user_id = $user->id;
      $adminfo->save();
    } else if ($user->isLibrarian()) {
      $librinfo = new LibrarianInfo;
      $librinfo->user_id = $user->id;
      $librinfo->save();
    } else if ($user->isVerifier()) {
      $verinfo = new VerifierInfo;
      $verinfo->user_id = $user->id;
      $verinfo->save();
    }
    return Redirect::to('/users');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    $user = User::find($id);
    if ($user==NULL) {
      App::abort(404);
    }

    if ($user->role->name=='Student') {
      $stdinfo = StudentInfo::where('user_id','=',$id)->firstOrFail();
      return View::make('user.view')->withUser($user)->
        withBooks($user->books)->withStdinfo($stdinfo)->
        withStudent(true);
    } else {
      return View::make('user.view')->withUser($user);
    }
  }

  // Show the form for editing the specified resource.
  public function edit($id)
  {
    // Authorization check
    if (!Auth::check() || !Auth::user()->isAdmin())
      App::abort(403);

    $user = User::find($id);
    // 404 if not found
    if ($user==NULL)
      App::abort(404);
    $userinfo = $user->info();

    Session::flash('name',$user->name);
    return View::make('user.create')->withUser($user)->
      withType($user->role_name)->withUserinfo($userinfo)->
      withForupdate(true);
  }

  // Update the specified resource in storage.
  public function update($id)
  {
    // Authorization check
    if (!Auth::check() || !Auth::user()->isAdmin())
      App::abort(403);

    $user = User::find($id);

    // 404 if user not found
    if ($user==NULL)
      App::abort(404);

    // Validation rules for input data
    $rules = array('name'=>'required',
      'email'=>'required|email|unique:users,email,'.$id,
      'phone'=>'required|numeric', 'address'=>'required');

    $usertype = Session::get('usertype');

    if ($usertype=='Student') {
      $rules['roll'] = 'required';
      $rules['depart'] =
        'required|exists:departments,shortname';
    }

    $validator = Validator::make(Input::all(),$rules);

    // If fails, construct messagebag and redirect
    if ($validator->fails()) {
      foreach ($validator->messages()->all() as $mesg) {
        $messages[] = array('error',$mesg);
      }
      $user = new User; $user->populateFromInput();
      return Redirect::to('/user/create?type='.$usertype)->
        withMessages($messages)->withUser($user);
    }

    $user->populateFromInput();

    if ($user->isStudent()) {
      $stdinfo = $user->info();
      $stdinfo->rollnumber = Input::get('rollnumber');
      $stdinfo->department_sname = Input::get
        ('department_sname');
    }

    $user->push();
    $user->save();

    return Redirect::to('/users');
  }


  // Remove the specified resource from storage.
  public function destroy($id)
  { }
}
