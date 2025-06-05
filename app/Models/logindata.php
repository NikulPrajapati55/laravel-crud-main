<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class logindata extends Authenticatable
{
    protected $table = 'login_data';
  protected $fillable = ['user_name', 'user_email', 'user_password'];
}
