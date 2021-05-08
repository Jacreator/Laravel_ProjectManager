<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
  protected $fillable = [
    'name',
    'description',
    'status',
    'duration',
    'user_id',
    'company_id',
    'project_id'
  ];

  // task users
  public function user()
  {
    return $this->belongsTo('App\User');
  }

  // task companies
  public function companies()
  {
    return $this->belongsTo('App\Models\Companies');
  }

  // task project
  public function projects()
  {
    return $this->belongsTo('App\Models\Project');
  }

  public function users()
  {
    return $this->belongsToMany('App\User', 'task_users');
  }
}
