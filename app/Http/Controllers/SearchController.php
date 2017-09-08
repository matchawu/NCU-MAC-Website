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
    public function search(Request $request){
      $name=$request->name;
      $day=$request->weekofday;
      $time=$request->time;
      if($request->type==1){

      }elseif($request->type==2){
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
          ->with('search_single',$search_single)->with('type','個別課程')->with('time',$time);
      }elseif($request->type==3){


      }elseif($request->type==4){

      }
    }

}
