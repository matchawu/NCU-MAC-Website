@extends('layouts.app')

@section('title','微學分簡介')

@section('content')
		<!--標題-->
			<div class="page-header">
				<img src="{{asset('/img/Introduce-title.jpg')}}" class="title">
			</div>
		<!--中間三個Button-->
			<div class="row" style="margin-top: 15%;">
				<!--button-->
				<div class="col-sm-3">
					<button type="button" class="btn button-bgcolor" data-toggle="modal" data-target="#myModal1">
						<img src="{{asset('/img/Introduce1.jpg')}}" class="img-responsive " style="width:600px;height:300px;">
					</button>
				</div>
				<div class="col-sm-3">
					<button type="button" class="btn button-bgcolor" data-toggle="modal" data-target="#myModal2">
						<img src="{{asset('/img/Introduce2.jpg')}}" class="img-responsive " style="width:600px;height:300px">
					</button>
				</div>
				<div class="col-sm-3">
					<button type="button" class="btn button-bgcolor" data-toggle="modal" data-target="#myModal3">
						<img src="{{asset('/img/Introduce3.jpg')}}" class="img-responsive img-hover" style="width:600px;height:300px">
					</button>
				</div>
				<div class="col-sm-3">
					<button type="button" class="btn button-bgcolor" data-toggle="modal" data-target="#myModal4">
						<img src="{{asset('/img/Introduce3.jpg')}}" class="img-responsive img-hover" style="width:600px;height:300px">
					</button>
				</div>		
				<!--modal-->
					<div class="modal fade" id="myModal1" role="dialog">
					    <div class="modal-dialog modal-lg">
					      <div class="modal-content">
					        <div class="modal-header">
					          <button type="button" class="close" data-dismiss="modal">&times;</button>
					          <h3 class="modal-title">如何申請微學分</h3>
					        </div>
					        <div class="modal-body">
					          <div class="content-title">
					      	  	<strong style="color: #fff; font-size: 15px;">選課流程</strong>
					      	  </div>
					      	  <div>
						          <p class="step-title">第一步</p>
						          <p style="color: #434343;">前往學生單位入口
						          </p>
						          <img src="{{asset('img/introduce/class1.png')}}" class="img-thumbnail open-img">
						          <br><br>
						      </div>
						      <div class="content-title">
					      	  	<strong style="color: #fff; font-size: 15px;">成果發表流程</strong>
					      	  </div>
					      	  <div>
						          <p class="step-title">第一步</p>
						          <p style="color: #434343;">前往學生單位入口
						          </p>
						          <img src="{{asset('img/introduce/class1.png')}}" class="img-thumbnail open-img">
						          <br><br>
						      </div>
						      <hr width="95%">
						      <div>
						          <p class="step-title">第二步</p>
						          <p style="color: #434343;">輸入帳號密碼後，點選申請成果發表</p>
						          <img src="{{asset('img/introduce/class2.png')}}" class="img-thumbnail" style="width: 20%; height: 20%;">
						          <br><br>
						      </div>
						      <hr width="95%">
						      <div>
						          <p class="step-title">第三步</p>
						          <p style="color: #434343;">下載並填寫申請表格
						          </p>
						          <img src="{{asset('img/introduce/class3.png')}}" class="img-thumbnail" style="width: 40%; height: 30%;">
						          <br><br>
						      </div>
						      <hr width="95%">
						      <div>
						          <p class="step-title">第四步</p>
						          <p style="color: #434343;">將填寫完畢的表單存成<strong>PDF檔</strong>，連同成果檔案放入同個資料夾一並上傳
						          </p>
						          <p style="color: red;">※資料夾名稱格式為"學號_姓名"且副檔名為zip格式</p>
						          <img src="{{asset('img/introduce/class4.png')}}" class="img-thumbnail" style="width: 40%; height: 30%;">
						          <br><br>
						      </div>
						      <hr width="95%">
						      <div>
						          <p class="step-title">第五步</p>
						          <p style="color: #434343;">上傳後即完成成果發表申請，等待教務處審核並通知
						          </p>
						      </div>

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
					          <h3 class="modal-title">如何開課</h3>
					        </div>
					        <div class="modal-body">
					      	  <div class="content-title">
					      	  	<strong style="color: #fff; font-size: 15px;">開課流程</strong>
					      	  </div>
					          <div>
						          <p class="step-title">第一步</p>
						          <p style="color: #434343;">前往表單下載的頁面
						          </p>
						          <img src="{{asset('img/introduce/open1.png')}}" class="img-thumbnail open-img">
						          <br><br>
						          <p style="color: #434343;">將開課單位帳號申請的表單下載下來，印出成書面，填寫上面所需要的資料，再交到教務處領取開課單位帳號
						          </p>
						          <img src="{{asset('img/introduce/open2.png')}}" class="img-thumbnail open-img">
						      </div>
						      <hr width="95%">
						      <div>
						          <p class="step-title">第二步</p>
						          <p style="color: #434343;">點選開課單位入口</p>
						          <img src="{{asset('img/introduce/open3.png')}}" class="img-thumbnail open-img">
						          <br><br>
						          <p style="color: #434343;">輸入帳號密碼後，點選我要申請</p>
						          <img src="{{asset('img/introduce/open5.png')}}" style="width: 20%; height: 20%;" class="img-thumbnail">
						      </div>
						      <hr width="95%">
						      <div>
						          <p class="step-title">第三步</p>
						          <p style="color: #434343;">將表單上面所需要的資料填寫完，送出後交給微學分審查委員會審查，即完成申請
						          </p>
						          <img src="{{asset('img/introduce/open6.png')}}" class="img-thumbnail open-img">
						      </div>
					        
					        </div>
					        <div class="modal-footer">
					          <button type="button" class="btn btn-default" data-dismiss="modal">關閉</button>
					        </div>
					      </div>
					    </div>
					  </div>
			    	</div>
					<div class="modal fade" id="myModal3" role="dialog">
					    <div class="modal-dialog modal-lg">
					      <div class="modal-content">
					        <div class="modal-header">
					          <button type="button" class="close" data-dismiss="modal">&times;</button>
					          <h3 class="modal-title">Q & A</h3>
					        </div>
					        <div class="modal-body">
					          
					        </div>
					        <div class="modal-footer">
					          <a href="{{ url('/introduce/edit') }}">
					          	<button type="button" class="btn btn-default">編輯</button>
					          </a>
					          <button type="button" class="btn btn-default" data-dismiss="modal">關閉</button>
					        </div>
					      </div>
					    </div>
					</div>
					<div class="modal fade" id="myModal4" role="dialog">
					    <div class="modal-dialog ">
					      <div class="modal-content">
					        <div class="modal-header">
					          <button type="button" class="close" data-dismiss="modal">&times;</button>
					          <h3 class="modal-title">相關法規</h3>
					        </div>
					        <div class="modal-body">
					          <ul>
					          	<li><a target="_blank" href="{{asset('pdf/rules.pdf')}}">個人資料保護法</a></li>
					          	<li><a target="_blank" href="{{asset('pdf/rules.pdf')}}">網路資料保護法</a></li>
					          	<li><a target="_blank" href="{{asset('pdf/rules.pdf')}}">微學分申請辦法</a></li>
					          	<li><a target="_blank" href="{{asset('pdf/rules.pdf')}}">微學分開課辦法</a></li>
					          	<li><a target="_blank" href="{{asset('pdf/rules.pdf')}}">微學分成果辦法</a></li>
					          </ul>
					        </div>
					        <div class="modal-footer">
					          <button type="button" class="btn btn-default" data-dismiss="modal">關閉</button>
					        </div>
					      </div>
					    </div>
					</div>
			    </div>
				</div>
	</div>
@endsection

@section('css')
	<style type="text/css">
		/*標題*/
		.title{
			width: 750px;
			height: 150px;
			margin-left: 17%;
		}

		.page-header{
			height:30px;
		}

		.button-bgcolor{
			background-color:#f5f8fa;
			-webkit-filter: grayscale(100%);
			filter: grayscale(100%);
			-webkit-transition: .3s ease-in-out;
			transition: .3s ease-in-out;
		}

		.img{
			-webkit-filter: grayscale(100%);
			filter: grayscale(100%);
			-webkit-transition: .3s ease-in-out;
			transition: .3s ease-in-out;
		}

		.button-bgcolor:hover{
			-webkit-filter: grayscale(0);
			filter: grayscale(0);
		}

		.modal-title{
			color: #257372;
			font-weight: bold;
		}

		.content-title{
			background-color: #3d9ba3;
			width: 100%; 
			height: 33px;     
			padding: 5px 0 5px 15px;
		}

		.step-title{
			font-size: 15px; 
			font-weight: bold; 
			color: #367680;
		}

		.open-img{
			width: 70%;
		}

		li{
			margin: 10px 0;
		}

	</style>
@endsection

@section('js')



