<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="description" content="HomePage">
    <meta name="author" content="samuelyeah">

    <title>Freelancer - Start Bootstrap Theme</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- 最新版本的 Bootstrap 核心 CSS 文件 -->
	<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- 可选的 Bootstrap 主题文件（一般不用引入） -->
	<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
	<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>

<body id="page-top" class="index">
<div id="skipnav"><a href="#maincontent">Skip to main content</a></div>

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <a class="navbar-brand" href="{{ url('/Homepage') }}"><span><img src="http://www.ncu.edu.tw/assets/thumbs/pic/df1dfaf0f9e30b8cc39505e1a5a63254.png" height="25" width="25" ></span>微學分首頁</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse ">
                <ul class="nav navbar-nav navbar-right ">
                    <li class="page-scroll"><a href="{{ url('/introduce') }}">簡介</a></li>
					<li class="page-scroll"><a href="{{url('/check')}}">審核單位入口</a></li>
                    <li class="page-scroll"><a href="{{url('/openclass')}}">開課單位入口</a></li>
                    <li class="page-scroll"><a href="{{ url('/student') }}">學生單位入口</a></li>
                    <li class="page-scroll"><a href="{{ url('/record') }}">歷年紀錄</a></li>
                    <li class="page-scroll"><a href="{{ url('/form') }}">表單下載</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <br>
        <br>
        <br>
    </header>

    <!-- Portfolio Grid Section -->
    <section >
        <div class="container">

            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>公告區</h2>
                    <hr class="star-primary">
                </div>
            </div>

            <ul class="nav nav-tabs">
                 <li class="active"><a data-toggle="tab" href="#tab1">最新公告</a></li>
                 <li><a data-toggle="tab" href="#tab2">課程公告</a></li>
                 <li><a data-toggle="tab" href="#tab3">審查結果</a></li>
                 <li><a data-toggle="tab" href="#tab4">優異結果</a></li>
            </ul>

			<div class="tab-content">

				<div class="panel panel-default tab-pane active " id="tab1">
			  		<div class="panel-body"  style="height:350px;">
			    		這邊沒有任何的公告
			  		</div>
				</div>

				<div class="panel panel-default tab-pane  " id="tab2">
			  		<div class="panel-body"   style="height:350px;">
			    		Basic panel example2
			  		</div>
				</div>

				<div class="panel panel-default tab-pane  " id="tab3">
			  		<div class="panel-body"  style="height:350px;">
			    		Basic panel example3
			  		</div>
				</div>

				<div class="panel panel-default tab-pane  " id="tab4">
			  		<div class="panel-body"  style="height:350px;">
			    		Basic panel example4
			  		</div>
				</div>
			</div>


        </div>
    </section>

    <!-- About Section -->
    <section class="success" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>相關單位連結</h2>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row text-center">
                <div class="col-lg-4" style="background-color: #F65314; height:150px;">
                    <h3>相關網站</h3>
                    <p>區塊：左</p>
                </div>
                <div class="col-lg-4" style="background-color: #7CBB00 ; height:150px;">
                    <h3>相關網站</h3>
                    <p>區塊：中</p>
                </div>
                <div class="col-lg-4" style="background-color: #FFBB00; height:150px;">
                    <h3>相關網站</h3>
                    <p>區塊：右</p>
                </div>

            </div>
        </div>
    </section>
    
    <!-- Footer -->
    <footer class="text-center" style="background-color: #00A1F1">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">
                        <h3>相關電話</h3>
                        <p class="col-md-6 text-right">總機電話：</p>
                        <p class="col-md-6 text-left">886-3-4227151</p>
                        <p class="col-md-6 text-right">教務長室：</p>
                        <p class="col-md-6 text-left">57101(分機)</p>
                        <p class="col-md-6 text-right">教發中心：</p>
                        <p class="col-md-6 text-left">57131(分機)</p>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>其他網站</h3>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>關於網站</h3>
                        <p style="font-size: 18px">網站試營運中，如有任何bug<br>歡迎提出以利我們修正錯誤</p>
                    </div>
                </div>
            </div>
        </div
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; 大數據暨程式開發研究社 2017
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

    <!-- Portfolio Modals -->

</body>

</html>
