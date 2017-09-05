@extends('layouts.app')

@section('title', '編輯密碼')

@section('content')
<div class="container">
  <h2>
    <b></b>
  </h2>
</div>

<div class="container col-sm-2">
</div>

<div class="container col-sm-8">
  <form class="well form-horizontal" action="{{asset('/application/edit_pwd')}}" method="post"  id="edit_pwd_form">
    <fieldset>

    <!-- Form Name -->
    <legend><b>編輯密碼</b></legend>


    <!-- 訊息 -->
    @if (isset($wrongPwd))
    <div class="alert alert-danger">
      <span class="glyphicon glyphicon-remove"></span>
      <strong>{{$wrongPwd}}</strong>
    </div>
    @endif
    @if (isset($successPwd))
    <div class="alert alert-success">
      <span class="glyphicon glyphicon-ok"></span>
      <strong>{{$successPwd}}</strong>
    </div>
    @endif


    <!-- old pasword req pwd-->
    <div class="form-group">
      <label class="col-md-4 control-label">舊的密碼</label>
      <div class="col-md-4 inputGroupContainer">
      <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
      <input  name="password" placeholder="請輸入舊密碼" class="form-control"  type="password" required>
        </div>
      </div>
    </div>

    <!-- new pasword req pwd-->
    <div class="form-group">
      <label class="col-md-4 control-label">新的密碼</label>
      <div class="col-md-4 inputGroupContainer">
      <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
      <input  name="passwordNew" placeholder="請輸入新密碼" class="form-control"  type="password" required>
        </div>
      </div>
    </div>

    <!-- new pasword twice req pwd-->
    <div class="form-group">
      <label class="col-md-4 control-label">確認密碼</label>
      <div class="col-md-4 inputGroupContainer">
      <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
      <input  name="passwordChk" placeholder="請確認新密碼" class="form-control"  type="password" required>
        </div>
      </div>
    </div>

    <!-- Button login -->
    <div class="form-group">
      <center>
        {{ csrf_field() }}
        <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-log-in"></span> 確認更改</button>
        <a href="{{ url('/application') }}">
          <button type="button" class="btn btn-info">返回 <span class="glyphicon glyphicon-log-out"></span></button>
        </a>
      </center>
    </div>

    <!-- forget pwd tips-->
    <center>
      <h6><span class="glyphicon glyphicon-question-sign"></span> 忘記密碼請逕向教學發展中心聯繫</h6>
    </center>

    </fieldset>
  </form>
</div>

<!-- @if (isset($hint))
  <div class="alert alert-warning">
    <span class="glyphicon glyphicon-exclamation-sign"></span>
    <strong>{{$hint}}</strong>
  </div>
@endif
<form class="" action="{{asset('/application/addappUser')}}" method="post">
  {{ csrf_field() }}
  account<input type="text" name="account" value="">
  password<input type="password" name="password" value="">
  <button type="submit" name="button">confirm</button>
</form> -->
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
