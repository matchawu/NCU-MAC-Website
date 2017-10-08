<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>國立中央大學自主微學分系統</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('vendor/home/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="{{asset('vendor/home/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="{{asset('vendor/home/magnific-popup/magnific-popup.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('css/home/creative.min.css')}}" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">中央大學微學分系統</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="{{ url('/Homepage') }}">最新公告</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="{{ asset('/introduce') }}">簡介</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="{{ url('/achievement') }}">成果展示</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="{{ url('/record') }}">課程查詢</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="{{ url('/video/video') }}">課程影音</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="{{ url('/application') }}">開課單位登入</a>
            </li>
            @if (Auth::guest())
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="{{ url('/authrize') }}">管理員登入</a>
            </li>
            @else
            <li class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle js-scroll-trigger" data-toggle="dropdown" role="button" aria-expanded="false" >
                管理員 您好
                <span class="caret"></span>
                <small class="tips"></small>
              </a>
              <ul class="dropdown-menu">
                <li>
                  <a href="{{ url('/authrize/menu') }}" class="nav-link waves-effect waves-light"><i class="fa fa-user" aria-hidden="true"> </i>功能主頁</a>
                </li>
                <li class="page-scroll navbtn">
                  <a href="{{ url('/logout') }}" class="nav-link" onclick="event.preventDefault();document.getElementById('logout-formm').submit();">
                    登出
                  </a>
                  <form id="logout-formm" action="{{ url('/logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                  </form>
                </li>
              </ul>
            </li>
            @endif

          </ul>
        </div>
      </div>
    </nav>

    <header class="masthead">
      <div class="header-content">
        <div class="header-content-inner">
          <h1 id="homeHeading">國立中央大學自主微學分系統</h1>
          <hr>
          <p>快來探索最新中央大學微學分系統，實現自主學習夢吧!</p>
          <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">查看更多</a>
        </div>
      </div>
    </header>

    <section class="bg-primary" id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading text-white">微學分是什麼 ?</h2>
            <hr class="light">
            <p class="text-faded">
              國立中央大學自主微學分系統提供師生及社群開課以及瀏覽課程的平台，期許師生在自主學習的過程中，能有更多元廣泛的管道獲取新時代知識。
              <!-- <a href="{{asset('/introduce')}}" class="text-faded">瞭解更多</a> -->
            </p>
            <a class="btn btn-default btn-xl js-scroll-trigger" href="{{asset('/introduce')}}">開始探索</a>
            <!-- href="#services" -->
          </div>
        </div>
      </div>
    </section>

    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">系統功能</h2>
            <hr class="primary">
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box">
              <a href="{{asset('Homepage')}}">
                <i class="fa fa-4x fa-diamond text-primary sr-icons"></i>
              </a>
              <h3>最新公告</h3>
              <p class="text-muted">最新的開課資訊及自主微學分活動都在這裡!</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box">
              <a href="{{asset('/achievement')}}">
                <i class="fa fa-4x fa-paper-plane text-primary sr-icons"></i>
              </a>
              <h3>成果展示</h3>
              <p class="text-muted">想知道歷年來有哪些優異作品嗎? 來成果展示區看看就對了!</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box">
              <a href="{{asset('/record')}}">
                <i class="fa fa-4x fa-newspaper-o text-primary sr-icons"></i>
              </a>
              <h3>課程查詢</h3>
              <p class="text-muted">想知道甚麼時段有什麼樣主題的課程嗎? 快到課程查詢頁搜尋看看吧!</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box">
              <a href="{{asset('/application')}}">
                <i class="fa fa-4x fa-heart text-primary sr-icons"></i>
              </a>
              <h3>開課平台</h3>
              <p class="text-muted">開課平台提供學生、師長以及社群開課的平台，快來開課平台宣傳自己的課程吧!</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="p-0" id="portfolio">
      <div class="container-fluid">
        <div class="row no-gutter popup-gallery">
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="{{asset('img/home/portfolio/fullsize/1.jpg')}}">
              <img class="img-fluid" src="{{asset('img/home/portfolio/thumbnails/1.jpg')}}" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                  <div class="project-name">
                    Project Name
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="{{asset('img/home/portfolio/fullsize/2.jpg')}}">
              <img class="img-fluid" src="{{asset('img/home/portfolio/thumbnails/2.jpg')}}" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                  <div class="project-name">
                    Project Name
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="{{asset('img/home/portfolio/fullsize/3.jpg')}}">
              <img class="img-fluid" src="{{asset('img/home/portfolio/thumbnails/3.jpg')}}" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                  <div class="project-name">
                    Project Name
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="{{asset('img/home/portfolio/fullsize/4.jpg')}}">
              <img class="img-fluid" src="{{asset('img/home/portfolio/thumbnails/4.jpg')}}" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                  <div class="project-name">
                    Project Name
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="{{asset('img/home/home/portfolio/fullsize/5.jpg')}}">
              <img class="img-fluid" src="{{asset('img/home/portfolio/thumbnails/5.jpg')}}" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                  <div class="project-name">
                    Project Name
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="{{asset('img/home/portfolio/fullsize/6.jpg')}}">
              <img class="img-fluid" src="{{asset('img/home/portfolio/thumbnails/6.jpg')}}" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                  <div class="project-name">
                    Project Name
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>

    <div class="call-to-action bg-dark">
      <div class="container text-center">
        <h2>我想看更多歷年優異成果!</h2>
        <a class="btn btn-default btn-xl sr-button" href="{{asset('/achievement')}}">前往查看</a>
      </div>
    </div>

    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading">聯絡我們</h2>
            <hr class="primary">
            <p>想知道更多的資訊或是有疑問想要問我們，歡迎透過以下聯絡方式跟我們聯繫!</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 ml-auto text-center">
            <i class="fa fa-phone fa-3x sr-contact"></i>
            <p>123-456-6789</p>
          </div>
          <div class="col-lg-4 mr-auto text-center">
            <i class="fa fa-envelope-o fa-3x sr-contact"></i>
            <p>
              <a href="mailto:your-email@your-domain.com">feedback@startbootstrap.com</a>
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Bootstrap core JavaScript -->
    <script src="{{asset('vendor/home/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('vendor/home/popper/popper.min.js')}}"></script>
    <script src="{{asset('vendor/home/bootstrap/js/bootstrap.min.js')}}"></script>

    <!-- Plugin JavaScript -->
    <script src="{{asset('vendor/home/jquery-easing/jquery.easing.min.js')}}"></script>
    <script src="{{asset('vendor/home/scrollreveal/scrollreveal.min.js')}}"></script>
    <script src="{{asset('vendor/home/magnific-popup/jquery.magnific-popup.min.js')}}"></script>

    <!-- Custom scripts for this template -->
    <script src="{{asset('js/home/creative.min.js')}}"></script>

  </body>

</html>
