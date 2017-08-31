@extends('layouts.app')

@section('title', '管理員登入')

@section('content')
<div class="container">
  <h2>
    <b></b>
  </h2>
</div>

<div class="container col-sm-2">
</div>

<div class="container col-sm-8">
  <form class="well form-horizontal" action=" " method="post"  id="contact_form">
    <fieldset>
    
    <!-- Form Name -->
    <legend><b>管理員登入</b></legend>

    <!-- alert -->
    <!-- <div class="alert alert-info">
      <strong>初次使用? </strong> 申請流程請參照 <a href="{{ url('/introduce') }}" class="alert-link">微學分課程開課資格申請流程。</a>
    </div> -->

    <!-- 此處input name尚未更改 -->
    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label">管理者帳號</label>
      <div class="col-md-4 inputGroupContainer">
      <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <input  name="first_name" placeholder="ID" class="form-control"  type="text">
        </div>
      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label">管理者密碼</label>
      <div class="col-md-4 inputGroupContainer">
      <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
      <input  name="first_name" placeholder="password" class="form-control"  type="password">
        </div>
      </div>
    </div>

    <!-- Button log in -->
    <div class="form-group">
      <center>
        <a href="{{ url('/authrize/menu') }}">
          <button type="button" class="btn btn-primary">登入 <span class="glyphicon glyphicon-log-in"></span></button>
        </a>
      </center>
    </div>

    <!-- forget pwd -->
    <center>
      <h6><span class="glyphicon glyphicon-question-sign"></span> 忘記密碼請逕向開發團隊聯繫</h6>
    </center>

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