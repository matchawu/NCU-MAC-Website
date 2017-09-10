<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fractal_class;

class Fractal_classController extends Controller
{
     public function index(){
        $fractal_class=Fractal_class::all();
        return view('application.fractal');
    }

     public function store(Request $request){

        $fractal_class = new Fractal_class;

        $fractal_class -> term = $request -> term;
        $fractal_class -> name = $request -> name;
        $fractal_class -> code = $request -> code;
        $fractal_class -> field = $request -> field;
        $fractal_class -> other_field = $request -> other_field;
        $fractal_class -> unit = $request -> unit;
        $fractal_class -> location = $request -> location;
        $fractal_class -> start = $request -> start;
        $fractal_class -> end = $request -> end;
        $fractal_class -> date1 = $request -> date1;
        $fractal_class -> date2 = $request -> date2;
        $fractal_class -> date3 = $request -> date3;
        $fractal_class -> date4 = $request -> date4;
        $fractal_class -> date5 = $request -> date5;
        $fractal_class -> date6 = $request -> date6;
        $fractal_class -> limit = $request -> limit;
        $fractal_class -> teacher = $request -> teacher;
        $fractal_class -> email = $request -> email;
        $fractal_class -> teacher_intro = $request -> teacher_intro;
        $fractal_class -> class_hr = $request -> class_hr;
        $fractal_class -> auth_hr = $request -> auth_hr;
        $fractal_class -> class_intro = $request -> class_intro;
        $fractal_class -> comment = $request -> comment;
        $fractal_class -> dateNum = $request -> dateNum;
        $fractal_class -> keyword = $request -> keyword;
        $fractal_class -> video = $request -> video;

        $fractal_class -> account = $request->session()->get('account');

        $fractal_class->save();


        return redirect('/application/finish');
  //    $input = Input::all();
  //    $post = new Post;
  //    $post->title = $input['title'];//方法一
  //    $post->content = Input::get('content');//方法二
  //    $post->save();
        // return Redirect::to('/');
    }

    public function view($id){
      $fractal_class = Fractal_class::find($id);
      return view('application.view_fractal',["fractal_class"=>$fractal_class]);
    }
    public function edit($id){
      $fractal_class = Fractal_class::find($id);
      return view('application.edit_fractal',["fractal_class"=>$fractal_class]);
    }

    public function edit_fin($id,Request $request){
      $fractal_class = Fractal_class::find($id);

      $fractal_class -> term = $request -> term;
      $fractal_class -> name = $request -> name;
      $fractal_class -> code = $request -> code;
      $fractal_class -> field = $request -> field;
      $fractal_class -> other_field = $request -> other_field;
      $fractal_class -> unit = $request -> unit;
      $fractal_class -> location = $request -> location;
      $fractal_class -> start = $request -> start;
      $fractal_class -> end = $request -> end;
      $fractal_class -> date1 = $request -> date1;
      $fractal_class -> date2 = $request -> date2;
      $fractal_class -> date3 = $request -> date3;
      $fractal_class -> date4 = $request -> date4;
      $fractal_class -> date5 = $request -> date5;
      $fractal_class -> date6 = $request -> date6;
      $fractal_class -> limit = $request -> limit;
      $fractal_class -> teacher = $request -> teacher;
      $fractal_class -> email = $request -> email;
      $fractal_class -> teacher_intro = $request -> teacher_intro;
      $fractal_class -> class_hr = $request -> class_hr;
      $fractal_class -> auth_hr = $request -> auth_hr;
      $fractal_class -> class_intro = $request -> class_intro;
      $fractal_class -> comment = $request -> comment;
      $fractal_class -> dateNum = $request -> dateNum;
      $fractal_class -> keyword = $request -> keyword;
      $fractal_class -> video = $request -> video;

      $fractal_class -> account = $request->session()->get('account');

      $fractal_class->save();
      return redirect('/application');
    }
    public function finish(){
        return view('application.finish');
    }

    public function delete($id){
      $fractal_class = Fractal_class::find($id);
      $fractal_class->delete();

      return redirect('/application');
    }



}
