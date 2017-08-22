<?php

namespace App\Http\Controllers;

use App\Req;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ReqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $req = new Req;
        $req->applicant_name = $request->applicant_name;
        $req->applicant_department = $request->applicant_department;
        $req->applicant_phone = $request->applicant_phone;
        $req->usage_course = $request->usage_course;
        $req->usage_name = $request->usage_name;
        $req->usage_department = $request->usage_department;
        $req->usage_people_num = $request->usage_people_num;
        $req->usage_classroom = $request->usage_classroom;
        $req->usage_software = $request->usage_software;
        $req->type = $request->type;
        $req->year_num = $request->year_num;
        $req->year_semester = $request->year_semester;
        $req->date_start = $request->date_start;
        $req->date_finish = $request->date_finish;
        $req->time = implode(",",$request->time);
        $req->other_time = $request->other_time;
        $req->confirmed = false;
        $req->ended = false;
        $req->query_code = strtoupper(substr(md5(uniqid(rand(), true)),0,5));

        $req->save();

        return $req;
    }

    public function imgUpload(Request $req,$id){
      $foundReq = Req::find($id);
      $imageName =  time().'.'.$req->image->getClientOriginalExtension();
      $req->image->move(public_path('img/chkimg/'),$imageName);
      $foundReq->img_url = $imageName;
      $foundReq->save();
      return $imageName;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Req  $req
     * @return \Illuminate\Http\Response
     */
    public function show(Request $req)
    {
        $foundReq = DB::table('reqs')->where('query_code', $_GET['query_code'])->first();
        if (count($foundReq)) {
          return response()->json($foundReq);
        }
        return "fail";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Req  $req
     * @return \Illuminate\Http\Response
     */
    public function edit(Req $req)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Req  $req
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $req = Req::find($id);
        $req->applicant_name = $request->applicant_name;
        $req->applicant_department = $request->applicant_department;
        $req->applicant_phone = $request->applicant_phone;
        $req->usage_course = $request->usage_course;
        $req->usage_name = $request->usage_name;
        $req->usage_department = $request->usage_department;
        $req->usage_people_num = $request->usage_people_num;
        $req->usage_classroom = $request->usage_classroom;
        $req->usage_software = $request->usage_software;
        $req->type = $request->type;
        $req->year_num = $request->year_num;
        $req->year_semester = $request->year_semester;
        $req->date_start = $request->date_start;
        $req->date_finish = $request->date_finish;
        $req->time = implode(",",$request->time);
        $req->other_time = $request->other_time;

        $req->save();
        return $req;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Req  $req
     * @return \Illuminate\Http\Response
     */
    public function destroy(Req $req, $id)
    {
        $req = Req::find($id);
        $req->delete();
        return 'success';
    }
}
