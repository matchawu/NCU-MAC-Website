@extends('layouts.app')

@section('title', '課程管理')

@section('content')
      <div class="panel panel-green">
        <div class="panel-body" style="font-size:20px;"><center>課程管理</center></div>
      </div>
      <div class="rows" >
        <div class="col-sm-12">
          <div class="panel panel-gray">
            <a href="{{ url('/openclass/classmanage/class') }}"><div class="panel-heading bottom-line" >JAVA基礎</div></a>
            <a><div class="panel-heading bottom-line" >作業系統</div></a>
            <a><div class="panel-heading bottom-line" >全球環境變遷</div></a>
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
        .panel-gray{
          background-color:#fff;
          color: #0066cc;
          font-weight: 600;
        }

        .bottom-line{
          border-bottom: 1px solid #d9d9d9;
        }
  </style>
@endsection

@section('js')
    <script>

    </script>
@endsection
