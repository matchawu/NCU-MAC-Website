<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Module;

class ModuleController extends Controller
{
    //  public function index(){
    //     $module=Module::all();
    //     return view('application.form2');
    // }

     public function store(Request $request){
        $module = new Module;

        $module -> date = $request -> date;
        $module -> start = $request -> start;
        $module -> end = $request -> end;
        $module -> teacher = $request -> teacher;
        $module -> unit = $request -> unit;
        $module -> detail = $request -> detail;
        $module -> comment = $request -> comment;
        $module -> class_id = $request -> class_id;
        $module -> weekday = date('N',strtotime($request->date));
        $module->save();


        return redirect('/application/edit_module/'. $request -> class_id);
  //    $input = Input::all();
  //    $post = new Post;
  //    $post->title = $input['title'];//方法一
  //    $post->content = Input::get('content');//方法二
  //    $post->save();
        // return Redirect::to('/');
    }


    public function edit($id){
      $module = Module::find($id);
      // $class_id = $module->class_id;
      // return view('application.edit_module',["module"=>$module]);
    }

    public function edit_fin($id, Request $request){
      $module = Module::find($id);
      $class_id = $module->class_id;

      $module -> date = $request -> date;
      $module -> start = $request -> start;
      $module -> end = $request -> end;
      $module -> teacher = $request -> teacher;
      $module -> unit = $request -> unit;
      $module -> detail = $request -> detail;
      $module -> comment = $request -> comment;
      $module -> weekday = date('N',strtotime($request->date));

      $module->save();

      return redirect('/application/edit_module/'.$class_id);
    }

    public function delete($id){
      $module = Module::find($id);
      $class_id = $module->class_id;
      $module->delete();

      return redirect('/application/edit_module/'.$class_id);
    }





}
