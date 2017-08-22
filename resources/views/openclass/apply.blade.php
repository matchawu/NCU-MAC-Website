@extends('layouts.app')

@section('title', '已申請課程')

@section('content')
      <div class="panel panel-green">
        <div class="panel-body" style="font-size:20px;"><center>申請表單</center></div>
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
