@extends('layouts.app')

@section('title', '最新公告管理')

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
    <legend><b>最新公告管理</b></legend> <a href="{{ url('/authrize/menu/news/create') }}"><button type="button" class="btn btn-primary">+新增公告</button></a>
    <div style="padding:10px">

    </div>



  </form>
</div>
@endsection

@section('css')

@endsection

@section('js')
@endsection
