@extends('layouts.app')

@section('title', '開課完成')

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
    <legend><b>開課完成</b></legend>

    <!-- alert -->
    <div class="alert alert-success">
      <strong><span class="glyphicon glyphicon-ok"></span> 恭喜 ! <a href="{{ url('/application/login') }}" class="alert-link">您所開設的課程</a> 已就緒。</strong>
    </div>

    <!-- Button log in -->
    <div class="form-group">
      <center>
        <a href="{{ url('/application/login') }}">
          <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-eye-open"></span> 查看已開設課程</button>
        </a>
        <a href="{{ url('/Homepage') }}">
          <button type="button" class="btn btn-info">返回首頁 <span class="glyphicon glyphicon-log-out"></span></button>
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
