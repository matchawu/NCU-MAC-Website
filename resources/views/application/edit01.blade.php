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
  <form class="well form-horizontal" action=" " method="post"  id="contact_form">
    <fieldset>
      <!-- Form Name -->
      <legend><b>編輯個別課程</b></legend>

      <!-- 此處input name尚未更改 -->
      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label">開課學期</label>
        <div class="col-md-4 inputGroupContainer">
        <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-glass"></i></span>
        <input  name="first_name" value="106-2" placeholder="ex. 106-1" class="form-control"  type="text">
          </div>
        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label">課程名稱</label>
        <div class="col-md-4 inputGroupContainer">
        <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-education"></i></span>
        <input  name="first_name" value="python" placeholder="課程中文名稱" class="form-control"  type="text">
          </div>
        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label">課程領域</label>
        <div class="col-md-4 inputGroupContainer">
        <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-tag"></i></span>
        <input  name="first_name" value="程式設計" placeholder="人文藝術、" class="form-control"  type="text">
          </div>
        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" >上課地點</label>
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
        <input name="last_name" value="綜教館204" placeholder="請輸入上課地點" class="form-control"  type="text">
          </div>
        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label">上課時間</label>
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
        <input name="email" value="9/20 5:00-7:00" placeholder="ex. 9/17 9:00-12:00" class="form-control"  type="text">
          </div>
        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label">人數限制</label>
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-blackboard"></i></span>
        <input name="email" value="50" placeholder="ex. 50" class="form-control"  type="text">
          </div>
        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label">講師姓名</label>
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
        <input name="phone" value="承師傅" placeholder="請輸入授課講師中文名字" class="form-control" type="text">
          </div>
        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label">聯絡方式</label>
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
        <input name="phone" value="0919530742" placeholder="請填入Email或手機號碼" class="form-control" type="text">
          </div>
        </div>
      </div>

      <!-- Text area -->
      <div class="form-group">
        <label class="col-md-4 control-label">講師介紹</label>
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-comment"></i></span>
                <textarea class="form-control full" name="comment" placeholder="講師背景及專長介紹">承師傅就是就是熊孩子</textarea>
        </div>
        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label">課程時數</label>
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-edit"></i></span>
        <input name="address" value="2" placeholder="本課程上課總時數(hr)" class="form-control" type="text">
          </div>
        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label">認證時數</label>
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-check"></i></span>
        <input name="address" value="2" placeholder="修完本課程學生獲得認證時數(hr)" class="form-control" type="text">
          </div>
        </div>
      </div>

      <!-- Text area -->
      <div class="form-group">
        <label class="col-md-4 control-label" data-toggle="tooltip" title="Hooray!">課程簡介</label>
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-info-sign"></i></span>
                <textarea class="form-control full" name="comment" placeholder="課程介紹">你好你好今天天氣真好</textarea>
        </div>
        </div>
      </div>

      <!-- Button submit-->
      <div class="form-group">
        <center>
          <!-- 確認更改以後將資料回傳到login上面 顯示 -->
          <a href="{{ url('/application/login') }}">
            <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-ok"></span> 確認更改 </button>
          </a>
          <a href="{{ url('/application/login') }}">
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

<script>

</script>
@endsection

@section('js')
<script>

</script>
@endsection
