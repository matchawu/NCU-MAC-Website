@extends('layouts.app')

@section('title', '最新公告管理')

@section('content')
<div class="container"><br><br>
  @if ($success = Session::get('success'))
    <div class="alert alert-success alert-block">
      <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>成功刪除{{Session::get('title')}}</strong>
    </div>
  @endif
<br>

<div class="container col-sm-1">
</div>

<div class="container col-sm-10">
  <div class="well "    >
    <legend><b>優異成果管理管理</b></legend> <a href="{{ url('authrize/menu/uploadAchievement') }}"><button type="button" class="btn btn-primary">+新增成果</button></a>
    <div style="padding:10px">
      <table class="table">
       <thead>
         <tr>
           <th>成果主題</th>
           <th>新增日期</th>
           <th><i class="fa fa-envira" style="font-size:24px"></i></th>
         </tr>
       </thead>
       <tbody>
         @foreach($achievements as $achievements)
         <tr>
           <td>{{ $achievements->result_topic }}</td>
           <td>{{ $achievements->created_at }}</td>
           <td><p>
             <div class="form-group">
               <div class="col-sm-2">
                  <a href="{{ asset('achievement/edit/'.$achievements->id) }}"><button type="button" class="btn btn-success">
                    <span class="glyphicon glyphicon-pencil"></span>修改
                  </button></a>
                </div>
                <div class="col-sm-2">
                   <form action="{{ asset('authrize/achievement/'.$achievements->id) }}" method="POST">
            								{!! csrf_field() !!}
            								{!! method_field('DELETE') !!}
            								<button type="submit" class="btn btn-danger">
            									<span class="glyphicon glyphicon-trash"></span>刪除
            								</button>
            			</form>
                </div>
              </div>
            </p></td>

         </tr>
         @endforeach
       </tbody>
      </table>
    </div>



  </div>
</div>
@endsection

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

@endsection

@section('js')
@endsection
