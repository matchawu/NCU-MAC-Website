<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>中央大學微學分 | 最新公告</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('vendor/news/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('css/news/modern-business.css')}}" rel="stylesheet">
  
  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="{{ url('/entry') }}"><img src="http://www.ncu.edu.tw/assets/thumbs/pic/df1dfaf0f9e30b8cc39505e1a5a63254.png" height="25" width="25" >中央大學微學分系統</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
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

    <header>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active" style="background-image: url('https://s-media-cache-ak0.pinimg.com/originals/90/a7/4c/90a74c013f3f1bec2d6e6178676acbd2.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h3>Python程式設計入門課程上線!</h3>
              <p>快來參與課程學習全球最夯的程式語言吧!</p>
            </div>
          </div>
          <!-- http://placehold.it/1900x1080 -->
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('http://cdn.pcwallart.com/images/bear-wallpaper-7.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h3>微學分系統使用說明會</h3>
              <p>中大最新的微學分系統上線了! 如何使用呢?</p>
            </div>
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('http://7wallpapers.net/wp-content/uploads/13_bear-wallpaper.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h3>微學分平台上線了!</h3>
              <p>什麼是微學分?要怎麼使用這個平台?</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </header>

    <!-- Page Content -->
    <div class="container">
    <br>
      <center>
        <h1 class="my-4">最新公告</h1>
      </center>
    <br>

      <div class="list-group " style="overflow-y:scroll;height:400px" >

        @foreach ($news as $news)
        <a data-toggle="modal" data-target="#News{{$news->id}}" >
          <span class="list-group-item"><?php
              $timestamp = strtotime($news->created_at) + 8*60*60;
              $time = date('Y-m-d', $timestamp);
            ?>
          {{$time}} {{$news->title}}   {{$news->subtitle}}</span>
          

        </a>
  
          <div class="modal fade" id="News{{$news->id}}" role="dialog">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" style="margin:0px auto;">{{$time}} {{$news->title}}</h4>
                    <span class="modal-title" style="text-align: right;"><strong>公告</strong></span>
                  </div>
                  <div class="modal-body">
                    <ul style="list-style-type: none;">
                     {!!$news->content!!}
                </ul>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">關閉</button>
                  </div>
                </div>
              </div>
          </div>


        @endforeach
      </div>


      <!-- Marketing Icons Section -->
      <!-- <div class="row">
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header">台灣聯合大學系統開放系統學校學生跨校申請修讀學分學程公告</h4>
            <div class="card-body">
              <p class="card-text">台灣聯合大學系統開放系統學校學生跨校申請修讀學分學程公告</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-info">更多資訊</a>
            </div>
          </div>
        </div> -->
        <!-- <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header">歡迎同學申請</h4>
            <div class="card-body">
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis ipsam eos, nam perspiciatis natus commodi similique totam consectetur praesentium molestiae atque exercitationem ut consequuntur, sed eveniet, magni nostrum sint fuga.</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-info">Learn More</a>
            </div>
          </div>
        </div> -->
        <!-- <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header">Card Title</h4>
            <div class="card-body">
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-info">Learn More</a>
            </div>
          </div>
        </div>
      </div> -->
      <!-- /.row -->
      
    

      <br>
      <br>

      <!-- Portfolio Section -->
      <center>
        <h2>最新課程</h2>
      </center>
      <br>

      <div class="row">
        
      

      <section class="p-0" id="portfolio">
      @if(isset($module_class))
      <div class="container-fluid">
        <div class="row no-gutter popup-gallery">
          @foreach ($module_class as $module_class)
          <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="https://africanzebra.files.wordpress.com/2012/11/zebra-6-700-x-400.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">{{$module_class->name}}</a>
              </h4>
              <p class="card-text">{{$module_class->class_intro}}</p>
            </div>
          </div>
        </div>
          @endforeach
          @if(count($module_class)<3)
          @for($i=0 ; $i<2-(count($module_class));$i++)
          <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="https://africanzebra.files.wordpress.com/2012/11/zebra-6-700-x-400.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">資料過少</a>
              </h4>
              <p class="card-text">資料過少</p>
            </div>
          </div>
        </div>
          @endfor
          @endif
          @foreach ($single_class as $single_class)
          <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="https://orig00.deviantart.net/244a/f/2010/225/f/2/the_world__700_by_400_by_hecatologue.png" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">{{$single_class->name}}</a>
              </h4>
              <p class="card-text">{{$single_class->class_intro}}</p>
            </div>
          </div>
        </div>
          @endforeach
          @if(count($single_class)<3)
          @for($i=0 ; $i<2-(count($single_class));$i++)
          <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="https://orig00.deviantart.net/244a/f/2010/225/f/2/the_world__700_by_400_by_hecatologue.png" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">資料不足</a>
              </h4>
              <p class="card-text">資料不足</p>
            </div>
          </div>
        </div>
          @endfor
          @endif

        </div>


      @else
      <p>目前無成果可顯示!</p>
      @endif

    </section>
    </div>
      <!-- /.row -->

      <!-- Features Section -->
      <!-- <div class="row">
        <div class="col-lg-6">
          <h2>Modern Business Features</h2>
          <p>The Modern Business template by Start Bootstrap includes:</p>
          <ul>
            <li>
              <strong>Bootstrap v4</strong>
            </li>
            <li>jQuery</li>
            <li>Font Awesome</li>
            <li>Working contact form with validation</li>
            <li>Unstyled page elements for easy customization</li>
          </ul>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, omnis doloremque non cum id reprehenderit, quisquam totam aspernatur tempora minima unde aliquid ea culpa sunt. Reiciendis quia dolorum ducimus unde.</p>
        </div>
        <div class="col-lg-6">
          <img class="img-fluid rounded" src="http://placehold.it/700x450" alt="">
        </div>
      </div> -->
      <!-- /.row -->

      <hr>

      <!-- Call to Action Section -->
      <div class="row mb-4">
        <div class="col-md-8">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, expedita, saepe, vero rerum deleniti beatae veniam harum neque nemo praesentium cum alias asperiores commodi.</p>
        </div>
        <div class="col-md-4">
          <a class="btn btn-lg btn-secondary btn-block" href="#">Call to Action</a>
        </div>
      </div>

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
    <script src="{{ asset('vendor/news/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/news/popper/popper.min.js') }}"></script>
    <script src="{{ asset('vendor/news/bootstrap/js/bootstrap.min.js') }}"></script>

  </body>
<style type="text/css">
  
  
</style>
</html>
