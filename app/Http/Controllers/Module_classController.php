<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Module_class;
use App\Module;


class Module_classController extends Controller
{
     public function index(){

        $module_class=Module_class::all();
        return view('application.module');
        // [
        //   'modules' => $modules,
        // ]
    }

     public function store(Request $request){
        $module_class = new Module_class;

        $module_class -> term = $request -> term;
        $module_class -> name = $request -> name;
        $module_class -> field = $request -> field;
        $module_class -> other_field = $request -> other_field;
        $module_class -> location = $request -> location;
        $module_class -> limit = $request -> limit;
        $module_class -> teacher = $request -> teacher;
        $module_class -> email = $request -> email;
        $module_class -> teacher_intro = $request -> teacher_intro;
        $module_class -> class_hr = $request -> class_hr;
        $module_class -> auth_hr = $request -> auth_hr;
        $module_class -> class_intro = $request -> class_intro;
        $module_class -> goal = $request -> goal;
        $module_class -> claim = $request -> claim;
        $module_class -> other = $request -> other;
        $module_class -> keyword = $request -> keyword;

        $module_class -> account = $request->session()->get('account');

        $module_class->save();


        return redirect('/application/finish');
  //    $input = Input::all();
  //    $post = new Post;
  //    $post->title = $input['title'];//方法一
  //    $post->content = Input::get('content');//方法二
  //    $post->save();
        // return Redirect::to('/');
    }

    public function view($id){
      $module_class = Module_class::find($id);
      $modules = Module::where('class_id',$id)->get();
      return view('application.view_module',["module_class"=>$module_class,"modules"=>$modules]);
    }
    public function edit($id){
      $module_class = Module_class::find($id);
      $modules = Module::where('class_id',$id)->get();
      return view('application.edit_module',[
        "module_class"=>$module_class,
        "modules"=>$modules,
      ]);
    }
    public function edit_fin($id, Request $request){
      $module_class = Module_class::find($id);

      $module_class -> term = $request -> term;
      $module_class -> name = $request -> name;
      $module_class -> field = $request -> field;
      $module_class -> other_field = $request -> other_field;
      $module_class -> location = $request -> location;
      $module_class -> limit = $request -> limit;
      $module_class -> teacher = $request -> teacher;
      $module_class -> email = $request -> email;
      $module_class -> teacher_intro = $request -> teacher_intro;
      $module_class -> class_hr = $request -> class_hr;
      $module_class -> auth_hr = $request -> auth_hr;
      $module_class -> class_intro = $request -> class_intro;
      $module_class -> goal = $request -> goal;
      $module_class -> claim = $request -> claim;
      $module_class -> other = $request -> other;
      $module_class -> keyword = $request -> keyword;

      $module_class -> account = $request->session()->get('account');

      $module_class->save();
      return redirect('/application');

    }

    public function delete($id){
      $module_class = Module_class::find($id);
      $module_class->delete();

      return redirect('/application');
    }



}
