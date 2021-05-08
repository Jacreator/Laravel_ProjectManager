<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Companies extends Model
{
  protected $fillable = [
    'user_id',
    'name',
    'description'
  ];

  // task users
  public function users()
  {
    return $this->belongsTo('App\User');
  }
}
