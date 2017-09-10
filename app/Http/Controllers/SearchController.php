<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Module_class;
use App\Single_class;
use App\Fractal_class;

class SearchController extends Controller
{
    public function index(){
      return view('record.search');
    }
    public function indexall(){
      $single_class=Single_class::all();
      $module_class=Module_class::all();
      $fractal_class=Fractal_class::all();
      return view('record.index');
    }
    public function search(Request $request){
      $name=$request->name;
      $day=$request->weekofday;
      $time=$request->time;
        if($day==0){
            $search_single=Single_class::where('name','like','%'.$name.'%')
                                        ->get();
        }else{
          if($name==null){
            $search_single=Single_class::where('weekday','=',$day)
                                        ->get();
          }else{
            $search_single=Single_class::where('name','like','%'.$name.'%')
                                        ->where('weekday','=',$day)
                                        ->get();
          }
        }
        return back()
          ->with('search_single',$search_single)->with('time',$time);

    }
    public function search2(Request $request){
      $name=$request->name;
      $type=$request->type;
        if($type==1){
            $search_other=Module_class::where('name','like','%'.$name.'%')
                                        ->get();
        }else{
            $search_other=Fractal_class::where('name','like','%'.$name.'%')
                                        ->get();
        }
        return back()
          ->with('search_other',$search_other)->with('type',$type);

    }
    public function all(){
      $single_class=Single_class::all();
      return view('record.single_class',["single_class"=>$single_class]);
    }
    public function humanities(){
      $single_class=Single_class::all();
      return view('record/single_class.single',["type"=>'1',"single_class"=>$single_class]);
    }
    public function nscience(){
      $single_class=Single_class::all();
      return view('record/single_class.single',["type"=>'2',"single_class"=>$single_class]);
    }
    public function ascience(){
      $single_class=Single_class::all();
      return view('record/single_class.single',["type"=>'3',"single_class"=>$single_class]);
    }
    public function trend(){
      $single_class=Single_class::all();
      return view('record/single_class.single',["type"=>'4',"single_class"=>$single_class]);
    }
    public function interdisciplinary(){
      $single_class=Single_class::all();
      return view('record/single_class.single',["type"=>'5',"single_class"=>$single_class]);
    }
    public function social(){
      $single_class=Single_class::all();
      return view('record/single_class.single',["type"=>'6',"single_class"=>$single_class]);
    }
    public function creative(){
      $single_class=Single_class::all();
      return view('record/single_class.single',["type"=>'7',"single_class"=>$single_class]);
    }
    public function others(){
      $single_class=Single_class::all();
      return view('record/single_class.single',["type"=>'8',"single_class"=>$single_class]);
    }

    public function all2(){
      $module_class=Module_class::all();
      return view('record.module_class',["module_class"=>$module_class]);
    }
    public function humanities2(){
      $module_class=Module_class::all();
      return view('record/module_class.module',["type"=>'1',"module_class"=>$module_class]);
    }
    public function nscience2(){
      $module_class=Module_class::all();
      return view('record/module_class.module',["type"=>'2',"module_class"=>$module_class]);
    }
    public function ascience2(){
      $module_class=Module_class::all();
      return view('record/module_class.module',["type"=>'3',"module_class"=>$module_class]);
    }
    public function trend2(){
      $module_class=Module_class::all();
      return view('record/module_class.module',["type"=>'4',"module_class"=>$module_class]);
    }
    public function interdisciplinary2(){
      $module_class=Module_class::all();
      return view('record/module_class.module',["type"=>'5',"module_class"=>$module_class]);
    }
    public function social2(){
      $module_class=Module_class::all();
      return view('record/module_class.module',["type"=>'6',"module_class"=>$module_class]);
    }
    public function creative2(){
      $module_class=Module_class::all();
      return view('record/module_class.module',["type"=>'7',"module_class"=>$module_class]);
    }
    public function others2(){
      $module_class=Module_class::all();
      return view('record/module_class.module',["type"=>'8',"module_class"=>$module_class]);
    }

    public function all3(){
      $fractal_class=Fractal_class::all();
      return view('record.fractal_class',["fractal_class"=>$fractal_class]);
    }
    public function humanities3(){
      $fractal_class=Fractal_class::all();
      return view('record/fractal_class.fractal',["type"=>'1',"fractal_class"=>$fractal_class]);
    }
    public function nscience3(){
      $fractal_class=Fractal_class::all();
      return view('record/fractal_class.fractal',["type"=>'2',"fractal_class"=>$fractal_class]);
    }
    public function ascience3(){
      $fractal_class=Fractal_class::all();
      return view('record/fractal_class.fractal',["type"=>'3',"fractal_class"=>$fractal_class]);
    }
    public function trend3(){
      $fractal_class=Fractal_class::all();
      return view('record/fractal_class.fractal',["type"=>'4',"fractal_class"=>$fractal_class]);
    }
    public function interdisciplinary3(){
      $fractal_class=Fractal_class::all();
      return view('record/fractal_class.fractal',["type"=>'5',"fractal_class"=>$fractal_class]);
    }
    public function social3(){
      $fractal_class=Fractal_class::all();
      return view('record/fractal_class.fractal',["type"=>'6',"fractal_class"=>$fractal_class]);
    }
    public function creative3(){
      $fractal_class=Fractal_class::all();
      return view('record/fractal_class.fractal',["type"=>'7',"fractal_class"=>$fractal_class]);
    }
    public function others3(){
      $fractal_class=Fractal_class::all();
      return view('record/fractal_class.fractal',["type"=>'8',"fractal_class"=>$fractal_class]);
    }

}
