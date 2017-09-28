<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\appUser;
use App\Module_class;
use App\Single_class;
use App\Fractal_class;
use App\Achievement;


class AppUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $req)
    {
      // $req->session()->flush();
      $sessionChk = $req->session()->get('account');
      if(isset($sessionChk)){
        $loginUser = appUser::where('account',$sessionChk)->first();
        $single_classes =
        Single_class::where('account',$sessionChk)->get();
        $module_classes =
        Module_class::where('account',$sessionChk)->get();
        $fractal_classes =
        Fractal_class::where('account',$sessionChk)->get();
        return view('application.mgt',[
          "user"=>$loginUser,
          "single_classes"=>$single_classes,
          "module_classes"=>$module_classes,
          "fractal_classes"=>$fractal_classes,
        ]);
      }else{
        return view('application.index');
      }
    }

    public function addApplicant(Request $req)
    {
      //$req->session()->flush();
      // $sessionChk = $req->session()->get('account');
      //if(isset($sessionChk)){
        //$loginUser = appUser::where('account',$sessionChk)->first();
        $applicants =
        appUser::all();

        return view('authrize.addClient',[
          "applicants"=>$applicants,
        ]);
      //}else{
      //  return view('authrize.menu');
      //}
    }

    public function login(Request $req)
    {

        $loginUser = appUser::where('account',$req->account)->first();
        if(!isset($loginUser)){
          return view('application.index',["loginhint"=>"無此帳號 ! 請先向教學發展中心申請開課單位帳號。"]);
        }
        if(md5($req->password)==$loginUser->password){
          $single_classes =
          Single_class::where('account',$req->account)->get();
          $module_classes =
          Module_class::where('account',$req->account)->get();
          $fractal_classes =
          Fractal_class::where('account',$req->account)->get();
          $req->session()->put('account', $req->account);
          return view('application.mgt',[
            "user"=>$loginUser,
            "single_classes"=>$single_classes,
            "module_classes"=>$module_classes,
            "fractal_classes"=>$fractal_classes,
          ]);
        }else{
          return view('application.index',["loginhint"=>"帳號或密碼錯誤，請再試一次。"]);
        }
    }
    public function logout(Request $req){
      $req->session()->flush();
      return redirect('/application');
    }

    public function register(Request $req){
      $loginUser = appUser::where('account',$req->account)->first();
      if($loginUser==null){
        $newUser = new appUser;
        $newUser -> unitname = $req -> unitname;
        $newUser -> account = $req -> account;
        $newUser -> password = md5($req->password);
        $newUser -> mail = $req -> mail;
        $newUser -> name = $req -> name;
        $newUser -> phone = $req -> phone;
        $newUser->save();

        $applicants = appUser::all();

        return view('authrize.menu',[
          "hint"=>"輸入成功",
          "applicants"=>$applicants,
          ]);

      }else{
        $applicants = appUser::all();
        return view('authrize.menu',[
          "hint"=>"帳號已被註冊",
          "applicants"=>$applicants,
          ]);
      }

    }
/*gather_name','gather_grade','gather_email','gather_phone','member1_name','member1_place','member1_email','member1_phone','member2_name','member2_place','member2_email','member2_phone','result_topic','result_intro','result_achievement','result_difficulty','keyword','accociate'
    */
     public function storeachievement(Request $request){

        $achievement = new Achievement;

        $achievement -> gather_name = $request -> gather_name;
        $achievement -> gather_grade = $request -> gather_grade;
        $achievement -> gather_email = $request -> gather_email;
        $achievement -> gather_phone = $request -> gather_phone;
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

        $achievement->save();


        return redirect('/authrize');
  //    $input = Input::all();
  //    $post = new Post;
  //    $post->title = $input['title'];//方法一
  //    $post->content = Input::get('content');//方法二
  //    $post->save();
        // return Redirect::to('/');
    }

    public function edit_goto(){
      return view('application.edit_pwd');
    }
    public function edit_pwd(Request $req){
      $sessionChk = $req->session()->get('account');
      $loginUser = appUser::where('account',$sessionChk)->first();
      if(!(md5($req->password)==$loginUser->password)){
        return view('application.edit_pwd',["wrongPwd"=>"密碼錯誤，請再試一次。"]);
      }else if(!($req->passwordNew == $req->passwordChk)){
        return view('application.edit_pwd',["wrongPwd"=>"兩次輸入的密碼不同"]);
      }else{
        $loginUser->password = md5($req->passwordNew);
        $loginUser->save();
        return view('application.edit_pwd',["successPwd"=>"更改成功"]);
      }

      // return view('application.edit_pwd',[
      //   "user"=>$loginUser
      // ]);
      return $loginUser;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function refreshhomepage()
    {
          $single_classes =  Single_class::all();
          $module_classes =  Module_class::all();
          $fractal_classes = Fractal_class::all();
          return view('Homepage.homepage',[
            "single_classes"=>$single_classes,
            "module_classes"=>$module_classes,
            "fractal_classes"=>$fractal_classes,
          ]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function delete($id)
    {
      $applicant = appUser::find($id);
      $applicant->delete();

      return redirect('/authrize/menu');
    }
}
