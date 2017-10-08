@extends('layouts.app')

@section('title', '編輯優異成果')

@section('content')
<div class="container">
  <h2>
    <b></b>
  </h2>
</div>
<br>

<div class="container col-sm-1">
</div>

<div class="container col-sm-10">
  <form class="well form-horizontal" action="{{ asset('/achievement/edit') }}/{{$achievement->id}}" method="post"  id="single_class">
    <fieldset>

      <!-- Form Name -->
      <legend><b>編輯優異成果</b></legend>

      <!-- 此處input name 已更改 -->

      <div class="form-group">
        <label class="col-md-4 control-label">發表學期</label>
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
        <input name="term"  value="{{$achievement->term}}" class="form-control" type="text" required>
          </div>
        </div>
      </div>

      <!-- text req term-->
      <div class="form-group">
        <label class="col-md-4 control-label">申請召集人</label>
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
        <input name="gather_name" class="form-control"  type="text" value="{{$achievement->gather_name}}" required>
              <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
        <input name="gather_grade" class="form-control"  type="text" value="{{$achievement->gather_grade}}" required>

          </div>
          <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
        <input name="gather_email" class="form-control"  type="text" value="{{$achievement->gather_email}}" required>
              <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
        <input name="gather_phone" class="form-control"  type="text" value="{{$achievement->gather_phone}}" required>

          </div>
        </div>
      </div>

      <!-- text req field-->
      <div class="form-group">
        <label class="col-md-4 control-label">社群類別</label>
        <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-tag"></i></span>
            <select class="form-control" id="field" name="field" value="{{$achievement->field}}">
              <option value="同領域(同院、系)" id="field1">同領域(同院、系)</option>
              <option value="跨領域(跨院、校)" id="field2">跨領域(跨院、校)</option>
            </select>
          </div>
        </div>
      </div>

      <!-- text req date-->
      <div class="form-group">
        <label class="col-md-4 control-label">社群成員1</label>
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
        <input name="member1_name" class="form-control"  type="text" value="{{$achievement->member1_name}}" required>
              <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
        <input name="member1_place" class="form-control"  type="text" value="{{$achievement->member1_place}}" required>

          </div>
          <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
        <input name="member1_email" class="form-control"  type="text" value="{{$achievement->member1_email}}" required>
              <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
        <input name="member1_phone" class="form-control"  type="text" value="{{$achievement->member1_phone}}" required>

          </div>
        </div>
      </div>

      <!-- text req date-->
      <div class="form-group">
        <label class="col-md-4 control-label">社群成員1</label>
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
        <input name="member2_name" class="form-control"  type="text" value="{{$achievement->member2_name}}" required>
              <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
        <input name="member2_place" class="form-control"  type="text" value="{{$achievement->member2_place}}" required>

          </div>
          <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
        <input name="member2_email" class="form-control"  type="text" value="{{$achievement->member2_email}}" required>
              <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
        <input name="member2_phone" class="form-control"  type="text" value="{{$achievement->member2_phone}}" required>

          </div>
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-4 control-label">成果主題</label>
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
        <input name="result_topic"  value="{{$achievement->result_topic}}" class="form-control" type="text" required>
          </div>
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-4 control-label">成果介紹</label>
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-info-sign"></i></span>
                <textarea class="form-control full" name="result_intro" placeholder="一、成果內容說明
二、作品附件(含影像、程式、簡報或展演紀錄等，可提供連結在下方)"> {{$achievement->result_intro}}</textarea>
        </div>
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-4 control-label">學習反思與效益</label>
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-info-sign"></i></span>
                <textarea class="form-control full" name="result_achievement" placeholder=""> {{$achievement->result_achievement}}</textarea>
        </div>
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-4 control-label">執行所遇之困難</label>
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-info-sign"></i></span>
                <textarea class="form-control full" name="result_difficulty" placeholder="">{{$achievement->result_difficulty}}</textarea>
        </div>
        </div>
      </div>

      <!-- text no_req keyword-->
      <div class="form-group">
        <label class="col-md-4 control-label">關鍵字</label>
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-filter"></i></span>
        <input name="keyword" value="{{$achievement->keyword}}" class="form-control" type="text">
          </div>
        </div>
      </div>

      <!-- text no_req video-->
      <div class="form-group">
        <label class="col-md-4 control-label">作品附件連結</label>
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-film"></i></span>
            <input name="accociate" value="{{$achievement->accociate}}" class="form-control" type="text">
          </div>
        </div>
      </div>

      <!-- Button submit-->
      <div class="form-group">
        <center>
          {{ csrf_field() }}
          <button type="submit" class="btn btn-success"> 填寫完成 <span class="glyphicon glyphicon-ok"></span></button>
        </center>
      </div>

    </fieldset>
  </form>
</div>
@endsection

@section('css')

@endsection

@section('js')
<script>
$(document).ready(function(){
  var x = $("#field").attr("value");
  for(y=1;y<=2;y++){
    if(x== $("#field"+y).attr("value")){
      $("#field"+y).attr('selected','selected');
    }
  }
});


</script>
@endsection
