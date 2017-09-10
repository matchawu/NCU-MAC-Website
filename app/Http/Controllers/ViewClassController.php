<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Module_class;
use App\Single_class;
use App\Fractal_class;

class ViewClassController extends Controller
{
    public function view_single($id){
      $single_class = Single_class::find($id);
      return view('record\view.view_single',["single_class"=>$single_class]);
    }
    public function view_module($id){
      $module_class = Module_class::find($id);
      $modules = Module::where('class_id',$id)->get();
      return view('record\view.view_module',["module_class"=>$module_class,"modules"=>$modules]);
    }
    public function view_fractal($id){
      $fractal_class = Fractal_class::find($id);
      return view('record\view.view_fractal',["fractal_class"=>$fractal_class]);

    }

}
