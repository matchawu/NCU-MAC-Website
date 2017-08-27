@extends('layouts.app')

@section('title', '歷年紀錄')

@section('content')
	<div class="container">
		<!--標題-->
		<div class="page-header">
			<center>歷年記錄查詢</center>
		</div>
		<!-- 內容 -->
		<ul class="nav nav-tabs">
			<li class="active"><a data-toggle="tab" href="#tab1">歷年課程</a></li>
			<li><a data-toggle="tab" href="#tab2">歷年成果</a></li>
		</ul>

		<div class="tab-content">
			<div id="tab1" class="tab-pane fade in active">
				<div class="panel panel-info">
			    <div class="panel-heading" style="height: 60px;">
			    	<div class="col-xs-5" >

						<div class="dropdown" >
						<font>學期</font>
						  	<button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">全部
						  	<span class="caret"></span></button>
							<ul class="dropdown-menu">
							    <li><a href="#">106學年度</a></li>
							    <li><a href="#">105學年度</a></li>
							    <li><a href="#">104學年度</a></li>
							</ul>
						</div>
					</div>
					<div class="col-xs-7">
						<div class="form-group form-group-lg">
					      <font class="col-sm-3 " for="lg">查詢學生學號</font>
					      <div class="col-sm-9">
					      	<div class="input-group">
						      <input type="text" class="form-control" style="height: 35px;">
						      <span class="input-group-btn">
						        <button class="btn btn-default" type="button">查詢</button>
						      </span>
						    </div>
					      </div>
					    </div>
	    			</div>
			    </div>
			    <div class="panel-body">
			    	<table class="table table-hover">
				    <thead>
				      <tr>
				        <th>課程編號</th>
				        <th>課程名稱</th>
				        <th>開課單位</th>
				        <th>開課學期</th>
				        <th>授課時數</th>
				        <th></th>
				      </tr>
				    </thead>
				    <tbody>
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
			<div id="tab2" class="tab-pane fade">
				<div class="panel panel-info">
			    <div class="panel-heading" style="height: 60px;">
			    	<div class="col-xs-5" >

						<div class="dropdown" >
						<font>學期</font>
						  	<button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">全部
						  	<span class="caret"></span></button>
							<ul class="dropdown-menu">
							    <li><a href="#">106學年度</a></li>
							    <li><a href="#">105學年度</a></li>
							    <li><a href="#">104學年度</a></li>
							</ul>
						</div>
					</div>
					<div class="col-xs-7">
						<div class="form-group form-group-lg">
					      <font class="col-sm-3 " for="lg">查詢學生學號</font>
					      <div class="col-sm-9">
					      	<div class="input-group">
						      <input type="text" class="form-control" style="height: 35px;">
						      <span class="input-group-btn">
						        <button class="btn btn-default" type="button">查詢</button>
						      </span>
						    </div>
					      </div>
					    </div>
	    			</div>
			    </div>
			    <div class="panel-body">
			    	<table class="table table-hover">
				    <thead>
				      <tr>
				        <th>成果編號</th>
				        <th>成果名稱</th>
				        <th>學生姓名</th>
				        <th>發表學期</th>
				        <th>發表時間</th>
				        <th></th>
				      </tr>
				    </thead>
				    <tbody>
				      <tr>
				        <td>1234</td>
				        <td>遊戲創作</td>
				        <td>謝震廷</td>
				        <td>106學年度</td>
				        <td>2016/12/16</td>
				        <td>
				        	<button type="button" class="btn btn-info btn-xs"
				        	data-toggle="modal" data-target="#myModal4">查看詳情</button>
				        </td>
				      </tr>
				      <tr>
				        <td>1235</td>
				        <td>微電影</td>
				        <td>盧廣仲</td>
				        <td>106學年度</td>
				        <td>2016/7/7</td>
				        <td>
				        	<button type="button" class="btn btn-info btn-xs"
				        	data-toggle="modal" data-target="#myModal5">查看詳情</button>
				        </td>
				      </tr>
				      <tr>
				        <td>1236</td>
				        <td>歌曲創作</td>
				        <td>田馥甄</td>
				        <td>106學年度</td>
				        <td>2016/8/13</td>
				        <td>
				        	<button type="button" class="btn btn-info btn-xs"
				        	data-toggle="modal" data-target="#myModal6">查看詳情</button>
				        </td>
				      </tr>
				    </tbody>
				  </table>
			    </div>
			 </div>
			</div>
		</div>

		<!-- Modal -->
		<div class="modal fade" id="myModal1" role="dialog">
    		<div class="modal-dialog modal-lg">
      			<div class="modal-content">
        			<div class="modal-header">
          				<button type="button" class="close" data-dismiss="modal">&times;</button>
          				<h4 class="modal-title">程式設計</h4>
        			</div>
        			<div class="modal-body">
						<p><b>課程編號:</b> 1234</p>
						<p><b>開課學期:</b> 106學年度</p>
                    	<p><b>指導教授:</b> Alan Walker</p>
                    	<p><b>開課單位:</b> 教務處</p>
                    	<p><b>課程內容:</b> 教你如何爆肝</p>
        			</div>
        			<div class="modal-footer">
          				<button type="button" class="btn btn-default" data-dismiss="modal">關閉</button>
        			</div>
      			</div>
    		</div>
  		</div>

  		<div class="modal fade" id="myModal2" role="dialog">
    		<div class="modal-dialog modal-lg">
      			<div class="modal-content">
        			<div class="modal-header">
          				<button type="button" class="close" data-dismiss="modal">&times;</button>
          				<h4 class="modal-title">美編</h4>
        			</div>
        			<div class="modal-body">
          				<p><b>課程編號:</b> 1235</p>
          				<p><b>開課學期:</b> 106學年度</p>
                    	<p><b>指導教授:</b> 宋東野</p>
                    	<p><b>開課單位:</b> 圖書館</p>
                    	<p><b>課程內容:</b> 教你如何畫畫</p>
        			</div>
        			<div class="modal-footer">
          				<button type="button" class="btn btn-default" data-dismiss="modal">關閉</button>
        			</div>
      			</div>
    		</div>
  		</div>

  		<div class="modal fade" id="myModal3" role="dialog">
    		<div class="modal-dialog modal-lg">
      			<div class="modal-content">
        			<div class="modal-header">
          				<button type="button" class="close" data-dismiss="modal">&times;</button>
          				<h4 class="modal-title">小說創作</h4>
        			</div>
        			<div class="modal-body">
          				<p><b>課程編號:</b> 1236</p>
          				<p><b>開課學期:</b> 106學年度</p>
                    	<p><b>指導教授:</b> 林宥嘉</p>
                    	<p><b>開課單位:</b> 語言中心</p>
                    	<p><b>課程內容:</b> 教你如何寫小說</p>
        			</div>
        			<div class="modal-footer">
          				<button type="button" class="btn btn-default" data-dismiss="modal">關閉</button>
        			</div>
      			</div>
    		</div>
  		</div>

  		<div class="modal fade" id="myModal4" role="dialog">
    		<div class="modal-dialog modal-lg">
      			<div class="modal-content">
        			<div class="modal-header">
          				<button type="button" class="close" data-dismiss="modal">&times;</button>
          				<h4 class="modal-title">遊戲創作</h4>
        			</div>
        			<div class="modal-body">
          				<p><b>成果編號:</b> 1234</p>
                    	<p><b>學生姓名:</b> 謝震廷</p>
                    	<p><b>發表時間:</b> 2016/12/16</p>
                    	<p><b>課程內容:</b> 教你如何寫小說</p>
                    	<button type="button" class="btn btn-default btn-sm">成果作品下載</button>
        			</div>
        			<div class="modal-footer">
          				<button type="button" class="btn btn-default" data-dismiss="modal">關閉</button>
        			</div>
      			</div>
    		</div>
  		</div>

  		<div class="modal fade" id="myModal5" role="dialog">
    		<div class="modal-dialog modal-lg">
      			<div class="modal-content">
        			<div class="modal-header">
          				<button type="button" class="close" data-dismiss="modal">&times;</button>
          				<h4 class="modal-title">微電影</h4>
        			</div>
        			<div class="modal-body">
          				<p><b>成果編號:</b> 1235</p>
                    	<p><b>學生姓名:</b> 盧廣仲</p>
                    	<p><b>發表時間:</b> 2016/7/7</p>
                    	<p><b>課程內容:</b> 教你如何寫小說</p>
                    	<button type="button" class="btn btn-default btn-sm">成果作品下載</button>
        			</div>
        			<div class="modal-footer">
          				<button type="button" class="btn btn-default" data-dismiss="modal">關閉</button>
        			</div>
      			</div>
    		</div>
  		</div>

  		<div class="modal fade" id="myModal6" role="dialog">
    		<div class="modal-dialog modal-lg">
      			<div class="modal-content">
        			<div class="modal-header">
          				<button type="button" class="close" data-dismiss="modal">&times;</button>
          				<h4 class="modal-title">歌曲創作</h4>
        			</div>
        			<div class="modal-body">
          				<p><b>成果編號:</b> 1236</p>
                    	<p><b>學生姓名:</b> 田馥甄</p>
                    	<p><b>發表時間:</b> 2016/8/13</p>
                    	<p><b>課程內容:</b> 教你如何寫小說</p>
                    	<button type="button" class="btn btn-default btn-sm">成果作品下載</button>
        			</div>
        			<div class="modal-footer">
          				<button type="button" class="btn btn-default" data-dismiss="modal">關閉</button>
        			</div>
      			</div>
    		</div>
  		</div>

	</div>
	</div>
@endsection

@section('css')
	<style type="text/css">
		.page-header{
			font-size: 35px;
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
