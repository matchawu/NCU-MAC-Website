@extends('layouts.app')

@section('title','微學分簡介')

@section('content')
		<!--標題-->
			<div class="page-header">
				<center>微學分簡介</center>
			</div>
		<!--中間三個Button-->
			<div class="row" style="margin-top: 15%;">
				<!--button-->
				<div class="col-sm-3">
					<button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal1" style="margin-left: 22%; height: 150px; width: 200px;">開課類型
					</button>
				</div>
				<div class="col-sm-3">
					<button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal2" style="margin-left: 22%; height: 150px; width: 200px;">開課流程
					</button>
				</div>
				<div class="col-sm-3">
					<button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal3" style="margin-left: 22%; height: 150px; width: 200px;">常見問題
					</button>
				</div>
				<div class="col-sm-3">
					<button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal4" style="margin-left: 22%; height: 150px; width: 200px;">相關法規與表格
					</button>
				</div>
				<!--modal-->
					<!-- <div class="modal fade" id="myModal1" role="dialog">
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
					</div> -->
					<!-- 開課型態 -->
					<div class="modal fade" id="myModal1" role="dialog">
					    <div class="modal-dialog modal-lg">
					      <div class="modal-content">
					        <div class="modal-header">
					          <button type="button" class="close" data-dismiss="modal">&times;</button>
					          <h4 class="modal-title">開課類型</h4>
					        </div>
					        <div class="modal-body">
					        	<ul style="list-style-type: none;">
					        		@foreach($introduce_classtypes as $introduce_classtype)
										
										<?php
											$str = $introduce_classtype['body'];
											echo $str;
										?>	
										<br>
										<form action="{{ asset('/introduce/'.$introduce_classtype->id) }}" method="post">
							        	{{ csrf_field() }}							        	
							        	<textarea name="editor1" class="form-control">{{ $introduce_classtype -> body }}</textarea>
							        	<!-- <input type="text" name="body"> -->
							        	<br>
							        	<center>
							          		<button type="submit" class="btn btn-info btn-sm">
							            		<span class="glyphicon glyphicon-ok"></span> 送出新增
							          		</button>
							        	</center>
							      		</form> 
					        		@endforeach



					        		 
									
								  <!-- <li>
								  	<p>1.模組化微學分</p>
								  	<p style="margin-left: 10px;">-創設學習課程(開設單位開滿16小時，並引導學生成果創作)</p>
								  </li>
								  <br>
								  <li>
								  	<p>2.課程碎型微學分</p>
								  	<p style="margin-left: 10px;">-碎形微型模組課程(將正式課程碎形成單元模組並開放修習)</p>
								  </li>
								  <br>
								  <li>
								  <p>3.自由組合微學分</p>
								  <p style="margin-left: 10px;">-主動創設學習課程(由學生自行尋求研習課程並取得研習證明)</p>
								  </li>
								  <br>
								  <li>
								  	<p>4.導師共學微學分</p>
								  	<p style="margin-left: 10px;">-導師核可且具學習歷程檔案之多元學習內容(由導生共同研定)</p>
								  </li> -->

								</ul>
					        </div>
					        <div class="modal-footer">
					          <button type="button" class="btn btn-primary" data-dismiss="modal">關閉</button>
					        </div>
					      </div>
					    </div>
					</div>
					<!-- 如何開課 -->
					<div class="modal fade" id="myModal2" role="dialog">
					    <div class="modal-dialog modal-lg">
					      <div class="modal-content">
					        <div class="modal-header">
					          <button type="button" class="close" data-dismiss="modal">&times;</button>
					          <h4>開課流程</h4>
					        </div>
					        <div class="modal-body">
					      	  <!-- <div class="content-title">
					      	  	<strong style="color: #fff; font-size: 15px;">開課流程</strong>
					      	  </div> -->
					      	  
					      	  @foreach($introduce_classsteps as $introduce_classstep)
										
										<?php
											$str1 = $introduce_classstep['body'];
											echo $str1;
										?>	
										<br>
										<form action="{{ asset('/introduce/step'.$introduce_classstep->id) }}" method="post">
							        	{{ csrf_field() }}							        	
							        	<textarea name="editor2" class="form-control">{{ $introduce_classstep -> body }}</textarea>
							        	<!-- <input type="text" name="body"> -->
							        	<br>
							        	<center>
							          		<button type="submit" class="btn btn-info btn-sm">
							            		<span class="glyphicon glyphicon-ok"></span> 送出新增
							          		</button>
							        	</center>
							      		</form> 
					          @endforeach

					          
					        </div>
					        <div class="modal-footer">
					          <button type="button" class="btn btn-primary" data-dismiss="modal">關閉</button>
					        </div>
					      </div>
					    </div>
					  </div>
			    	</div>
			    	<!-- Q&A -->
					<div class="modal fade" id="myModal3" role="dialog">
					    <div class="modal-dialog modal-lg">
					      <div class="modal-content">
					        <div class="modal-header">
					          <button type="button" class="close" data-dismiss="modal">&times;</button>
					          <h4 class="modal-title">常見問題</h4>
					        </div>
					        <div class="modal-body">
								<!-- <div class="panel-group" id="accordion">
									@foreach($introduce_questions as $introduce_question)
										<div class="panel panel-default">
	     									<div class="panel-heading">
	        									<h4 class="panel-title">
	          										<a data-toggle="collapse" data-parent="#accordion" href="#{{$introduce_question->id}}">{{$introduce_question->question}}</a>
	        									</h4>
	      									</div>
	      									<div id="{{$introduce_question->id}}" class="panel-collapse collapse">
	        									<div class="panel-body">{{$introduce_question->answer}}</div>
	      									</div>
	    								</div>
									@endforeach
								</div> -->
								@foreach($introduce_questions as $introduce_question)
									<ul>
										<div class="row">
											<div class="col-sm-10">
												<li style="margin-left: 5%;">
													<p style="font-size: 15px;">Question : {{$introduce_question->question}}</p>
													<br>
													<div id="{{$introduce_question->id}}" class="collapse">
										    			Answer : {{$introduce_question->answer}}
										  			</div>
												</li>
											</div>
											<div class="col-sm-2">
												<button type="buttom" class="btn btn-primary btn-sm" data-toggle="collapse" data-target="#{{$introduce_question->id}}">
                									<span class="glyphicon glyphicon-chevron-down"></span> 查看詳情
              									</button>
											</div>
										</div>
										  	<hr>

									</ul>
								@endforeach
					        </div>
					        <div class="modal-footer">
										@if (Auth::guest())
					        	<button type="button" class="btn btn-primary" data-dismiss="modal">關閉</button>
											@else
											<a href="{{ url('/introduce/edit') }}" class="btn btn-warning" role="button"><span class="glyphicon glyphicon-pencil"></span>&nbsp;新增與編輯</a>
						          	<button type="button" class="btn btn-primary" data-dismiss="modal">關閉</button>
												@endif
					        </div>
					      </div>
					    </div>
					</div>
					<!-- 相關法規與表格 -->
					<div class="modal fade" id="myModal4" role="dialog">
					    <div class="modal-dialog ">
					      <div class="modal-content">
					        <div class="modal-header">
					          <button type="button" class="close" data-dismiss="modal">&times;</button>
					          <h4 class="modal-title">相關表格與法規</h4>
					        </div>
					        <div class="modal-body">
								<!-- <ul>
								  <li>
								  	<p>Q:開課帳號如何取得?</p>
								  	<p>A:將申請表下載，填寫完交至教務處申請</p>
								  </li>
								</ul>
								<br>
								<ul>
								  <li>
								  	<p>Q:一個單位只能申請一個帳號嗎?</p>
								  	<p>A:一個單位可以申請很多不同帳號</p>
								  </li>
								</ul>
								<br>
								<ul>
								  <li>
								  	<p>Q:開課的申請單要去哪裡找?</p>
								  	<p>A:在這裡</p>
								  </li>
								</ul>
								<br>
								<ul>
								  <li>
								  	<p>相關法規</p>
								  	<p>
								  		<a target="_blank" href="{{asset('img/introduce/rules.pdf')}}">微學分採認課程申請_開課單位</a>
								  		<a target="_blank" href="{{asset('img/introduce/rules.pdf')}}">微學分開課辦法</a>
								  	</p>
								  </li>
								</ul> -->
								  <div class="panel-group">
								    <div class="panel panel-default">
								      <div class="panel-heading">表格下載</div>
								      <div class="panel-body">
								      	<ul>
								      		<li><a target="_blank" href="{{asset('document/openclass.docx')}}">微學分採認課程申請_開課單位</a></li><br>
								      		<li><a target="_blank" href="{{asset('document/ClassAccount.doc')}}">開課單位帳號權限申請表</a></li><br>
								      		<li><a target="_blank" href="{{asset('document/result.docx')}}">成果發表申請表_學生</a></li><br>
								      		<li><a target="_blank" href="{{asset('document/teacher.docx')}}">導師獎勵工作簡述表</a></li>
								      	</ul>
								      </div>
								    </div>
								    <div class="panel panel-default">
								      <div class="panel-heading">相關法規</div>
								      <div class="panel-body">
								      	<ul>
								      		<li><a target="_blank" href="{{asset('document/rules.pdf')}}">國立中央大學微學分實施要點v32</a></li>
								      	</ul>
								      </div>
								    </div>
								  </div>
					        </div>
					        <div class="modal-footer">
					          <button type="button" class="btn btn-primary" data-dismiss="modal">關閉</button>
					        </div>
					      </div>
					    </div>
					</div>
			</div>
		</div>
	</div>
@endsection

@section('css')
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<style type="text/css">
		h4{
			font-weight: bold;
			text-align: center;
		}
		/*標題*/
		.title{
			width: 750px;
			height: 150px;
			margin-left: 17%;
		}

		.page-header{
			font-size: 35px;
			margin-top: 80px;
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
		.content-title{
			background-color: #3d9ba3;
			width: 100%;
			height: 33px;
			padding: 5px 0 5px 15px;
		}

		.step-title{
			font-size: 15px;
			font-weight: bold;
		}

		.open-img{
			width: 70%;
		}
	</style>
@endsection

@section('js')
	<script src="https://cdn.ckeditor.com/4.7.3/standard/ckeditor.js"></script>
	<script>
		CKEDITOR.replace( 'editor1' );
		CKEDITOR.replace( 'editor2' );
	</script>
@endsection



