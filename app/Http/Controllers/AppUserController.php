<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\appUser;
use App\Module_class;
use App\Single_class;
use App\Fractal_class;


class AppUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $req)
    {
      //$req->session()->flush();
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
        
        return view('authrize.menu',[
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
