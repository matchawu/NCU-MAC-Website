<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Achievement extends Model
{
    protected $fillable = ['gather_name','gather_grade','gather_email','gather_phone','field','member1_name','member1_place','member1_email','member1_phone','member2_name','member2_place','member2_email','member2_phone','result_topic','result_intro','result_achievement','result_difficulty','keyword','accociate'];
}
