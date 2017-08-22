<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Req extends Model
{
    protected $fillable = ['application_name' ,'applicant_department','applicant_department','usage_course','usage_name','usage_department','usage_people_num','usage_classroom','usage_software','type','year_num','year_semester','date_start','date_finish','time','other_time','confirmed','ended','query_code'];
}
