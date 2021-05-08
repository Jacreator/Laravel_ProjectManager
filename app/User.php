<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
  use Notifiable, SoftDeletes;

  /**
  * The attributes that are mass assignable.
  *
  * @var array
  */
  protected $fillable = [
    'name',
    'email',
    'password',
    'role_id'
  ];

  /**
  * The attributes that should be hidden for arrays.
  *
  * @var array
  */
  protected $hidden = [
    'password', 'remember_token',
  ];

  /**
  * The attributes that should be cast to native types.
  *
  * @var array
  */
  protected $casts = [
    'email_verified_at' => 'datetime',
  ];

  // user tasks
  public function task()
  {
    return $this->hasMany('App\Models\Task');
  }

  // user comments
  public function comments()
  {
    return $this->hasMany('App\Models\Comment');
  }

  // user role
  public function role()
  {
    return $this->belongsTo('App\Models\Role');
  }

  // user Companies
  public function companies()
  {
    return $this->hasMany('App\Models\Companies');
  }

  // user many to many task relationship
  public function tasks()
  {
    return $this->belongsToMany('App\Models\Task', 'task_users');
  }

  // user many to many projects relationship
  public function projects()
  {
    return $this->belongsToMany('App\Models\Project', 'project_users');
  }
}
