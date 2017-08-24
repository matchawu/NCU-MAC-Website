@extends('layouts.app')

@section('title', '選擇課程屬性')

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
<legend><b>選擇課程屬性</b></legend>

<div class="alert alert-info">
  <strong>如何區分課程屬性? </strong> 請參照 <a href="{{ url('/introduce') }}" class="alert-link">微學分課程開設教學。</a>
  <!-- 應該要跳到屬性介紹的區塊# -->
</div>

<!-- Success message -->
<!-- <div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Thanks for contacting us, we will get back to you shortly.</div> -->

<!-- Button -->
<div class="form-group">
  <!-- <label class="col-md-4 control-label"></label>
  <div class="col-md-4"> -->
  <center>
    <a href="{{ url('/application/form1') }}" data-toggle="tooltip" title="獨立開授之課程，一次性課程">
    <button type="button" class="btn btn-success btn-md">個別課程 <span class="glyphicon glyphicon-log-in"></span></button>
    </a>
    <a href="{{ url('/application/form2') }}" data-toggle="tooltip" title="一整套的課程，需安排各次上課進度及內容">
    <button type="button" class="btn btn-info btn-md">模組課程 <span class="glyphicon glyphicon-log-in"></span></button>
    </a>
    <a href="{{ url('/application/form3') }}" data-toggle="tooltip" title="學校已有的課程，其中幾堂特別公開授課">
    <button type="button" class="btn btn-warning btn-md">碎形課程 <span class="glyphicon glyphicon-log-in"></span></button>
    </a>
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

<script>

</script>
@endsection

@section('js')
<script>

</script>
@endsection
