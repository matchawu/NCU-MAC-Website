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
  <form class="well form-horizontal" role="form" method="POST" action="{{ route('login') }}" id="contact_form">
    <fieldset>
    {{ csrf_field() }}
    <!-- Form Name -->
    <legend><b>管理員登入</b></legend>

    <!-- alert -->
    <!-- <div class="alert alert-info">
      <strong>初次使用? </strong> 申請流程請參照 <a href="{{ url('/introduce') }}" class="alert-link">微學分課程開課資格申請流程。</a>
    </div> -->

    @if ($errors->has('email'))
                <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
                </span>
    @endif
      <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
        <label for="email" class="col-md-4 control-label">管理者信箱</label>
            <div class="col-md-4 inputGroupContainer">
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input  id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                
              </div>
            </div>
      </div>
    <!-- Text input-->
    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
        <label for="password" class="col-md-4 control-label">管理者密碼</label>
      <div class="col-md-4 inputGroupContainer">
        <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
          <input id="password" type="password" class="form-control" name="password" required>
          @if ($errors->has('password'))
          <span class="help-block">
          <strong>{{ $errors->first('password') }}</strong>
           </span>
          @endif
        </div>
      </div>
    </div>
    
    <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>
    <!-- Button log in -->
    <div class="form-group">
      <center>
        <a href="{{ url('/authrize/menu') }}">
          <button type="submit" class="btn btn-primary">登入 <span class="glyphicon glyphicon-log-in"></span></button>
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