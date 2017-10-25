<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Achievement;

class AchievementController extends Controller
{
     public function index(){

        $achievements=Achievement::all();
        return view('achievement.achievement',["achievements"=>$achievements]);
    }

    public function search(Request $request){
      $term=$request->term;
      $gather_name=$request->gather_name;
      $field=$request->field;
      $result_topic=$request->result_topic;
      $keyword=$request->keyword;


      if($term!=null){
        if($gather_name!=null){
          if($result_topic!==null){
            if($keyword!=null){
              $search_achievement=Achievement::where('field','=',$field)
                                             ->where('keyword','like','%'.$keyword.'%')
                                             ->where('result_topic','like','%'.$result_topic.'%')
                                             ->where('gather_name','like','%'.$gather_name.'%')
                                             ->where('term','=',$term)
                                             ->get();
            }else{
              //有 term gather_name result_topic field 沒有keyword
              $search_achievement=Achievement::where('field','=',$field)
                                             ->where('result_topic','like','%'.$result_topic.'%')
                                             ->where('gather_name','like','%'.$gather_name.'%')
                                             ->where('term','=',$term)
                                             ->get();
            }
          }else{
            //有 term gather_name field 沒有result_topic 不確定有沒有 keyword
            $search_achievement=Achievement::where('field','=',$field)
                                           ->where('gather_name','like','%'.$gather_name.'%')
                                           ->where('term','=',$term)
                                           ->get();
            if($keyword!=null){
              //有keyword
              $search_achievement=Achievement::where('keyword','like','%'.$keyword.'%')
                                             ->get();
            }
          }
        }else{
          //沒有gather_name 有term field 不確定有沒有 result_topic keyword
          $search_achievement=Achievement::where('term','=',$term)
                                         ->where('field','=',$field)
                                         ->get();
          if($result_topic!=null){
            //有result_topic
            $search_achievement=Achievement::where('result_topic','like','%'.$result_topic.'%')
                                           ->get();
            if($keyword!=null){
              //有result_topic 也有 keyword
              $search_achievement=Achievement::where('keyword','like','%'.$keyword.'%')
                                             ->get();
            }else{
              //有result_topic 沒有keyword
            }
          }else{
            if($keyword!=null){
              //沒有result_topic 有keyword
              $search_achievement=Achievement::where('keyword','like','%'.$keyword.'%')
                                             ->get();
            }else{
              //都沒有 keyword result_topic
            }
          }

        }
      }else{
        //沒有 term 有field 不確定有沒有 result_topic keyword gather_name
        $search_achievement=Achievement::where('field','=',$field)
                                       ->get();
        if($result_topic!=null){
          //有 result_topic
          $search_achievement=Achievement::where('result_topic','like','%'.$result_topic.'%')
                                         ->get();

        }else{
          //沒有result_topic
          if($keyword!=null){
            //沒有result_topic 有keyword
            $search_achievement=Achievement::where('keyword','like','%'.$keyword.'%')
                                           ->get();
            if($gather_name!=null){
              //沒有result_topic 有keyword gather_name
              $search_achievement=Achievement::where('gather_name','like','%'.$gather_name.'%')
                                             ->get();
            }else{
              //沒有result_topic 有keyword沒有gather_name
            }
          }else{
            //沒有result_topic 也沒有keyword
            if($gather_name!=null){
              //沒有result_topic keyword 但是有gaher_name
              $search_achievement=Achievement::where('gather_name','like','%'.$gather_name.'%')
                                             ->get();
            }else{
              //沒有 result_topic keyword gather_name
            }
          }
        }
            }

      $achievements=Achievement::all();

      // return $search_achievement;
      return view('achievement.achievement',[
        'search_achievements'=>$search_achievement,
        'achievements'=>$achievements
      ]);
    }

    public function edit($id){
      $achievement = Achievement::find($id);
      return view('achievement.edit',["achievement"=>$achievement]);
    }

    public function edit_fin($id,Request $request){
      $achievement = Achievement::find($id);

      $achievement -> term = $request -> term;
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
