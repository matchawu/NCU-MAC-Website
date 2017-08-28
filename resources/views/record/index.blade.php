@extends('layouts.app')

@section('title', '課程探索')

@section('content')
	<div class="container">
		<!--標題-->
		<div class="page-header">
			<center>課程探索</center>
		</div>
		<div class="inline">
			<div class="col-xs-8">
				<button type="button" class="btn basic"><span class="glyphicon glyphicon-eye-open"></span>&nbsp;全部</button>
				<button type="button" class="btn btn-default"><span class="glyphicon glyphicon-eye-open"></span>&nbsp;文學</button>
				<button type="button" class="btn btn-default"><span class="glyphicon glyphicon-eye-open"></span>&nbsp;科技</button>
				<button type="button" class="btn btn-default"><span class="glyphicon glyphicon-eye-open"></span>&nbsp;戲劇</button>
				<button type="button" class="btn btn-default"><span class="glyphicon glyphicon-eye-open"></span>&nbsp;音樂</button>
			</div>
		</div>
			<div class="input-group add-on">
				<input class="form-control" placeholder="探索去" name="srch-term" id="srch-term" type="text">
				<div class="input-group-btn">
					<button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
				</div>
			</div><br>
			<div class="panel-body">
				<table class="table table-hover" >
				<thead style="background-color:#da8b8b;color:#fff">
					<tr>
						<th>課程編號</th>
						<th>課程名稱</th>
						<th>開課單位</th>
						<th>開課學期</th>
						<th>授課時數</th>
						<th></th>
					</tr>
				</thead>
				<tbody style="background-color:">
					<tr>
						<td>1234</td>
						<td>程式設計</td>
						<td>教務處</td>
						<td>106學年度</td>
						<td>14</td>
						<td>
							<button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal1">查看詳情</button>
						</td>
					</tr>
					<tr>
						<td>1235</td>
						<td>美編</td>
						<td>圖書館</td>
						<td>106學年度</td>
						<td>14</td>
						<td>
							<button type="button" class="btn btn-info btn-xs"
							data-toggle="modal" data-target="#myModal2">查看詳情</button>
						</td>
					</tr>
					<tr>
						<td>1236</td>
						<td>小說創作</td>
						<td>語言中心</td>
						<td>106學年度</td>
						<td>14</td>
						<td>
							<button type="button" class="btn btn-info btn-xs"
							data-toggle="modal" data-target="#myModal3">查看詳情</button>
						</td>
					</tr>
				</tbody>
			</table>
			</div>
	 </div>



	</div>
@endsection

@section('css')
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<style type="text/css">

		.add-on .input-group-btn > .btn {
  		border-left-width:0;left:-2px;
  		-webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  		box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
		}
		/* stop the glowing blue shadow */
		.add-on .form-control:focus {
 			box-shadow:none;
 			-webkit-box-shadow:none;
 			border-color:#cccccc;
		}
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
