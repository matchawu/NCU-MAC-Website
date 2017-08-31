<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class appUser extends Model
{
    protected $fillable = ['account','password'];
}
