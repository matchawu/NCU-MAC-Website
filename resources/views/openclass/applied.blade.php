@extends('layouts.app')

@section('title', '已申請課程')

@section('content')
      <div class="panel panel-green">
        <div class="panel-body" style="font-size:20px;"><center>已申請</center></div>
      </div>
      <div class="rows" >
        <div class="col-sm-12">
          <div class="panel panel-success">
            <div class="panel-heading">已同意課程</div>
            <div class="panel-body">內容</div>
          </div>
        </div>
        <div class="col-sm-12">
          <div class="panel panel-danger">
            <div class="panel-heading">已駁回課程</div>
            <div class="panel-body">內容</div>
          </div>
        </div>
        <div class="col-sm-12">
          <div class="panel panel-primary">
            <div class="panel-heading">待審核課程</div>
            <div class="panel-body">內容</div>
          </div>
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
              margin-bottom: 2%;
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
