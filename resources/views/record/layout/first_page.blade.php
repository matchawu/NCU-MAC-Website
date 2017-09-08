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
				<button type="button" class="btn btn-default"><span class="glyphicon glyphicon-eye-open"></span>&nbsp;個別課程</button>
				<button type="button" class="btn btn-default"><span class="glyphicon glyphicon-eye-open"></span>&nbsp;模組課程</button>
				<button type="button" class="btn btn-default"><span class="glyphicon glyphicon-eye-open"></span>&nbsp;碎形課程</button>
        <a href="{{ url('/search') }}"><button type="button" class="btn btn-default"><span class="glyphicon glyphicon-eye-open"></span>&nbsp;詳細搜尋</button></a>
			</div>
		</div><br><br>
  
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
