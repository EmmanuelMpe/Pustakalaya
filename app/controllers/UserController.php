<?php

class UserController extends \BaseController {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    if (!Auth::check() || !Auth::user()->isAdmin())
      App::abort(403);
    $userlist = User::paginate(10);
    return View::make('resource.user.list')->withUsers($userlist)->
      withIndex(true);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
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
    return View::make('resource.user.create')->withType($usertype);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store()
  {
    if (!Auth::check() || !Auth::user()->isAdmin())
      App::abort(403);
    $user = new User;
    $fail = false;
    $messages = array();

    // Check if name is empty
    if (empty(Input::get('name'))) {
      $messages[] = array('error', 'Name cannot be empty');
      Input::flashExcept('name');
      $fail = false;
    }
    $user->name = Input::get('name');

    // Check validity of role name
    if (empty(Input::get('role')) ||
      Role::where('name','=',Input:get('role'))->count()==0) {
      $messages[] = array('error','Role should be valid');
      Input::flashExcept('role');
      $fail = true;
    }
    $user->role_name = Input::get('role');

    // Check validity of email
    if (empty(Input::get('role')) 
    $user->email = Input::get('email');
    $user->phone = Input::get('phone');
    $user->address = Input::get('address');
    $user->password = Hash::make('default');
    $user->save();
    if ($user->isStudent()) {
      $stdinfo = new StudentInfo;
      $stdinfo->rollnumber = Input::get('roll');
      $stdinfo->user_id = $user->id;
      $stdinfo->department_sname = Input::get('depart');
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
      return View::make('resource.user.view')->withUser($user)->
        withBooks($user->books)->withStdinfo($stdinfo)->
        withStudent(true);
    } else {
      return View::make('resource.user.view')->withUser($user);
    }
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  { }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id)
  { }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  { }
}
