<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Achievement;

class AchievementController extends Controller
{
     public function index(){

        $achievements=Achievement::all();
        return view('achievement.index',["achievements"=>$achievements]);
    }

    public function edit($id){
      $achievement = Achievement::find($id);
      return view('achievement.edit',["achievement"=>$achievement]);
    }

    public function edit_fin($id,Request $request){
      $achievement = Achievement::find($id);

      $achievement -> gather_name = $request -> gather_name;
      $achievement -> gather_grade = $request -> gather_grade;
      $achievement -> gather_email = $request -> gather_email;
      $achievement -> gather_phone = $request -> gather_phone;
      $achievement -> field = $request -> field;
      $achievement -> member1_name = $request -> member1_name;
      $achievement -> member1_place = $request -> member1_place;
      $achievement -> member1_email = $request -> member1_email;
      $achievement -> member1_phone = $request -> member1_phone;
      $achievement -> member2_name = $request -> member2_name;
      $achievement -> member2_place = $request -> member2_place;
      $achievement -> member2_email = $request -> member2_email;
      $achievement -> member2_phone = $request -> member2_phone;
      $achievement -> result_topic = $request -> result_topic;
      $achievement -> result_intro = $request -> result_intro;
      $achievement -> result_achievement = $request -> result_achievement;
      $achievement -> result_difficulty = $request -> result_difficulty;
      $achievement -> keyword = $request -> keyword;
      $achievement -> accociate = $request -> accociate;


      // $achievement -> account = $request->session()->get('account');

      $achievement->save();
      return redirect('/achievement');
    }



}
