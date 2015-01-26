<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent
  implements UserInterface, RemindableInterface {

  use UserTrait, RemindableTrait;

  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'users';

  /**
   * The attributes excluded from the model's JSON form.
   *
   * @var array
   */
  protected $hidden = array('password', 'remember_token');

  // We don't need the default timestamps
  public $timestamps = false;

  // Get the role of this user
  public function role() {
    return $this->belongsTo('Role','role_name','name');
  }

  // Get the books of this user
  public function books() {
    return $this->hasMany('Book','assigned_to','id');
  }
}
