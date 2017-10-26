<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\appUser;
use App\Module_class;
use App\Single_class;
use App\Fractal_class;
use App\Achievement;
use App\News;
use Mail;


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
      $loginMail = appUser::where('mail',$req->mail)->first();

      if($loginUser==null){
        if($loginMail==null){
          $newUser = new appUser;
          $newUser -> unitname = $req -> unitname;
          $newUser -> account = $req -> account;
          $newUser -> password = md5($req->account);
          $newUser -> mail = $req -> mail;
          $newUser -> name = $req -> name;
          $newUser -> phone = $req -> phone;
          $newUser->save();

          $applicants = appUser::all();

          return view('authrize.addClient',[
            "hint"=>"輸入成功",
            "applicants"=>$applicants,
            ]);
        }
        else{
          $applicants = appUser::all();
          return view('authrize.addClient',[
            "hint"=>"Email已被註冊!",
            "applicants"=>$applicants,
            ]);
        }


      }else{
        $applicants = appUser::all();
        return view('authrize.addClient',[
          "hint"=>"帳號已被註冊",
          "applicants"=>$applicants,
          ]);
      }

    }
/*gather_name','gather_grade','gather_email','gather_phone','member1_name','member1_place','member1_email','member1_phone','member2_name','member2_place','member2_email','member2_phone','result_topic','result_intro','result_achievement','result_difficulty','keyword','accociate'
    */
     public function storeachievement(Request $request){

        $achievement = new Achievement;

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

        $achievement->save();


        return redirect('/authrize/menu');
  //    $input = Input::all();
  //    $post = new Post;
  //    $post->title = $input['title'];//方法一
  //    $post->content = Input::get('content');//方法二
  //    $post->save();
        // return Redirect::to('/');
    }

    public function sentMailTo(Request $request){
       $id_len = 6;//字串長度
       $id = '';
       $word = 'abcdefghijkmnpqrstuvwxyz23456789';//字典檔 你可以將 數字 0 1 及字母 O L 排除
       $len = strlen($word);//取得字典檔長度

       for($i = 0; $i < $id_len; $i++){ //總共取 幾次
           $id .= $word[rand() % $len];//隨機取得一個字元
       }

       $appNeedChg = appUser::find($request-> id);
       $appNeedChg-> password = md5($id);
       $appNeedChg->save();
       $data = [
        'name' => 'Test',
        'password' => $id
      ];
    $data2 = array('email' => $request -> mail);

        Mail::send('email.welcome', $data, function($message) use ($data2){
        $message->to( $data2['email'])->subject('微學分郵件');
        });

        $applicants = appUser::all();
        return view('authrize.addClient',[
          "applicants"=>$applicants,
        ]);
    }

    public function editClient($id){
      $applicants = appUser::find($id);
      return view('authrize.accountmanage',["applicants"=>$applicants]);
    }

    public function edit_fin($id,Request $request){
      $appUser = appUser::find($id);
      // return $request-> name;
      $appUser -> unitname = $request -> unitname;
      $appUser -> mail = $request -> mail;
      $appUser -> phone = $request -> phone;
      $appUser -> name = $request -> name;
      


      $appUser->save();
      
      return redirect('/authrize/menu/addClient');
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
          $news = News::all();
          return view('Homepage.homepage',[
            "single_classes"=>$single_classes,
            "module_classes"=>$module_classes,
            "fractal_classes"=>$fractal_classes,
            "news"=>$news,
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
