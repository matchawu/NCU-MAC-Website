@extends('layouts.app')

@section('title', '課程探索')

@section('content')
	<div class="container">
		<!--標題-->
		<div class="page-header">
			<center>課程探索</center>
		</div>
		<div class="inline">
				<button type="button" class="btn basic"><span class="glyphicon glyphicon-eye-open"></span>&nbsp;全部</button>
				<button type="button" class="btn btn-default"><span class="glyphicon glyphicon-eye-open"></span>&nbsp;人文與思想</button>
				<button type="button" class="btn btn-default"><span class="glyphicon glyphicon-eye-open"></span>&nbsp;自然科學</button>
				<button type="button" class="btn btn-default"><span class="glyphicon glyphicon-eye-open"></span>&nbsp;應用科學</button>
        <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-eye-open"></span>&nbsp;社會思潮與現象</button>
        <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-eye-open"></span>&nbsp;跨域整合</button>
        <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-eye-open"></span>&nbsp;社會實踐</button>
        <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-eye-open"></span>&nbsp;創意創業</button>
        <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-eye-open"></span>&nbsp;其他</button>
        <a href="{{ url('/search') }}"><button type="button" class="btn btn-default"><span class="glyphicon glyphicon-eye-open"></span>&nbsp;詳細搜尋</button></a>
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
				<tr>
					<td>1234</td>
					<td>程式設計</td>
					<td>教務處</td>
					<td>106學年度</td>
					<td>
						<button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal1">查看詳情</button>
					</td>
				</tr>
			</tbody>
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
