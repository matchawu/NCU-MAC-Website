@extends('layouts.app')

@section('title', '課程搜尋')

@section('content')
	<div class="container">

		<!--圖片及標題-->
		<div class="bcg">
			<div style="line-height:500px;color:#fff;padding-top:180px">
				<center><h1>課&nbsp;程&nbsp;搜&nbsp;尋</h1>
					<h5 style="font-style:oblique;padding-left:0%;color:#f2f1f2;letter-spacing:1px;">“我寧可做人類中有夢想和有完成夢想的願望的、最渺小的人，而不願做一個最偉大的、無夢想、無願望的人。” - 紀伯倫</h5>
				</center>
			</div>
	</div><br>

	<!-- 回上一頁button -->
	<div class="row" style="margin-bottom:15px;padding:15px">
		<div class="col-sm-1">
			<a href="{{url('/record')}}"><button class="btn btn-defaulte " type="button">回上一頁</button></a>
		</div>
	</div><hr>


		<!-- 搜尋後的結果顯示 -->
		@if ($search_single = Session::get('search_single'))
			@if($time =Session::get('time'))
			<div class="alert alert-block" style="background-color:#262626">
				<button type="button" class="close" data-dismiss="alert" style="color:#e65c00;">×</button>
				<center><h3 style="color:#e74c3c"><span class="glyphicon">&#xe003;</span>&nbsp;搜尋結果</h3></center>
				@if($search_single->isEmpty())
					<strong style="color:#e74c3c">查無結果.....</strong>
				@else
				<table class="table table-hover" >
					<tbody style="background-color:">
						<input type="hidden" name="" value="{{$i=1}}">
						@foreach ($search_single as $search_single)
							@if($time==1)
							<a href="{{ url('record/view_single/'.$search_single->id) }}">
								<div class="col-sm-4" style="margin-top:20px">
								<div class="post-module">
									<div class="post-content">
										<div class="category"><i class="fa fa-comments"></i><span class="glyphicon">&#xe008;</span>&nbsp;授課者:&nbsp;{{ $search_single->teacher }}</div>
										<h1 class="title">{{ $search_single->name }}</h1>
										<div class="post-meta"><span class="timestamp"><span class="glyphicon">&#xe109;</span>&nbsp{{$search_single->date}};&nbsp;星期@if( $search_single->weekday==1)
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
																	@endif</span>
											<span class="comments"><i class="fa fa-comments"></i><a href="#">&nbsp;&nbsp;&nbsp;<span class="glyphicon">&#xe008;</span>&nbsp;
												開始時間:{{ $search_single->start }}</a></span></div>
									</div>
								</div>
							</div></a>
							@else
								@if((int)substr($search_single->start,0,2)==$time)
								<a href="{{ url('record/view_single/'.$search_single->id) }}">
									<div class="col-sm-4" style="margin-top:20px">
									<div class="post-module">
										<div class="post-content">
											<div class="category"><i class="fa fa-comments"></i><a href="#">&nbsp;&nbsp;&nbsp;<span class="glyphicon">&#xe008;</span>&nbsp;講師{{ $search_single->teacher }}</div>
											<h1 class="title">{{ $search_single->name }}</h1>
											<div class="post-meta"><span class="timestamp"><span class="glyphicon">&#xe109;</span>&nbsp{{$search_single->date}};&nbsp;星期@if( $search_single->weekday==1)
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
																		@endif</span>
												<span class="comments"><i class="fa fa-comments"></i><a href="#">&nbsp;&nbsp;&nbsp;<span class="glyphicon">&#xe008;</span>&nbsp;
													開始時間:{{ $search_single->start }}</a></span></div>
										</div>
									</div>
								</div></a>
								@else
									@if($i==1)
										<tr>
											<td><strong>查無結果呢</strong></td>
										</tr>
									@endif
								@endif
								<input type="hidden" name="" value="{{$i=$i+1}}">
							@endif
						@endforeach
					</tbody>
				</table>
				@endif
			</div>
			@endif
		@endif

		@if ($search_other = Session::get('search_other'))
			@if($type =Session::get('type'))
			<div class="alert alert-block" style="background-color:#262626">
				<button type="button" class="close" data-dismiss="alert" style="color:#e65c00;">×</button>
				<center><h3 style="color:#e74c3c"><span class="glyphicon">&#xe003;</span>&nbsp;搜尋結果</h3></center>
				@if($search_other->isEmpty())
					<strong style="color:#e74c3c">查無結果...</strong>
				@else
				<table class="table table-hover" >

					<tbody style="background-color:">
						<input type="hidden" name="" value="{{$i=1}}">
						@foreach ($search_other as $search_other)
							<a href="{{ url('record/view_module/'.$search_other->id) }}">
								<div class="col-sm-4" style="margin-top:20px">
								<div class="post-module">
									<div class="post-content">

										<div class="category">{{ $search_other->field }}</div>
										<h1 class="title">{{ $search_other->name }}</h1>
										<h2 class="sub_title">{{$search_other->class_intro}}</h2>
										<div class="post-meta"><span class="timestamp"><span class="glyphicon">&#xe109;</span>&nbsp;{{$search_other->date}}</span>
											<span class="comments"><i class="fa fa-comments"></i><a href="#">&nbsp;&nbsp;&nbsp;<span class="glyphicon">&#xe008;</span>&nbsp;
												授課者:{{$search_other->teacher}}</a></span></div>
									</div>
								</div>
							</div></a>
						@endforeach
					</tbody>
				</table>
				@endif
			</div>
			@endif
		@endif

		<!-- 個別及模組課程查詢輸入區段 -->
		<div>
			<ul class="nav nav-tabs" >
				<li class="active"><a data-toggle="tab" href="#singleclass" >個別課程</a></li>
				<li><a data-toggle="tab" href="#menu1" >模組課程</a></li>
			</ul>

			<div class="tab-content tab-search" >
				<div id="singleclass" class="tab-pane fade in active">
					<form  action=" {{ url('search') }} " method="post">
						{{ csrf_field() }}
						<br>星期:
						<select name="weekofday">
							<option value ="0">全部</option>
							<option value ="1">ㄧ</option>
							<option value ="2">二</option>
							<option value ="3">三</option>
							<option value ="4">四</option>
							<option value ="5">五</option>
							<option value ="6">六</option>
							<option value ="7">日</option>
						</select>
						<hr>
						開始時段:
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
							<option value="16">16:00~17:00</option>
							<option value="17">17:00~18:00</option>
							<option value="18">18:00~19:00</option>
							<option value="19">18:00~19:00</option>
							<option value="20">20:00~21:00</option>
						</select><hr>
						課程名稱:
						<input type="text" name="name" value="" placeholder="可不填ヽ(*´∀`)ﾉﾟ."><hr>
						查關鍵字:
						<input type="text" name="tag" value="" placeholder="可不填ヽ(*´∀`)ﾉﾟ."><hr>
						<button type="submit" class="btn btn-warning">查詢</button><br><br>
					</form>
				</div>
				<div id="menu1" class="tab-pane fade">
					<form  action=" {{ url('search2') }} " method="post">
						{{ csrf_field() }}
						<!-- 課程種類:
						<select name="type">
							<option value ="1">模組課程</option>
							<option value="2">碎形課程</option>
						</select><hr> -->
						<br>課程名稱:
						<input type="text" name="name" value="" placeholder="可不填ヽ(*´∀`)ﾉﾟ."><hr>
						查關鍵字:
						<input type="text" name="tag" value="" placeholder="可不填ヽ(*´∀`)ﾉﾟ."><hr>
						<button type="submit" class="btn btn-warning">查詢</button><br><br>
					</form>
				</div>
			</div>
		</div><br>


	 </div>
@endsection

@section('css')

	<style type="text/css">
	.tab-search{
		border-left:#d9d9d9 solid 1px;
		border-right:#d9d9d9 solid 1px;
		border-bottom:#d9d9d9 solid 1px;
		background-color:#fbfbfb;
		padding:3% 5% 3% 5%;
	}
	.nav-tabs>li.active>a, .nav-tabs>li.active>a:focus, .nav-tabs>li.active>a:hover {
    color: #fff;
    cursor: default;
    background-color: #00264d;
    border: 1px solid #ddd;
    border-bottom-color: transparent;
}
		.bcg {
		    /* The image used */
		    background-image: url("/img/record1.png");

		    /* Full height */
		    height: 400px;
				margin-left: -210px;
				margin-right:-173px;
		    /* Center and scale the image nicely */
		    background-position: center;
		    background-repeat: no-repeat;
		    background-size: cover;
		}
		.post-module {
	  position: relative;
	  z-index: 1;
	  display: block;
	  background: #00264d;
	  min-width: 270px;
	  height: 290px;
	  -webkit-box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.15);
	  -moz-box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.15);
	  box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.15);
	  -webkit-transition: all 0.3s linear 0s;
	  -moz-transition: all 0.3s linear 0s;
	  -ms-transition: all 0.3s linear 0s;
	  -o-transition: all 0.3s linear 0s;
	  transition: all 0.3s linear 0s;
	}
	.post-module:hover,
	.hover {
	  -webkit-box-shadow: 0px 1px 35px 0px rgba(0, 0, 0, 0.3);
	  -moz-box-shadow: 0px 1px 35px 0px rgba(0, 0, 0, 0.3);
	  box-shadow: 0px 1px 35px 0px rgba(0, 0, 0, 0.3);
	}



	.post-module .post-content {
	  position: absolute;
	  bottom: 0;
	  background: #fbfbfb;
	  width: 100%;
	  padding: 30px;
	  -webkti-box-sizing: border-box;
	  -moz-box-sizing: border-box;
	  box-sizing: border-box;
	  -webkit-transition: all 0.3s cubic-bezier(0.37, 0.75, 0.61, 1.05) 0s;
	  -moz-transition: all 0.3s cubic-bezier(0.37, 0.75, 0.61, 1.05) 0s;
	  -ms-transition: all 0.3s cubic-bezier(0.37, 0.75, 0.61, 1.05) 0s;
	  -o-transition: all 0.3s cubic-bezier(0.37, 0.75, 0.61, 1.05) 0s;
	  transition: all 0.3s cubic-bezier(0.37, 0.75, 0.61, 1.05) 0s;
	}
	.post-module .post-content .category {
	  position: absolute;
	  top: -34px;
	  left: 0;
	  background: #e74c3c;
	  padding: 10px 15px;
	  color: #FFFFFF;
	  font-size: 14px;
	  font-weight: 600;
	  text-transform: uppercase;
	}
	.post-module .post-content .title {
	  margin:10px;

	  color: #333333;
	  font-size: 26px;
	  font-weight: 700;
	}
	.post-module .post-content .sub_title {
	  margin: 10px;
	  padding: 10 10 20 10px;
	  color: #e74c3c;
	  font-size: 15px;

	}
	.post-module .post-content .description {
	  display: none;
	  color: #666666;
	  font-size: 14px;
	  line-height: 1.8em;
	}
	.post-module .post-content .post-meta {
	  margin: 30px 0 0;
	  color: #999999;
	}
	.post-module .post-content .post-meta .timestamp {
	  margin: 10 16px 10 10;
	}
	.post-module .post-content .post-meta a {
	  color: #999999;
	  text-decoration: none;
	}
	.hover .post-content .description {
	  display: block !important;
	  height: auto !important;
	  opacity: 1 !important;
	}
	.containercard {
	  max-width: 800px;
	  min-width: 640px;
	  margin: 0 auto;
	}



		.btn, .btn.inverse:hover{color:#fff; background-color:#e74c3c; border-color:#e74c3c;}
		.btn:hover, .btn.inverse{color:inherit; background-color:transparent; border-color:inherit;}
		*, *::before, *::after{transition:all .28s ease-in-out;}

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
