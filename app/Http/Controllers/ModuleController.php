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
        $module -> time = $request -> time;
        $module -> teacher = $request -> teacher;
        $module -> unit = $request -> unit;
        $module -> detail = $request -> detail;
        $module -> comment = $request -> comment;

        $module->save();


        return redirect('/application/module');
  //    $input = Input::all();
  //    $post = new Post;
  //    $post->title = $input['title'];//方法一
  //    $post->content = Input::get('content');//方法二
  //    $post->save();
        // return Redirect::to('/');
    }





}
