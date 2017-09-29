<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Single_class extends Model
{
    protected $fillable=['term','way','name','field','other_field','location','date','start','end','limit','teacher','email','teacher_intro','class_hr','auth_hr','class_intro','weekday','keyword','video'];
}
