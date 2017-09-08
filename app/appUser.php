<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class appUser extends Model
{
    protected $fillable = ['unitname','account','password','mail','name','phone'];
}

