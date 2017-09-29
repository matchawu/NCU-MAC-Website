@extends('layouts.app')

@section('title', '新增公告')

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
  @if (count($errors) > 0)
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
              @endif
  <form class="well form-horizontal" action="{{asset('authrize/menu/news/'.$news->id)}}" method="post">
    {{ csrf_field() }}
    {{ method_field('PATCH') }}
    <legend><b>修改公告</b></legend>
    <div style="padding:10px">
      <div class="form-group ">
        <label >公告標題:</label>
        <input type="text" class="form-control" name="title" value="{{$news->title}}">
      </div>
      <div class="form-group">
        <label >公告小標:</label>
        <input type="text" class="form-control" name="subtitle" value="{{$news->subtitle}}">
      </div>
      <div class="form-group">
        <label >內容:</label>
        <textarea id="ckeditor" class="ckeditor" name="content">{{$news->content}}</textarea>
                <script type="text/javascript">

                  CKEDITOR.replace( 'ckeditor' );

                </script>
      </div>
    </div>
    {{ csrf_field() }}
     <button type="submit" class="btn btn-primary">確認送出</button>
  </form>
</div>
@endsection

@section('css')

@endsection

@section('js')
<script src="{{asset('/ckeditor/ckeditor/ckeditor.js')}}"></script>

@endsection
