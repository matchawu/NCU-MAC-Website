<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    protected $fillable=['date','start','end','teacher','unit','detail','comment','class_id'];
}
