@extends('layouts.app')

@section('title', '優異成果展示')

@section('content')
<div class="container">
  <br>
  <h2>優異成果展示</h2>
  <ul class="nav nav-pills">
    <li class="active"><a id="pill1" class="btn-default btn" data-toggle="pill" href="#all">全部</a></li>
    <li><a id="pill2" class="btn-default btn" data-toggle="pill" href="#search">成果查詢</a></li>
    <!-- <li><a id="pill3" class="btn-info btn" data-toggle="pill" href="#module">模組課程</a></li> -->
    <!-- <li><a id="pill4" class="btn-warning btn" data-toggle="pill" href="#fractal">碎形課程</a></li> -->
  </ul>

  <div class="tab-content">
    <div id="all" class="tab-pane fade in active">
      <h3>全部</h3>
      <h6>點選以查看成果</h6>
      <div class="list-group">
        @foreach ($achievements as $achievement)
        <div class="list-group-item" data-toggle="modal" data-target="#result{{$achievement->id}}">
          {{$achievement->result_topic}}
        </div>

        <div id="result{{$achievement->id}}" class="modal fade" role="dialog">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">成果主題 : {{$achievement->result_topic}}</h4>
              </div>
              <div class="modal-body">
                <p>召集人 :
                {{$achievement->gather_name}}</p>
                <p>系級 :
                {{$achievement->gather_grade}}</p>
                <p>成員 :
                {{$achievement->member1_name}}、{{$achievement->member2_name}}</p>
                <p>社群類別 :
                {{$achievement->field}}</p>
                <p>成果介紹 :
                {{$achievement->result_intro}}</p>
                <p>學習反思與效益 :
                {{$achievement->result_achievement}}</p>
                <p>執行所遇之困難 :
                {{$achievement->result_difficulty}}</p>
                <p>關鍵字 :
                {{$achievement->keyword}}</p>
                <p>作品附件連結 :
                <a href="{{$achievement->accociate}}">{{$achievement->accociate}}</a></p>
              </div>
              @if (Auth::guest())
              <div class="modal-footer">
                <center>
                  <button type="button" class="btn btn-info" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> 關閉</button>
                </center>
              </div>
              @else
              <div class="modal-footer">
                <center>
                  <button type="button" class="btn btn-info" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> 關閉</button>
                  <a href="{{ url('/achievement/edit') }}/{{$achievement->id}}">
                    <button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-pencil"></span> 編輯</button>
                  </a>
                </center>
              </div>
              @endif
            </div>

          </div>
        </div>
        @endforeach
      </div>
    </div>
    
    <div id="search" class="tab-pane fade in ">
      <h3>成果查詢</h3>
      <form>
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search">
          <div class="input-group-btn">
            <button class="btn btn-default" type="submit">
              <i class="glyphicon glyphicon-search"></i>
            </button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection

@section('css')
<style>

</style>
@endsection

@section('js')

@endsection
