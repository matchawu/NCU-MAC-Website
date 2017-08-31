<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Module_class extends Model
{
    protected $fillable=['term','name','field','location','time','limit','teacher','email','teacher_intro','class_hr','auth_hr','class_intro','goal','claim','other'];
}
