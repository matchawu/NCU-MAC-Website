@extends('layouts.app')

@section('title', '課程探索')

@section('content')
	<div class="container">
		<!--標題-->
		<div class="page-header">
			<center>課程探索</center>
		</div>
		<div class="inline">
				<a href="{{ url('/record') }}"><button type="button" class="btn btn-default"><span class="glyphicon glyphicon-eye-open"></span>&nbsp;全部</button></a>
				<button type="button" class="btn btn-default"><span class="glyphicon glyphicon-eye-open"></span>&nbsp;個別課程</button>
				<button type="button" class="btn btn-default"><span class="glyphicon glyphicon-eye-open"></span>&nbsp;模組課程</button>
				<button type="button" class="btn btn-default"><span class="glyphicon glyphicon-eye-open"></span>&nbsp;碎形課程</button>
        <a href="{{ url('/search') }}"><button type="button" class="btn basic"><span class="glyphicon glyphicon-eye-open"></span>&nbsp;詳細搜尋</button></a>
		</div><br><br><br>
		<center><div style="width:60%">
			<div class="panel panel-default">
	      <div class="panel-heading-pink">搜尋</div>
	      <div class="panel-body">
					<form  action=" {{ url('search') }} " method="post">
						{{ csrf_field() }}
						課程種類:
						<select name="type">
							<option value ="1">全部</option>
						  <option value ="2">個別課程</option>
						  <option value ="3">模組課程</option>
						  <option value="4">碎形課程</option>
						</select><hr>
						星期:
						<select name="weekofday">
							<option value ="0">全部</option>
							<option value ="1">ㄧ</option>
							<option value ="2">二</option>
							<option value ="3">三</option>
							<option value ="4">四</option>
							<option value ="5">五</option>
							<option value ="6">六</option>
							<option value ="7">日</option>
						</select><hr>
						時段:
						<select name="time">
							<option value ="1">全部</option>
							<option value ="8">08:00~09:00</option>
							<option value ="9">09:00~10:00</option>
							<option value ="10">10:00~11:00</option>
							<option value ="11">11:00~12:00</option>
							<option value ="12">12:00~13:00</option>
							<option value ="13">13:00~14:00</option>
							<option value ="14">14:00~15:00</option>
							<option value="15">15:00~16:00</option>
						</select><hr>
						課程名稱:
						<input type="text" name="name" value="" placeholder="可不填ヽ(*´∀`)ﾉﾟ."><hr>
						<button type="submit" class="btn btn-warning">查詢</button><br><br>
					</form>
					</div>
	    </div>
		</div></center>
		@if ($search_single = Session::get('search_single'))
			@if ($type = Session::get('type'))
			@if($time =Session::get('time'))
		  <div class="alert alert-success alert-block">
		    <button type="button" class="close" data-dismiss="alert">×</button>
				@if($search_single->isEmpty())
					<strong>查無結果呢</strong>
				@else
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
						@foreach ($search_single as $search_single)
							@if((int)substr($search_single->time,0,2)==$time)
							<tr>
								<td>{{$type}}</td>
								<td>{{ $search_single->name }}</td>
								<td>星期@if( $search_single->weekday==1)
																<?php echo "一" ?>
																@elseif($search_single->weekday==2)
																	<?php echo "二" ?>
																@elseif($search_single->weekday==3)
																	<?php echo "三" ?>
																@elseif($search_single->weekday==4)
																	<?php echo "四" ?>
																@elseif($search_single->weekday==5)
																	<?php echo "五" ?>
																@elseif($search_single->weekday==6)
																	<?php echo "六" ?>
																@elseif($search_single->weekday==7)
																	<?php echo "日" ?>
															@endif
								</td>
								<td>{{ $search_single->time }}</td>
								<td>
									<button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal1">查看詳情</button>
								</td>
							</tr>
							@endif
						@endforeach
					</tbody>
				</table>
				@endif
		  </div>
			@endif
			@endif
		@endif
	 </div>
@endsection

@section('css')

	<style type="text/css">


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
		.panel-heading{
			background-color: #da8b8b;
		}
	</style>
@endsection

@section('js')

@endsection
