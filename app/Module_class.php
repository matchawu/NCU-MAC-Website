<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Module_class extends Model
{
    protected $fillable=['term','name','field','other_field','location','limit','teacher','email','teacher_intro','class_hr','auth_hr','class_intro','goal','claim','other','keyword'];
}
