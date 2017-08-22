@extends('layouts.app')

@section('title', '審核單位分流')

@section('content')
  <br>
     <br>
     <br>
     <br>
     <br>
      <div class="panel panel-green">
     
        <div class="panel-body" style="font-size:25px;"><center>審核單位申請</center></div>
      </div>
      <div class="row">
          <div class="col-sm-3">
            <a href="{{url('/check/ckeckclass')}}">
                <img src="{{asset('/img/check1.jpg')}}" class="img-responsive imgClass" alt="signupclass">
           </a>
          </div>
          <div class="col-sm-3">
            <a href="{{ url('/check/checkstudents') }} ">
                <img src="{{asset('/img/check2.jpg')}}" class="img-responsive imgClass" alt="signupclass">
           </a>
            </div>
          <div class="col-sm-3" >
            <a href="{{ url('/check/checkprojects') }}" >
              <img src="{{asset('/img/check3.jpg')}}" class="img-responsive  imgClass"  alt="signupclass">
            </a>
          </div>
          <div class="col-sm-3" >
            <a href="{{ url('/check/register') }}" >
              <img src="{{asset('/img/check3.jpg')}}" class="img-responsive  imgClass"  alt="signupclass">
              <p style="text-align: center">新增帳號</p>
            </a>
          </div>
      </div>
@endsection

@section('css')
  <style>
    .divCenter{
      position: absolute;
      top: 25vh;
    }
    .imgClass{
       border-radius: 8px;
    }
    .imgClass:hover{
      box-shadow: 5px 5px 5px grey;
      width: 98%;
      height: 98%;
    }
    .title{
      text-align: center;
    }


    </style>
@endsection

@section('js')
  <script>

  </script>
@endsection
