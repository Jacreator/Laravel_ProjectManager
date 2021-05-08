<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
  use SoftDeletes;
  protected $fillable = [
    'name',
    'description',
    'status',
    'duration',
    'user_id',
    'company_id'
  ];

  // project users
  public function user()
  {
    return $this->belongsTo('App\User');
  }

  // projects companies
  public function companies()
  {
    return $this->belongsTo('App\Models\Companies');
  }

  // project many to many task relationship
  public function users()
  {
    return $this->belongsToMany('App\User', 'project_users');
  }
}
