@extends('layouts.app')

@section('title', '優異成果展示')

@section('content')
<div class="container">
  <br>
  <h2>優異成果展示</h2>
  <ul class="nav nav-pills">
    <li class="active"><a id="pill2" class="btn-default btn" data-toggle="pill" href="#search">成果查詢</a></li>
    <li><a id="pill1" class="btn-default btn" data-toggle="pill" href="#all">全部</a></li>
    <!-- <li><a id="pill3" class="btn-info btn" data-toggle="pill" href="#module">模組課程</a></li> -->
    <!-- <li><a id="pill4" class="btn-warning btn" data-toggle="pill" href="#fractal">碎形課程</a></li> -->
  </ul>

  <div class="tab-content">
    @if(isset($achievements))
    <div id="all" class="tab-pane fade in ">
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
                <p>發表學期 :
                {{$achievement->term}}</p>
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
    @else
    <div id="all" class="tab-pane fade in ">
      <h3>目前無成果可顯示</h3>
    </div>
    @endif

    <div id="search" class="tab-pane fade in active">
      <h3>成果查詢</h3>
      <form class="form-horizontal" action="{{ url('achievement/search') }}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
          <label class="control-label col-sm-2" for="email">發表學期:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="term" placeholder="ex.106-1" name="term">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2">召集人:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="gather_name" placeholder="請輸入召集人姓名" name="gather_name">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2">社群類別:</label>
          <div class="col-sm-10">
            <select name="field" id="field">
              <option value="同領域(同院、系)" id="field1">同領域(同院、系)</option>
              <option value="跨領域(跨院、校)" id="field2">跨領域(跨院、校)</option>
						</select>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2">成果主題:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="result_topic" placeholder="" name="result_topic">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2">關鍵字:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="keyword" placeholder="" name="keyword">
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">查詢</button>
          </div>
        </div>
      </form>

        <div class="panel-group" id="accordion">
          @if(isset($search_achievements))
            @if($search_achievements->isEmpty())
              <strong>查無結果!</strong>
            @else
            @foreach ($search_achievements as $search_achievement)
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#{{$search_achievement->id}}">{{$search_achievement->result_topic}}</a>
                  </h4>
                </div>
                <div id="{{$search_achievement->id}}" class="panel-collapse collapse in">
                  <div class="panel-body">
                    <p>發表學期 : {{$search_achievement->term}}</p>
                    <p>召集人: {{$search_achievement->gather_name}}</p>
                    <p>召集人系級 : {{$search_achievement->gather_grade}}</p>
                    <p>社群類別 : {{$search_achievement->field}}</p>
                    <p>成員 : {{$search_achievement->member1_name}} 擔任 {{$search_achievement->member1_place}}</p>
                    <p>成員 : {{$search_achievement->member2_name}} 擔任 {{$search_achievement->member2_place}}</p>
                    <!-- <p>成果主題 : {{$search_achievement->result_topic}}</p> -->
                    <p>成果介紹 : {{$search_achievement->result_intro}}</p>
                    <p>學習反思與效益 : {{$search_achievement->result_achievement}}</p>
                    <p>執行所遇之困難 : {{$search_achievement->result_difficulty}}</p>
                    <p>關鍵字 : {{$search_achievement->keyword}}</p>
                    <p>作品附件連結 :
                      <a href="{{$search_achievement->accociate}}">
                        {{$search_achievement->accociate}}
                      </a>
                    </p>
                  </div>
                  <div class="panel-footer">
                    <h6>成果上傳時間 : {{$search_achievement->created_at}}</h6>
                  </div>
                </div>
              </div>
            @endforeach
            @endif
          @endif
          </div>

    </div>
  </div>
</div>
@endsection

@section('css')

@endsection

@section('js')

@endsection
