@extends('layouts.app0')

@section('title','微學分簡介')

@section('content')
	<!--標題-->
		<div class="page-header">
			<center>微學分簡介</center>
		</div>
	<!--中間四個Button-->
		<div class="row" style="margin-top: 10%;">
		<!--button-->
			<div class="col-md-3">
				<div class="thumbnail">
				    <a  data-toggle="modal" data-target="#myModal1">
				        <img src="{{asset('img/introduce/5.jpg')}}" alt="Lights" style="width:100%" class="imgbutton">
				        <div class="caption">
				          <center>開課類型</center>
				        </div>
				    </a>
				</div>
			</div>
			<div class="col-md-3">
				<div class="thumbnail">
				    <a  data-toggle="modal" data-target="#myModal2">
				        <img src="{{asset('img/introduce/5.jpg')}}" alt="Lights" style="width:100%" class="imgbutton">
				        <div class="caption">
				          <center>開課流程</center>
				        </div>
				    </a>
				</div>
			</div>
			<div class="col-md-3">
				<div class="thumbnail">
				    <a  data-toggle="modal" data-target="#myModal3">
				        <img src="{{asset('img/introduce/5.jpg')}}" alt="Lights" style="width:100%" class="imgbutton">
				        <div class="caption">
				          <center>常見問題</center>
				        </div>
				    </a>
				</div>
			</div>
			<div class="col-md-3">
				<div class="thumbnail">
				      <a  data-toggle="modal" data-target="#myModal4">
				        <img src="{{asset('img/introduce/5.jpg')}}" alt="Lights" style="width:100%" class="imgbutton">
				        <div class="caption">
				          <center>相關法規與表格</center>
				        </div>
				      </a>
				</div>
			</div>
				
			<!-- Modal -->
				<!-- 開課類型的Modal -->
				<div class="modal fade" id="myModal1" role="dialog">
					<div class="modal-dialog modal-lg">
					    <div class="modal-content">
					     	<div class="modal-header">
					          <button type="button" class="close" data-dismiss="modal">&times;</button>
					          <h4 class="modal-title">開課類型</h4>
					        </div>
					        <div class="modal-body">
					        	@foreach($introduce_classtypes as $introduce_classtype)
					        		<div class="panel panel-default">
					        			<div class="panel-heading">
					        				<center>頁面內容</center>
					        			</div>
					        			<div class="panel-body">
					        					<?php
												$str = $introduce_classtype['body'];
												echo $str;
											?>
					        			</div>
					        		</div>
									<br>
									<form action="{{ asset('/authrize/menu/introduce/'.$introduce_classtype->id) }}" method="post">
							        	{{ csrf_field() }}
										<textarea id="ckeditor1" class="ckeditor" name="editor1">{{ $introduce_classtype -> body }}</textarea>
								        <script type="text/javascript">
								            CKEDITOR.replace( 'ckeditor1' );
								        </script>
								        <br>
							        	<center>
							          		<button type="submit" class="btn btn-info btn-sm">
							            		<span class="glyphicon glyphicon-ok"></span> 編輯完成
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
				<!-- 開課流程的Modal -->
				<div class="modal fade" id="myModal2" role="dialog">
					<div class="modal-dialog modal-lg">
					    <div class="modal-content">
					        <div class="modal-header">
					          <button type="button" class="close" data-dismiss="modal">&times;</button>
					          <h4>開課流程</h4>
					        </div>
					        <div class="modal-body">
					      	  	@foreach($introduce_classsteps as $introduce_classstep)
					      	  		<div class="panel panel-default">
					      	  			<div class="panel-heading">
					      	  				<center>頁面內容</center>
					      	  			</div>
					      	  			<div class="panel-body">
											<?php
												$str1 = $introduce_classstep['body'];
												echo $str1;
											?>
										</div>
									</div>
									<br>
									<form action="{{ asset('/authrize/menu/introduce/step'.$introduce_classstep->id) }}" method="post">
							        	{{ csrf_field() }}
											<textarea id="ckeditor2" class="ckeditor" name="editor2">{{ $introduce_classstep -> body }}</textarea>
								            <script type="text/javascript">
								                CKEDITOR.replace( 'ckeditor2' );
								            </script>
								            <br>
							        		<center>
							          			<button type="submit" class="btn btn-info btn-sm">
							            			<span class="glyphicon glyphicon-ok"></span> 編輯完成
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
			    <!-- Q&A的Modal -->
				<div class="modal fade" id="myModal3" role="dialog">
					<div class="modal-dialog modal-lg">
					    <div class="modal-content">
					        <div class="modal-header">
					          <button type="button" class="close" data-dismiss="modal">&times;</button>
					          <h4 class="modal-title">常見問題</h4>
					        </div>
					        <div class="modal-body">
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
								<a href="{{ url('/authrize/menu/introduce/edit') }}" class="btn btn-warning" role="button"><span class="glyphicon glyphicon-pencil"></span>&nbsp;新增與編輯</a>
						        <button type="button" class="btn btn-primary" data-dismiss="modal">關閉</button>
					        </div>
					  	</div>
					</div>
				</div>
				<!-- 相關法規與表格的Modal -->
				<div class="modal fade" id="myModal4" role="dialog">
					<div class="modal-dialog ">
					    <div class="modal-content">
					        <div class="modal-header">
					          	<button type="button" class="close" data-dismiss="modal">&times;</button>
					          	<h4 class="modal-title">相關表格與法規</h4>
					        </div>
					        <div class="modal-body">
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

		.imgbutton{
			opacity: 1;
			-webkit-transition: .3s ease-in-out;
			transition: .3s ease-in-out;
		}

		.imgbutton:hover{
			opacity: 0.5;
		}

	</style>
@endsection

@section('js')
	<script src="{{asset('/ckeditor/ckeditor/ckeditor.js')}}"></script>
@endsection
