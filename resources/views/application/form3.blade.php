@extends('layouts.app')

@section('title', '碎形課程')

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
<legend><b>開設碎形課程</b></legend>

<!-- <div class="alert alert-info">
  <strong>填寫之前請注意 !</strong> 欄位填寫格式請參照 <a href="{{ url('/Introduce') }}" class="alert-link">申請表單填寫說明。</a>
</div> -->

<!-- 此處input name尚未更改 -->
<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">課程名稱</label>
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-education"></i></span>
  <input  name="first_name" placeholder="課程中文名稱" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">課程代號</label>
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-th-list"></i></span>
  <input  name="first_name" placeholder="課程代碼" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">課程類別</label>
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-tag"></i></span>
  <input  name="first_name" placeholder="人文藝術、" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">授課單元</label>
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-book"></i></span>
  <input  name="first_name" placeholder="開放授課之單元或類別" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >上課地點</label>
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="last_name" placeholder="請輸入系館中文名稱及教室號碼" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label">上課時間</label>
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
  <input name="email" placeholder="ex. 星期二 9:00-12:00" class="form-control"  type="text">
    </div>
  </div>
</div>


<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">講師姓名</label>
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="phone" placeholder="請輸入授課講師中文名字" class="form-control" type="text">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">課程時數</label>
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-edit"></i></span>
  <input name="address" placeholder="本課程上課總時數(hr)" class="form-control" type="text">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">認證時數</label>
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-check"></i></span>
  <input name="address" placeholder="修完本課程學生獲得認證時數(hr)" class="form-control" type="text">
    </div>
  </div>
</div>

<!-- Text area -->

<div class="form-group">
  <label class="col-md-4 control-label" data-toggle="tooltip" title="Hooray!">課程簡介</label>
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
          <textarea class="form-control full" name="comment" placeholder="課程介紹"></textarea>
  </div>
  </div>
</div>




<!-- Success message -->
<!-- <div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Thanks for contacting us, we will get back to you shortly.</div> -->

<!-- Button -->
<div class="form-group">
  <!-- <label class="col-md-4 control-label"></label>
  <div class="col-md-4"> -->
  <center>
    <button type="submit" class="btn btn-success"> 送出申請表單<span class="glyphicon glyphicon-send"></span></button>
  </center>
  <!-- </div> -->
</div>

</fieldset>
</form>
</div>
</div>
@endsection

@section('css')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
@endsection

@section('js')
<script>

</script>
@endsection
