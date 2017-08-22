@extends('layouts.app')

@section('title', '開課單位審核')

@section('content')
      <div class="panel panel-green">
        <div class="panel-body" style="font-size:20px;"><center>開課單位申請</center></div>
      </div>
      <div class="row">
          <div class="col-sm-4">
            <a href="{{url('/openclass/applied')}}" style="text-decoration:none;color:#fff;"><div class="circle">
                已申請
            </div></a>
          </div>
          <div class="col-sm-4">
            <a href="{{ url('/openclass/apply') }} "style="text-decoration:none;color:#fff;"><div class="circle">
              我要申請
            </div></a>
          </div>
          <div class="col-sm-4" >
            <a href="{{ url('/openclass/classmanage') }}" style="text-decoration:none;color:#fff;"><div class="circle">
              課程管理
            </div></a>
          </div>
      </div>
@endsection

@section('css')
  <style>
      body{
        background-image: url(/bck.jpg);
      }

      .panel-green{
        background-color:#339966;
        margin-top: 2%;
        margin-bottom: 8%;
        color:#fff;
        font-weight: 900;

      }
      .circle {
        width: 300px;
        height:300px;
        background: #ffbb33;
        -moz-border-radius: 50px;
        -webkit-border-radius: 50px;
        border-radius: 50%;
        margin-bottom:10%;
        text-align: center;
        line-height: 300px;
        font-size: 20px;
        font-weight: bold;
        color: #fff;
      }
      .circle:hover{
        background-color: #ffcc66;
      }
      .center {
        position: absolute;
        left: 24%;
        top:45%;

        }


    </style>
@endsection

@section('js')
  <script>

  </script>
@endsection
