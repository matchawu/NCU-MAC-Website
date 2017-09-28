@extends('layouts.app')

@section('title', '開設個別課程')

@section('content')
<div class="container">
  <h2>
    <b></b>
  </h2>
</div>
<br>

<div class="container col-sm-1">
</div>

<div class="container col-sm-10">
  <form class="well form-horizontal" action="{{asset('authrize/menu/news')}}" method="post"  >
    <legend><b>新增公告</b></legend>
    <div style="padding:10px">
      <div class="form-group ">
        <label >公告標題:</label>
        <input type="text" class="form-control" >
      </div>
      <div class="form-group">
        <label >公告小標:</label>
        <input type="text" class="form-control" >
      </div>
      <div class="form-group">
        <label >內容:</label>
        <input type="text" class="form-control" >
      </div>
    </div>


     <button type="submit" class="btn btn-primary">確認送出</button>
  </form>
</div>
@endsection

@section('css')

@endsection

@section('js')
@endsection
