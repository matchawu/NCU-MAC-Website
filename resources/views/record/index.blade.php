@extends('layouts.app')

@section('title', '課程查詢')

@section('content')
	<div class="container">
		<!--標題-->
		<div class="page-header">
			<center>課程查詢</center>
		</div>
		<div class="inline">
				<a href="{{ url('/record/個別課程') }}"><button type="button" class="btn btn-default"><span class="glyphicon glyphicon-eye-open"></span>&nbsp;個別課程</button></a>
				<a href="{{ url('/record/模組課程') }}"><button type="button" class="btn btn-default"><span class="glyphicon glyphicon-eye-open"></span>&nbsp;模組課程</button></a>
				<!-- <a href="{{ url('/record/碎形課程') }}"><button type="button" class="btn btn-default"><span class="glyphicon glyphicon-eye-open"></span>&nbsp;碎形課程</button></a> -->
        <a href="{{ url('/search') }}"><button type="button" class="btn btn-default"><span class="glyphicon glyphicon-eye-open"></span>&nbsp;詳細搜尋</button></a>
		</div><br>
		<div class="panel-body">
			<table class="table table-hover" >
			<thead style="background-color:#da8b8b;color:#fff">
				<tr>
					<th>歡迎來到課程查詢</th>

				</tr>
			</thead>
			<!-- <tbody style="background-color:">
				<tr>
					<td>1234</td>
					<td>程式設計</td>
					<td>教務處</td>
					<td>106學年度</td>
					<td>
						<button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal1">查看詳情</button>
					</td>
				</tr>
			</tbody> -->
		</table>
		</div>

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
	</style>
@endsection

@section('js')
@endsection
