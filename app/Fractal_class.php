<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fractal_class extends Model
{
    protected $fillable=['term','name','code','field','unit','location','time','limit','teacher','email','teacher_intro','class_hr','auth_hr','class_intro','comment'];
}
