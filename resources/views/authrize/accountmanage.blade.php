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
  <form class="well form-horizontal" action="{{asset('/authrize/editClient')}}/{{$applicants->id}}" method="post"  id="contact_form">
    <fieldset>
      <!-- Form Name -->
      <legend><b>帳號[{{$applicants->account}}]--資訊修改</b></legend>

      <!-- 此處input name更改 -->
      <!-- Text term req-->



      <div class="form-group">
        <label class="col-md-4 control-label">開課單位</label>
        <div class="col-md-4 inputGroupContainer">
        <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-education"></i></span>
        <input  name="unitname" value="{{$applicants->unitname}}" placeholder="開課單位" class="form-control"  type="text" required>
          </div>
        </div>
      </div>

      

      <!-- Text name req-->
      <div class="form-group">
        <label class="col-md-4 control-label">聯絡信箱</label>
        <div class="col-md-4 inputGroupContainer">
        <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-education"></i></span>
        <input  name="mail" value="{{$applicants->mail}}" placeholder="聯絡信箱" class="form-control"  type="text" required>
          </div>
        </div>
      </div>

      <!-- Text name req-->
      <div class="form-group">
        <label class="col-md-4 control-label">申請人電話</label>
        <div class="col-md-4 inputGroupContainer">
        <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-education"></i></span>
        <input  name="phone" value="{{$applicants->phone}}" placeholder="申請人電話" class="form-control"  type="text" required>
          </div>
        </div>
      </div>

      <!-- Text name req-->
      <div class="form-group">
        <label class="col-md-4 control-label">申請人姓名</label>
        <div class="col-md-4 inputGroupContainer">
        <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-education"></i></span>
        <input  name="name" value="{{$applicants->name}}" placeholder="申請人姓名" class="form-control"  type="text" required>
          </div>
        </div>
      </div>

      

      <!-- Button submit-->
      <div class="form-group">
        <center>
          <!-- 確認更改以後將資料回傳到login上面 顯示 -->

            {{ csrf_field() }}
            <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-ok"></span> 確認更改 </button>

          <a href="{{ url('/authrize/menu/addClient') }}">
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


</script>
@endsection