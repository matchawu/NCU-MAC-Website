@extends('layouts.app')

@section('title', '課程影音')

@section('content')
<div class="container">
  <h3>課程影音</h3>
  <ul class="nav nav-pills">
    <li class="active"><a id="pill1" class="btn-primary btn" data-toggle="pill" href="#all">全部</a></li>
    <li><a id="pill2" class="btn-success btn" data-toggle="pill" href="#single">個別課程</a></li>
    <li><a id="pill3" class="btn-info btn" data-toggle="pill" href="#module">模組課程</a></li>
    <!-- <li><a id="pill4" class="btn-warning btn" data-toggle="pill" href="#fractal">碎形課程</a></li> -->
  </ul>

  <div class="tab-content">
    <div id="all" class="tab-pane fade in active">
      <h4>全部</h4>
      <div class="list-group">
        @foreach ($single_classes as $single_class)
        @if( $single_class->video!=NULL )
        <a href="{{$single_class->video}}" class="list-group-item" target="_blank">{{$single_class->name}}</a>
        @endif
        @endforeach

        @foreach ($module_classes as $module_class)
        @if( $module_class->video!=NULL )
        <a href="{{$module_class->video}}" class="list-group-item" target="_blank">{{$module_class->name}}</a>
        @endif
        @endforeach

        @foreach ($fractal_classes as $fractal_class)
        @if( $fractal_class->video!=NULL )
        <a href="{{$fractal_class->video}}" class="list-group-item" target="_blank">{{$fractal_class->name}}</a>
        @endif
        @endforeach
      </div>
    </div>
    <div id="single" class="tab-pane fade">
      <h4>個別課程</h4>
      <div class="list-group">
        @foreach ($single_classes as $single_class)
        @if( $single_class->video!=NULL )
        <a href="{{$single_class->video}}" class="list-group-item" target="_blank">{{$single_class->name}}</a>
        @endif
        @endforeach
      </div>
    </div>
    <div id="module" class="tab-pane fade">
      <h4>模組課程</h4>
      <div class="list-group">
        @foreach ($module_classes as $module_class)
        @if( $module_class->video!=NULL )
        <a href="{{$module_class->video}}" class="list-group-item" target="_blank">{{$module_class->name}}</a>
        @endif
        @endforeach
      </div>
    </div>
    <div id="fractal" class="tab-pane fade">
      <h4>碎形課程</h4>
      <div class="list-group">
        @foreach ($fractal_classes as $fractal_class)
        @if( $fractal_class->video!=NULL )
        <a href="{{$fractal_class->video}}" class="list-group-item" target="_blank">{{$fractal_class->name}}</a>
        @endif
        @endforeach
      </div>
    </div>
  </div>
</div>
@endsection

@section('css')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
#pill1,#pill2,#pill3,#pill4{
  -webkit-border-radius: 0px;
  -moz-border-radius: 0px;
  border-radius: 0px;
}
</style>
@endsection

@section('js')

@endsection
