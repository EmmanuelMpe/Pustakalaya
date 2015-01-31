<?php

class UserController extends \BaseController {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $userlist = User::paginate(3);
    return View::make('resource.user.list')->withUsers($userlist);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    //
  }


  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store()
  {
    //
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
    if ($user->role->name=='Student') {
      $stdinfo = StudentInfo::where('user_id','=',$id)->firstOrFail();
      return View::make('resource.user.view')->withUser($user)->
        withBooks($user->books)->withStdinfo($stdinfo);
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
  {
    //
  }


  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id)
  {
    //
  }


  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    //
  }


}
