@extends('layouts.app')

@section('title', '模組課程')

@section('content')
<div class="container">
  <h2>
    <b></b>
  </h2>
</div>
<div class="container">
    <form class="well form-horizontal" action=" " method="post"  id="contact_form">
<fieldset>

<!-- Form Name -->
<legend><b>組長申請成發</b></legend>

<div class="alert alert-info">
  <strong>填寫之前請注意 !</strong> 欄位填寫格式請參照 <a href="{{ url('/Introduce') }}" class="alert-link">申請表單填寫說明。</a>
</div>

<!-- 此處input name尚未更改 -->
<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">組長姓名</label>
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="first_name" placeholder="中文姓名" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">參與成發組員名稱</label>
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="first_name" placeholder="中文姓名" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >系所/職稱</label>
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="last_name" placeholder="系所/職稱" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->
       <div class="form-group">
  <label class="col-md-4 control-label">電子郵件</label>
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input name="email" placeholder="電子郵件地址" class="form-control"  type="text">
    </div>
  </div>
</div>


<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">聯絡電話/手機</label>
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
  <input name="phone" placeholder="09xx-xxx-xxx" class="form-control" type="text">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">成果主題</label>
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
  <input name="address" placeholder="主題名稱" class="form-control" type="text">
    </div>
  </div>
</div>

<!-- Text area -->

<div class="form-group">
  <label class="col-md-4 control-label" data-toggle="tooltip" title="Hooray!">成果介紹</label>
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
          <textarea class="form-control full" name="comment" placeholder="至多500字，成果內容說明、作品附件請提供連結"></textarea>
  </div>
  </div>
</div>

<!-- Text area -->

<div class="form-group">
  <label class="col-md-4 control-label">學習反思與效益</label>
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
          <textarea class="form-control full" name="comment" placeholder="至多200字"></textarea>
  </div>
  </div>
</div>

<!-- Text area -->

<div class="form-group">
  <label class="col-md-4 control-label">執行所遇之困難與改善建議</label>
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
          <textarea class="form-control full" name="comment" placeholder="至多100字"></textarea>
  </div>
  </div>
</div>

<!-- 簽名的地方 -->
<div class="form-group">
  <label class="col-md-4 control-label" for="inputlg">教學發展中心審查</label>
  <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-ok-sign"></i></span>
      <input class="form-control input-lg" id="inputlg" type="text">
    </div>
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="inputlg">教務長審查</label>
  <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-ok-sign"></i></span>
      <input class="form-control input-lg" id="inputlg" type="text">
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
    <button type="submit" class="btn btn-primary" >送出申請表單<span class="glyphicon glyphicon-send"></span></button>
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
