<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Single_class;
use App\Module_class;
use App\Fractal_class;

class VideoController extends Controller
{
     public function index(){

        $single_classes=Single_class::all();
        $module_classes=Module_class::all();
        $fractal_classes=Fractal_class::all();
        return view('video.video',["single_classes"=>$single_classes,"module_classes"=>$module_classes,"fractal_classes"=>$fractal_classes]);
    }



}
