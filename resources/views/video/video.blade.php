<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>中央大學微學分 | 課程影音</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('vendor/video/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('css/video/business-frontpage.css')}}" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="{{ url('/entry') }}"><img src="http://www.ncu.edu.tw/assets/thumbs/pic/df1dfaf0f9e30b8cc39505e1a5a63254.png" height="25" width="25" >中央大學微學分系統</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="{{ url('/News') }}">最新公告</a>
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

    <!-- Header with Background Image -->
    <header class="business-header">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
          <br>
          <br>
          <br>
            <h1 class="display-3 text-center text-white mt-4">課程影音</h1>
          </div>
        </div>
      </div>
    </header>

    <!-- Page Content -->
    <div class="container">

      <br>
      <div class="row">
        <div class="col-sm-4 my-4">
          <h2 id="all_tp">全部影音</h2>
          <h2 id="single_tp">個別課程</h2>
          <h2 id="module_tp">模組課程</h2>
        </div>
        <div class="col-sm-6 my-4">
        </div>
        <div class="col-sm-2 my-4">
          <div class="dropdown">
            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">篩選類別
            <span class="caret"></span></button>
            <ul class="dropdown-menu">
              <li><a href="#single" class="nav-link" onclick="openSingle()">個別課程</a></li>
              <li><a href="#module" class="nav-link" onclick="openModule()">模組課程</a></li>
              <li><a href="#all" class="nav-link" onclick="openAll()">全部課程</a></li>
            </ul>
          </div>
        </div>
      </div>

      <!-- <h2>全部成果</h2> -->
      <div class="row">
        @foreach ($single_classes as $single_class)
        @if( $single_class->video!=NULL )
        <div class="col-sm-4 my-4 single">
          <div class="card">
            <!-- <img class="card-img-top" src="http://placehold.it/300x200" alt=""> -->
            <div class="card-body">
              <h4 class="card-title">{{$single_class->name}}</h4>
              <p class="card-text">{{$single_class->class_intro}}</p>
            </div>
            <div class="card-footer">
              <a href="{{$single_class->video}}" class="btn btn-primary" target="_blank">影音連結</a>
            </div>
          </div>
        </div>
        @endif
        @endforeach


        @foreach ($module_classes as $module_class)
        @if( $module_class->video!=NULL )
        <div class="col-sm-4 my-4 module">
          <div class="card">
            <!-- <img class="card-img-top" src="http://placehold.it/300x200" alt=""> -->
            <div class="card-body">
              <h4 class="card-title">{{$module_class->name}}</h4>
              <p class="card-text">{{$module_class->class_intro}}</p>
            </div>
            <div class="card-footer">
              <a href="{{$module_class->video}}" class="btn btn-primary" target="_blank">影音連結</a>
            </div>
          </div>
        </div>
        @endif
        @endforeach




      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">版權所有 &copy; 大數據暨程式設計研究社 2017</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="{{asset('vendor/video/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('vendor/video/popper/popper.min.js')}}"></script>
    <script src="{{asset('vendor/video/bootstrap/js/bootstrap.min.js')}}"></script>

    <script type="text/javascript">
      function openAll() {
        $(".single").fadeIn("slow");
        $("#single_tp").css('display','none');
        $(".module").fadeIn("slow");
        $("#module_tp").css('display','none');
        $("#all_tp").fadeIn("slow");
      };
      function openSingle() {
          $(".single").fadeIn("slow");
          $("#single_tp").fadeIn("slow");
          $(".module").css("display","none");
          $("#module_tp").css("display","none");
          $("#all_tp").css('display','none');
      };
      function openModule() {
          $(".single").css("display","none");
          $(".module").fadeIn("slow");
          $("#module_tp").fadeIn("slow");

          $("#single_tp").css("display","none");
          $("#all_tp").css('display','none');
      };
    </script>

  </body>

</html>
