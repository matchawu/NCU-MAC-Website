@extends('layouts.app')

@section('title', '課程查詢')

@section('content')
	<div class="container">
		<!--標題-->
		<div class="page-header">
			<center>課程查詢</center>
		</div>
		<div class="inline">
				<a href="{{ url('record/模組課程') }}"><button type="button" class="btn basic"><span class="glyphicon glyphicon-eye-open"></span>&nbsp;全部</button></a>
				<a href="{{url('record/模組課程/人文與思想')}}"><button type="button" class="btn btn-default"><span class="glyphicon glyphicon-eye-open"></span>&nbsp;人文與思想</button></a>
				<a href="{{url('record/模組課程/自然科學')}}"><button type="button" class="btn btn-default"><span class="glyphicon glyphicon-eye-open"></span>&nbsp;自然科學</button></a>
				<a href="{{url('record/模組課程/應用科學')}}"><button type="button" class="btn btn-default"><span class="glyphicon glyphicon-eye-open"></span>&nbsp;應用科學</button></a>
        <a href="{{url('record/模組課程/社會思潮與創意')}}"><button type="button" class="btn btn-default"><span class="glyphicon glyphicon-eye-open"></span>&nbsp;社會思潮與現象</button></a>
        <a href="{{url('record/模組課程/跨域整合')}}"><button type="button" class="btn btn-default"><span class="glyphicon glyphicon-eye-open"></span>&nbsp;跨域整合</button></a>
        <a href="{{url('record/模組課程/社會實踐')}}"><button type="button" class="btn btn-default"><span class="glyphicon glyphicon-eye-open"></span>&nbsp;社會實踐</button></a>
        <a href="{{url('record/模組課程/創意創業')}}"><button type="button" class="btn btn-default"><span class="glyphicon glyphicon-eye-open"></span>&nbsp;創意創業</button></a>
        <a href="{{url('record/模組課程/其他')}}"><button type="button" class="btn btn-default"><span class="glyphicon glyphicon-eye-open"></span>&nbsp;其他</button></a>
        <!-- <a href="{{ url('/search') }}"><button type="button" class="btn btn-default"><span class="glyphicon glyphicon-eye-open"></span>&nbsp;詳細搜尋</button></a> -->
		</div><br>
		<div class="panel-body">
			<table class="table table-hover" >
			<thead style="background-color:#da8b8b;color:#fff">
				<tr>
					<th>課程屬性</th>
					<th>課程名稱</th>
					<th>上課時間</th>
					<th>上課時段</th>
					<th></th>
				</tr>
			</thead>
			<tbody style="background-color:">
        @foreach($module_class as $module_class)
            <tr>
              <td>個別課程</td>
              <td>{{$module_class->name}}</td>
              <td>{{ $module_class->class_hr }}
              </td>
              <td>{{ $module_class->auth_hr }}</td>
              <td>
                <a href="{{ url('record/view_module/'.$module_class->id) }}" target="_blank"><button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal1">查看詳情</button></a>
              </td>
            </tr>
        @endforeach
			</tbody>
		</table>
		</div>

	 </div>
@endsection

@section('css')

	<style type="text/css">

	.btn, .btn.inverse:hover{color:#fff; background-color:#669999; border-color:#669999;}
	.btn:hover, .btn.inverse{color:inherit; background-color:transparent; border-color:inherit;}
	*, *::before, *::after{transition:all .28s ease-in-out;}
		.page-header{
			font-size: 35px;
			margin-top: 100px;
			/*font-weight: bold;*/
		}
		/*查詢歷年課程字體*/
		font{
			font-size: 20px;
		}

		/*內容*/
		.content{
			margin-left: 4%;
		}

		/*Modal標題字體*/
		h4{
			font-weight: bold;
		}
	</style>
@endsection

@section('js')
@endsection
