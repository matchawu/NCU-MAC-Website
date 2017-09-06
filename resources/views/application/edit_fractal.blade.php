@extends('layouts.app')

@section('title', '編輯碎形課程')

@section('content')
<div class="container">
  <h2>
    <b></b>
  </h2>
</div>

<div class="container col-sm-1">
</div>

<div class="container col-sm-10">
  <form class="well form-horizontal" action="{{asset('/application/edit_fractal')}}/{{$fractal_class->id}}" method="post"  id="contact_form">
    <fieldset>
      <!-- Form Name -->
      <legend><b>編輯碎形課程</b></legend>

      <!-- 此處input name更改 -->
      <!-- Text term req-->
      <div class="form-group">
        <label class="col-md-4 control-label">開課學期</label>
        <div class="col-md-4 inputGroupContainer">
        <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-glass"></i></span>
        <input  name="term" placeholder="ex. 106-1" value="{{$fractal_class->term}}" class="form-control"  type="text" required>
          </div>
        </div>
      </div>

      <!-- Text name req-->
      <div class="form-group">
        <label class="col-md-4 control-label">課程名稱</label>
        <div class="col-md-4 inputGroupContainer">
        <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-education"></i></span>
        <input  name="name" placeholder="課程中文名稱" value="{{$fractal_class->name}}" class="form-control"  type="text" required>
          </div>
        </div>
      </div>

      <!-- Text code req-->
      <div class="form-group">
        <label class="col-md-4 control-label">課程代號</label>
        <div class="col-md-4 inputGroupContainer">
        <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-th-list"></i></span>
        <input  name="code" placeholder="課程代碼" value="{{$fractal_class->code}}" class="form-control"  type="text" required>
          </div>
        </div>
      </div>

      <!-- text req field-->
      <div class="form-group">
        <label class="col-md-4 control-label">課程領域</label>
        <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-tag"></i></span>
            <select class="form-control" id="field" name="field" value="{{$fractal_class->field}}">
              <option value="人文藝術" id="field1">人文藝術</option>
              <option value="自然科學" id="field2">自然科學</option>
              <option value="社會思潮" id="field3">社會思潮</option>
              <option value="應用科學" id="field4">應用科學</option>
            </select>
          </div>
        </div>
      </div>

      <!-- Text unit rerq-->
      <div class="form-group">
        <label class="col-md-4 control-label">授課單元</label>
        <div class="col-md-4 inputGroupContainer">
        <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-book"></i></span>
        <input  name="unit" placeholder="開放授課之單元或類別" value="{{$fractal_class->unit}}" class="form-control"  type="text" required>
          </div>
        </div>
      </div>

      <!-- Text location req-->
      <div class="form-group">
        <label class="col-md-4 control-label" >上課地點</label>
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
        <input name="location" placeholder="請輸入上課地點" value="{{$fractal_class->location}}" class="form-control"  type="text" required>
          </div>
        </div>
      </div>

      <!-- Text start req-->
      <div class="form-group">
        <label class="col-md-4 control-label">開始時間</label>
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
        <input name="start" value="{{$fractal_class->start}}" class="form-control"  type="time" required>
          </div>
        </div>
      </div>

      <!-- Text end req-->
      <div class="form-group">
        <label class="col-md-4 control-label">結束時間</label>
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
        <input name="end" value="{{$fractal_class->end}}" class="form-control"  type="time" required>
          </div>
        </div>
      </div>

      <!-- Text date1 req-->
      <div class="form-group" id="date1">
        <label class="col-md-4 control-label">第一堂課</label>
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
              <input name="date1" value="{{$fractal_class->date1}}" class="form-control"  type="date" id="datein1" required>
              <div class="input-group-btn">
                <button class="btn btn-info" id="add_date" type="button">
                  <i class="glyphicon glyphicon-plus"></i>
                </button>
              </div>
              <div class="input-group-btn">
                <button class="btn btn-danger" id="min_date" type="button">
                  <i class="glyphicon glyphicon-minus"></i>
                </button>
              </div>
          </div>
        </div>
      </div>

      <!-- Text date2 req-->
      <div class="form-group" id="date2">
        <label class="col-md-4 control-label">第二堂課</label>
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
              <input name="date2" value="{{$fractal_class->date2}}" class="form-control"  type="date" id="datein2">
          </div>
        </div>
      </div>

      <!-- Text date3 req-->
      <div class="form-group" id="date3">
        <label class="col-md-4 control-label">第三堂課</label>
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
            <input name="date3" value="{{$fractal_class->date3}}" class="form-control"  type="date" id="datein3">
          </div>
        </div>
      </div>

      <!-- Text date4 req-->
      <div class="form-group" id="date4">
        <label class="col-md-4 control-label">第四堂課</label>
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
            <input name="date4" value="{{$fractal_class->date4}}" class="form-control"  type="date" id="datein4">
          </div>
        </div>
      </div>

      <!-- Text date5 req-->
      <div class="form-group" id="date5">
        <label class="col-md-4 control-label">第五堂課</label>
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
            <input name="date5" value="{{$fractal_class->date5}}" class="form-control"  type="date" id="datein5">
          </div>
        </div>
      </div>

      <!-- Text date6 req-->
      <div class="form-group" id="date6">
        <label class="col-md-4 control-label">第六堂課</label>
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
            <input name="date6" value="{{$fractal_class->date6}}" class="form-control"  type="date" id="datein6">
          </div>
        </div>
      </div>

      <!-- Text limit req-->
      <div class="form-group">
        <label class="col-md-4 control-label">人數限制</label>
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-blackboard"></i></span>
        <input name="limit" placeholder="ex. 50" value="{{$fractal_class->limit}}" class="form-control"  type="text" required>
          </div>
        </div>
      </div>

      <!-- Text teacher req-->
      <div class="form-group">
        <label class="col-md-4 control-label">講師姓名</label>
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
        <input name="teacher" placeholder="請輸入授課講師中文名字" value="{{$fractal_class->teacher}}" class="form-control" type="text" required>
          </div>
        </div>
      </div>

      <!-- Text email req-->
      <div class="form-group">
        <label class="col-md-4 control-label">聯絡方式</label>
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
        <input name="email" placeholder="請填入Email或手機號碼" value="{{$fractal_class->email}}" class="form-control" type="text" required>
          </div>
        </div>
      </div>

      <!-- Textarea no_req teacher_intro -->
      <div class="form-group">
        <label class="col-md-4 control-label">講師介紹</label>
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-comment"></i></span>
                <textarea class="form-control full" name="teacher_intro" placeholder="講師背景及專長介紹"> {{$fractal_class->teacher_intro}}</textarea>
        </div>
        </div>
      </div>

      <!-- Text class_hr req-->
      <div class="form-group">
        <label class="col-md-4 control-label">課程時數</label>
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-edit"></i></span>
        <input name="class_hr" placeholder="本課程上課總時數(hr)" value="{{$fractal_class->class_hr}}" class="form-control" type="text" required>
          </div>
        </div>
      </div>

      <!-- Text auth_hr req-->
      <div class="form-group">
        <label class="col-md-4 control-label">認證時數</label>
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-check"></i></span>
        <input name="auth_hr" placeholder="修完本課程學生獲得認證時數(hr)" value="{{$fractal_class->auth_hr}}" class="form-control" type="text" required>
          </div>
        </div>
      </div>

      <!-- Textarea no_req class_intro -->
      <div class="form-group">
        <label class="col-md-4 control-label">課程簡介</label>
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-info-sign"></i></span>
                <textarea class="form-control full" name="class_intro" placeholder="課程介紹"> {{$fractal_class->class_intro}}</textarea>
        </div>
        </div>
      </div>

      <!-- Textarea no_req comment -->
      <div class="form-group">
        <label class="col-md-4 control-label">課程備註</label>
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-exclamation-sign"></i></span>
                <textarea class="form-control full" name="comment" placeholder="單一課程注意事項或是變動"> {{$fractal_class->comment}}</textarea>
        </div>
        </div>
      </div>

      <!-- Button submit-->
      <div class="form-group">
        <center>
          {{ csrf_field() }}
          <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-ok"></span> 確認更改 </button>
          <input type="hidden" name="dateNum" id="dateNum" value="{{$fractal_class->dateNum}}">
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
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>
#date1,#date2,#date3,#date4,#date5,#date6 {
  display:none;
}
</style>
@endsection

@section('js')
<script>
var i = $("#dateNum").attr("value");
var x = $("#field").attr("value");
$(document).ready(function(){
  for(y=1;y<=4;y++){
    if(x== $("#field"+y).attr("value")){
      $("#field"+y).attr('selected','selected');
    }
   }

    for(j=1; j<=i; j++){
      $("#date"+j).css("display","block");
    }

    $("#add_date").click(function(){
    	if(i<7){
          i++;
        	$("#date"+i).css("display", "block");
          $("#dateNum").attr("value",i);
        }
    });
    $("#min_date").click(function(){
    	if(i>1){
        	$("#date"+i).css("display", "none");
          $("#datein"+i).val("");
          i--;
          $("#dateNum").attr("value",i);
        }
    });
});
</script>
@endsection
