@extends('layouts.app')

@section('title', '課程')

@section('content')
      <div class="panel panel-green">
        <div class="panel-body" style="font-size:20px;"><center>課程管理-JAVA基礎</center></div>
      </div>
      <div class="rows" >
        <div class="col-md-2" style="background-color:#fff;border-radius:5%;padding:0px;">
          <ul class="nav nav-pills nav-stacked ">
            <li class="active"><a data-toggle="tab" href="#home">公告</a></li>
            <li><a data-toggle="tab" href="#menu1">文件</a></li>
            <li><a data-toggle="tab" href="#menu2">成績</a></li>
            <li><a data-toggle="tab" href="#menu3">評語</a></li>
          </ul>
        </div>
        <div class="col-md-10" >
          <div class="tab-content" style="background-color:#fff;">
            <div id="home" class="tab-pane fade in active">
                <div class="panel-heading panel-blue">公告</div>
                <div class="panel-body">Panel Content</div>
            </div>
            <div id="menu1" class="tab-pane fade">
              <div class="panel-heading panel-blue">文件</div>
              <div class="panel-body">Panel Content</div>
            </div>
            <div id="menu2" class="tab-pane fade">
              <div class="panel-heading panel-blue">成績</div>
              <div class="panel-body">Panel Content</div>
            </div>
            <div id="menu3" class="tab-pane fade">
              <div class="panel-heading panel-blue">評語</div>
              <div class="panel-body">Panel Content</div>
            </div>
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
  .panel-blue{
    background-color:#337ab7;
    color:#fff;
  }
</style>
@endsection

@section('js')
<script>

</script>
@endsection
