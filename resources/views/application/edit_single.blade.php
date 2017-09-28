@extends('layouts.app')

@section('title', '編輯個別課程')

@section('content')
<div class="container">
  <h2>
    <b></b>
  </h2>
</div>

<div class="container col-sm-1">
</div>

<div class="container col-sm-10">
  <form class="well form-horizontal" action="{{asset('/application/edit_single')}}/{{$single_class->id}}" method="post"  id="contact_form">
    <fieldset>
      <!-- Form Name -->
      <legend><b>編輯個別課程</b></legend>

      <!-- 此處input name更改 -->
      <!-- Text term req-->
      <div class="form-group">
        <label class="col-md-4 control-label">開課學期</label>
        <div class="col-md-4 inputGroupContainer">
        <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-glass"></i></span>
        <input  name="term" value="{{$single_class->term}}" placeholder="ex. 106-1" class="form-control"  type="text" required>
          </div>
        </div>
      </div>

      <!-- Text name req-->
      <div class="form-group">
        <label class="col-md-4 control-label">課程名稱</label>
        <div class="col-md-4 inputGroupContainer">
        <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-education"></i></span>
        <input  name="name" value="{{$single_class->name}}" placeholder="課程中文名稱" class="form-control"  type="text" required>
          </div>
        </div>
      </div>

      <!-- text req field-->
      <div class="form-group">
        <label class="col-md-4 control-label">課程領域</label>
        <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-tag"></i></span>
            <select class="form-control" id="field" name="field" value="{{$single_class->field}}">
              <option value="人文與思想" id="field1">人文與思想</option>
              <option value="自然科學" id="field2">自然科學</option>
              <option value="應用科學" id="field3">應用科學</option>
              <option value="社會思潮與現象" id="field4">社會思潮與現象</option>
              <option value="跨域整合" id="field5">跨域整合</option>
              <option value="社會實踐" id="field6">社會實踐</option>
              <option value="創意創業" id="field7">創意創業</option>
              <option value="其他" id="field8">其他</option>
            </select>
          </div>
        </div>
      </div>

      <!-- text no_req other_field-->
      <div class="form-group" id="other_field">
        <label class="col-md-4 control-label">輸入分類</label>
        <div class="col-md-4 inputGroupContainer">
        <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-circle-arrow-right"></i></span>
        <input  name="other_field" placeholder="請輸入其他分類名稱" class="form-control"  type="text" value="{{$single_class->other_field}}">
          </div>
        </div>
      </div>

      <!-- Text location req-->
      <div class="form-group">
        <label class="col-md-4 control-label" >上課地點</label>
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
        <input name="location" value="{{$single_class->location}}" placeholder="請輸入上課地點" class="form-control"  type="text" required>
          </div>
        </div>
      </div>

      <!-- text req date-->
      <div class="form-group">
        <label class="col-md-4 control-label">上課日期</label>
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
        <input name="date" class="form-control" value="{{$single_class->date}}" type="date" required>
          </div>
        </div>
      </div>

      <!-- Text start req-->
      <div class="form-group">
        <label class="col-md-4 control-label">起始時間</label>
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
        <input name="start" value="{{$single_class->start}}" class="form-control"  type="time" required>
          </div>
        </div>
      </div>

      <!-- Text end req-->
      <div class="form-group">
        <label class="col-md-4 control-label">結束時間</label>
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
        <input name="end" value="{{$single_class->end}}"  class="form-control"  type="time" required>
          </div>
        </div>
      </div>

      <!-- Text limit req-->
      <div class="form-group">
        <label class="col-md-4 control-label">人數限制</label>
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-blackboard"></i></span>
        <input name="limit" value="{{$single_class->limit}}" placeholder="ex. 50" class="form-control"  type="text" required>
          </div>
        </div>
      </div>

      <!-- Text teacher req-->
      <div class="form-group">
        <label class="col-md-4 control-label">講師姓名</label>
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
        <input name="teacher" value="{{$single_class->teacher}}" placeholder="請輸入授課講師中文名字" class="form-control" type="text" required>
          </div>
        </div>
      </div>

      <!-- Text email req-->
      <div class="form-group">
        <label class="col-md-4 control-label">聯絡方式</label>
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
        <input name="email" value="{{$single_class->email}}" placeholder="請填入Email或手機號碼" class="form-control" type="text" required>
          </div>
        </div>
      </div>

      <!-- textarea no_req teacher_intro -->
      <div class="form-group">
        <label class="col-md-4 control-label">講師介紹</label>
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-comment"></i></span>
                <textarea class="form-control full" name="teacher_intro" placeholder="講師背景及專長介紹">{{$single_class->teacher_intro}}</textarea>
        </div>
        </div>
      </div>

      <!-- Text class_hr req-->
      <div class="form-group">
        <label class="col-md-4 control-label">課程時數</label>
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-edit"></i></span>
        <input name="class_hr" value="{{$single_class->class_hr}}" placeholder="本課程上課總時數(hr)" class="form-control" type="text" required>
          </div>
        </div>
      </div>

      <!-- Text auth_hr req-->
      <div class="form-group">
        <label class="col-md-4 control-label">認證時數</label>
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-check"></i></span>
        <input name="auth_hr" value="{{$single_class->auth_hr}}" placeholder="修完本課程學生獲得認證時數(hr)" class="form-control" type="text" required>
          </div>
        </div>
      </div>

      <!-- Textarea class_intro no_req -->
      <div class="form-group">
        <label class="col-md-4 control-label" data-toggle="tooltip" title="Hooray!">課程簡介</label>
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-info-sign"></i></span>
                <textarea class="form-control full" name="class_intro" placeholder="課程介紹">{{$single_class->class_intro}}</textarea>
        </div>
        </div>
      </div>

      <!-- text no_req keyword-->
      <div class="form-group">
        <label class="col-md-4 control-label">關鍵字</label>
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-filter"></i></span>
        <input name="keyword" placeholder="關鍵字請以空格隔開" class="form-control" type="text" value="{{$single_class->keyword}}">
          </div>
        </div>
      </div>

      <!-- text no_req video-->
      <div class="form-group">
        <label class="col-md-4 control-label">影音連結</label>
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-film"></i></span>
            <input name="video" placeholder="請輸入課程影音網址" class="form-control" type="text" value="{{$single_class->video}}">
          </div>
        </div>
      </div>

      <!-- Button submit-->
      <div class="form-group">
        <center>
          <!-- 確認更改以後將資料回傳到login上面 顯示 -->

            {{ csrf_field() }}
            <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-ok"></span> 確認更改 </button>

          <a href="{{ url('/application') }}">
            <button type="button" class="btn btn-info">返回 <span class="glyphicon glyphicon-log-out"></span></button>
          </a>
        </center>
      </div>

    </fieldset>
  </form>
</div>
@endsection

@section('css')
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->

<style>
#other_field{
  display: none;
}
</style>
@endsection

@section('js')
<script>
$(document).ready(function(){
  var x = $("#field").attr("value");
  for(y=1;y<=8;y++){
    if(x== $("#field"+y).attr("value")){
      $("#field"+y).attr('selected','selected');
    }
  }

  $('select').change(function(){
    if($('select option:selected').text() === "其他"){
      $('#other_field').show();
    }
    else{
      $('#other_field').hide();
    }
  });

  if($("#field").val() === "其他"){
    $("#other_field").css("display","block");
  }
});


</script>
@endsection
