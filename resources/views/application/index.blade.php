@extends('layouts.app')

@section('title', '登入申請')

@section('content')
<div class="container">
  <h2>
    <b></b>
  </h2>
</div>

<div class="container col-sm-2">
</div>

<div class="container col-sm-8">
  <form class="well form-horizontal" action="{{asset('/application')}}" method="post"  id="contact_form">
    <fieldset>

    <!-- Form Name -->
    <legend><center><b>開課單位登入</b></center></legend>

    <!-- alert -->
    <div class="alert alert-info alert-dismissable  fade in">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      <span class="glyphicon glyphicon-search"></span>
      <strong> 初次使用? </strong> 申請流程請參照 <a href="{{ url('/introduce') }}" class="alert-link">微學分課程開課資格申請流程。</a>
    </div>

    <!-- 登入失敗 -->
    @if (isset($loginhint))
    <div class="alert alert-danger">
      <span class="glyphicon glyphicon-remove"></span>
      <strong>{{$loginhint}}</strong>
    </div>
    @endif
    <!-- 此處input name更改 -->
    <!-- text req id-->
    <div class="form-group">
      <label class="col-md-4 control-label">申請帳號</label>
      <div class="col-md-4 inputGroupContainer">
      <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <input  name="account" placeholder="ID" class="form-control"  type="text" required>
        </div>
      </div>
    </div>

    <!-- pasword req pwd-->
    <div class="form-group">
      <label class="col-md-4 control-label">申請密碼</label>
      <div class="col-md-4 inputGroupContainer">
      <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
      <input  name="password" placeholder="password" class="form-control"  type="password" required>
        </div>
      </div>
    </div>

    <!-- Button login -->
    <div class="form-group">
      <center>
        {{ csrf_field() }}
        <button type="submit" class="btn btn-primary">登入 <span class="glyphicon glyphicon-log-in"></span></button>
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
