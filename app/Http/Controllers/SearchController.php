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
      $type=1;
        // if($type==1){
        //     $search_other=Module_class::where('name','like','%'.$name.'%')
        //                                 ->get();
        // }else{
        //     $search_other=Fractal_class::where('name','like','%'.$name.'%')
        //                                 ->get();
        // }
        $search_other=Module_class::where('name','like','%'.$name.'%')
                                    ->get();
        return back()
          ->with('search_other',$search_other)->with('type',$type);

    }
    public function all(){
      $single_class=Single_class::all();
      return view('record.single_class',["single_class"=>$single_class]);
    }
    public function humanities(){
      $single_class=Single_class::all();
      return view('record/single_class.single',["type"=>'人文與思想',"single_class"=>$single_class]);
    }
    public function nscience(){
      $single_class=Single_class::all();
      return view('record/single_class.single',["type"=>'自然科學',"single_class"=>$single_class]);
    }
    public function ascience(){
      $single_class=Single_class::all();
      return view('record/single_class.single',["type"=>'應用科學',"single_class"=>$single_class]);
    }
    public function trend(){
      $single_class=Single_class::all();
      return view('record/single_class.single',["type"=>'社會思潮與現象',"single_class"=>$single_class]);
    }
    public function interdisciplinary(){
      $single_class=Single_class::all();
      return view('record/single_class.single',["type"=>'跨域整合',"single_class"=>$single_class]);
    }
    public function social(){
      $single_class=Single_class::all();
      return view('record/single_class.single',["type"=>'社會實踐',"single_class"=>$single_class]);
    }
    public function creative(){
      $single_class=Single_class::all();
      return view('record/single_class.single',["type"=>'創意創業',"single_class"=>$single_class]);
    }
    public function others(){
      $single_class=Single_class::all();
      return view('record/single_class.single',["type"=>'其他',"single_class"=>$single_class]);
    }

    public function all2(){
      $module_class=Module_class::all();
      return view('record.module_class',["module_class"=>$module_class]);
    }
    public function humanities2(){
      $module_class=Module_class::all();
      return view('record/module_class.module',["type"=>'人文與思想',"module_class"=>$module_class]);
    }
    public function nscience2(){
      $module_class=Module_class::all();
      return view('record/module_class.module',["type"=>'自然科學',"module_class"=>$module_class]);
    }
    public function ascience2(){
      $module_class=Module_class::all();
      return view('record/module_class.module',["type"=>'應用科學',"module_class"=>$module_class]);
    }
    public function trend2(){
      $module_class=Module_class::all();
      return view('record/module_class.module',["type"=>'社會思潮與現象',"module_class"=>$module_class]);
    }
    public function interdisciplinary2(){
      $module_class=Module_class::all();
      return view('record/module_class.module',["type"=>'跨域整合',"module_class"=>$module_class]);
    }
    public function social2(){
      $module_class=Module_class::all();
      return view('record/module_class.module',["type"=>'社會實踐',"module_class"=>$module_class]);
    }
    public function creative2(){
      $module_class=Module_class::all();
      return view('record/module_class.module',["type"=>'創意創業',"module_class"=>$module_class]);
    }
    public function others2(){
      $module_class=Module_class::all();
      return view('record/module_class.module',["type"=>'其他',"module_class"=>$module_class]);
    }

    public function all3(){
      $fractal_class=Fractal_class::all();
      return view('record.fractal_class',["fractal_class"=>$fractal_class]);
    }
    public function humanities3(){
      $fractal_class=Fractal_class::all();
      return view('record/fractal_class.fractal',["type"=>'人文與思想',"fractal_class"=>$fractal_class]);
    }
    public function nscience3(){
      $fractal_class=Fractal_class::all();
      return view('record/fractal_class.fractal',["type"=>'自然科學',"fractal_class"=>$fractal_class]);
    }
    public function ascience3(){
      $fractal_class=Fractal_class::all();
      return view('record/fractal_class.fractal',["type"=>'應用科學',"fractal_class"=>$fractal_class]);
    }
    public function trend3(){
      $fractal_class=Fractal_class::all();
      return view('record/fractal_class.fractal',["type"=>'社會思潮與現象',"fractal_class"=>$fractal_class]);
    }
    public function interdisciplinary3(){
      $fractal_class=Fractal_class::all();
      return view('record/fractal_class.fractal',["type"=>'跨域整合',"fractal_class"=>$fractal_class]);
    }
    public function social3(){
      $fractal_class=Fractal_class::all();
      return view('record/fractal_class.fractal',["type"=>'社會實踐',"fractal_class"=>$fractal_class]);
    }
    public function creative3(){
      $fractal_class=Fractal_class::all();
      return view('record/fractal_class.fractal',["type"=>'創意創業',"fractal_class"=>$fractal_class]);
    }
    public function others3(){
      $fractal_class=Fractal_class::all();
      return view('record/fractal_class.fractal',["type"=>'其他',"fractal_class"=>$fractal_class]);
    }

}
