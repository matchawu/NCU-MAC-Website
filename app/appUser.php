<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class appUser extends Model
{
    protected $fillable = ['unitname','account','password','password2','mail','name','phone'];
}

