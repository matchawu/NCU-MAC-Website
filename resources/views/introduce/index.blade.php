<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>中央大學微學分系統</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    
    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="{{asset('css/introduce/agency.min.css')}}" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav" style="background-color: #FFF; height: 55px;">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="{{ url('/entry') }}"><b>中央大學微學分系統</b></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="{{ url('/Homepage') }}"><b>最新公告</b></a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="{{ asset('/introduce') }}"><b>簡介</b></a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="{{ url('/achievement') }}"><b>成果展示</b></a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="{{ url('/record') }}"><b>課程查詢</b></a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="{{ url('/video/video') }}"><b>課程影音</b></a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="{{ url('/application') }}"><b>開課單位登入</b></a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="{{ url('/authrize') }}"><b>管理員登入</b></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead" style="background-image: url('{{asset('img/introduce/header-bg.jpg')}}');">
      <div class="container">
        <div class="intro-text">
          <div class="intro-lead-in">簡介</div>
          <div class="intro-lead-in">About Mac-Website</div>
          <!-- <a class="btn btn-xl js-scroll-trigger" href="#portfolio">Tell Me More</a> -->
        </div>
      </div>
    </header>

 

    <!-- Portfolio Grid -->
    <section class="bg-light" id="portfolio">
      <div class="container">
        <div class="row">
<!--           <div class="col-lg-12 text-center">
            <h2 class="section-heading">簡介</h2>
            <h3 class="section-subheading text-muted">About Mac-Website</h3>
          </div> -->
        </div>
        <div class="row">
          <div class="col-md-3 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="{{asset('img/introduce/01-thumbnail.jpg')}}" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>課程類型</h4>
              <p class="text-muted">Catagory</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="{{asset('img/introduce/02-thumbnail.jpg')}}" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>開課流程</h4>
              <p class="text-muted">Steps</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="{{asset('img/introduce/03-thumbnail.jpg')}}" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>相關問題</h4>
              <p class="text-muted">Q & A</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="{{asset('img/introduce/04-thumbnail.jpg')}}" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>相關辦法與表格</h4>
              <p class="text-muted">Rules & Form</p>
            </div>
          </div>
        </div>
      </div>
    </section>



    <!-- Portfolio Modals -->

    <!-- Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <h2>課程類型</h2>
                  <p class="item-intro text-muted">Catagory</p>
                  <hr>
                  <!-- Project Details Go Here -->
                  	@foreach($introduce_classtypes as $introduce_classtype)
					  <?php
						$str = $introduce_classtype['body'];
						echo $str;
					  ?>
					@endforeach
					<hr>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Close Project</button>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  	<h2>開課流程</h2>
                  	<p class="item-intro text-muted">Steps</p>
                  	<hr>
                  	<br>
                  	@foreach($introduce_classsteps as $introduce_classstep)
						<?php
							$str1 = $introduce_classstep['body'];
							echo $str1;
						?>
					@endforeach
					<hr>
                  	<button class="btn btn-primary" data-dismiss="modal" type="button">
                    	<i class="fa fa-times"></i>
                    	Close Project
                    </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2>相關問題</h2>
                  <p class="item-intro text-muted">Q & A</p>
                  <hr>
                  	@foreach($introduce_questions as $introduce_question)
					  <ul>
						<div class="row">
						  <div class="col-sm-10">
							<li style="margin-left: 5%;">
							  <p style="font-size: 15px;">
							  	Question : {{$introduce_question->question}}
							  </p>
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
						<br>
						<br>
					  </ul>
					@endforeach
				  <hr>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Close Project</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 4 -->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2>相關辦法與表格</h2>
                  <p class="item-intro text-muted">Rules & Forms</p>
                  <img class="img-fluid d-block mx-auto" src="img/portfolio/04-full.jpg" alt="">
                  <hr>
                  <p>
					<h3>表格下載</h3>
					  <br>
					  <ul>
						<li><a target="_blank" href="{{asset('document/openclass.docx')}}">微學分採認課程申請_開課單位</a></li><br>
						<li><a target="_blank" href="{{asset('document/ClassAccount.doc')}}">開課單位帳號權限申請表</a></li><br>
						<li><a target="_blank" href="{{asset('document/result.docx')}}">成果發表申請表_學生</a></li><br>
						<li><a target="_blank" href="{{asset('document/teacher.docx')}}">導師獎勵工作簡述表</a></li>
					  </ul>
					  <br>
					<h3>相關法規</h3>
					  <br>
					  <ul>
						<li><a target="_blank" href="{{asset('document/rules.pdf')}}">國立中央大學微學分實施要點v32</a></li>
					  </ul>			      
                  </p>
                  <hr>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Close Project</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="{{asset('js/introduce/jquery.min.js')}}"></script>
    <script src="{{asset('js/introduce/popper.min.js')}}"></script>
    <script src="{{asset('js/introduce/bootstrap.min.js')}}"></script>

    <!-- Plugin JavaScript -->
    <script src="{{asset('js/introduce/jquery.easing.min.js')}}"></script>

    <!-- Contact form JavaScript -->
    <script src="{{asset('js/introduce/jqBootstrapValidation.js')}}"></script>
    <script src="{{asset('js/introduce/contact_me.js')}}"></script>

    <!-- Custom scripts for this template -->
    <script src="{{asset('js/introduce/agency.min.js')}}"></script>

  </body>

</html>
