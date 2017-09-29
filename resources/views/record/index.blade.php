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
				<a href="{{ url('/record/碎形課程') }}"><button type="button" class="btn btn-default"><span class="glyphicon glyphicon-eye-open"></span>&nbsp;碎形課程</button></a>
        <a href="{{ url('/search') }}"><button type="button" class="btn btn-default"><span class="glyphicon glyphicon-eye-open"></span>&nbsp;詳細搜尋</button></a>
		</div><br>
		<div class="wrapper row2">
  <section class="hoc container clear">
    <!-- ################################################################################################ -->
    <ul class="nospace group services" >
      <li class="one_quarter first">
        <article><a href="{{ url('/record/個別課程') }}"><img src="/img/as.jpg" alt="" width="300"></a>
          <h3 class="heading font-x1"><a href="{{ url('/record/個別課程') }}">個別課程</a></h3>
          <p>Bibendum ac risus sit amet venenatis mauris a tortor porta ligula</p>
        </article>
      </li>
      <li class="one_quarter">
        <article><a href="{{ url('/record/模組課程') }}"><img src="/img/as2.jpg" alt="" width="300"></a>
          <h6 class="heading font-x1"><a href="{{ url('/record/模組課程') }}">模組課程</a></h6>
          <p>Mi integer sagittis urna id tempor interdum donec vitae est ut</p>
        </article>
      </li>
      <li class="one_quarter">
        <article><a href="{{ url('/search') }}"></a>
          <h6 class="heading font-x1"><img src="/img/as21.jpg" alt="" width="300"><a href="{{ url('/search') }}">詳細搜尋</a></h6>
          <p>Lorem vehicula vel nec tortor dignissim nec arcu quis ornare</p>
        </article>
      </li>
    </ul>
    <!-- ################################################################################################ -->
  </section>
</div>

		<!-- <div class="panel-body">
			<table class="table table-hover" >
			<thead style="background-color:#da8b8b;color:#fff">
				<tr>
					<img src="/img/as.jpg" >
					<th>歡迎來到課程查詢</th>

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
		</div> -->

	 </div>
@endsection

@section('css')
<link rel="stylesheet" href="/css/search.css">
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
