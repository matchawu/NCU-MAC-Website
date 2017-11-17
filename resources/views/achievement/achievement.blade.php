<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>中央大學微學分 | 成果展示</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('vendor/achievement/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('css/achievement/business-frontpage.css')}}" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="{{ url('/entry') }}"><img src="http://www.ncu.edu.tw/assets/thumbs/pic/df1dfaf0f9e30b8cc39505e1a5a63254.png" height="25" width="25" >自主學習微學分</a>
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
            <h1 class="display-3 text-center text-white mt-4">成果展示</h1>
          </div>
        </div>
      </div>
    </header>

    <!-- Page Content -->
    <div class="container">


      <br>
      <div class="row">
        <div class="col-md-10 my-4">
        </div>
        <div class="col-md-2 my-4">
          <button type="button" class="btn" onclick="openSearch()">查詢成果</button>
        </div>

        <div class="col-md-3 my-4">
        </div>
        <div class="col-md-8" id="search">
          <form class="form-horizontal" action="{{ url('achievement/search') }}" method="post">
            {{ csrf_field() }}
            <div class="form-group">
              <label class="control-label col-md-4">發表學期:</label>
              <div class="col-md-10">
                <input type="text" class="form-control" id="term" placeholder="ex.106-1" name="term">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-4">召集人:</label>
              <div class="col-md-10">
                <input type="text" class="form-control" id="gather_name" placeholder="請輸入召集人姓名" name="gather_name">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-4">社群類別:</label>

              <select class=" form-control search" style="margin-left: 15px;" name="field" id="field">
                <option>同領域(同院、系)</option>
                <option>跨領域(跨院、校)</option>
              </select>
            </div>
            <div class="form-group">
              <label class="control-label col-md-4">成果主題:</label>
              <div class="col-md-10">
                <input type="text" class="form-control" id="result_topic" placeholder="" name="result_topic">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-4">關鍵字:</label>
              <div class="col-md-10">
                <input type="text" class="form-control" id="keyword" placeholder="" name="keyword">
              </div>
            </div>

            <div class="form-group">
              <div class="col-md-offset-2 col-md-10">
              <center>
                <button type="submit" class="btn btn-default" onclick="openResult()">查詢</button>
                <button type="button" class="btn" onclick="exitSearch()">關閉</button>
              </center>
              </div>
            </div>
          </form>
        </div>
      </div>

      <!-- search result -->
      @if(isset($search_achievements))
      <div class="col-md-4 my-4" id="result">
        <h2>查詢結果</h2>
      </div>
      @endif
      <div class="row">
        @if(isset($search_achievements))
          @if($search_achievements->isEmpty())
          <div class="col-md-4 my-4">
            <h4>查無結果!</h4>
          </div>
          @else
          @foreach ($search_achievements as $search_achievement)
          <div class="col-md-4 my-4" id="{{$search_achievement->id}}">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">{{$search_achievement->result_topic}}</h4>
                <p class="card-text">{{$search_achievement->result_intro}}</p>
              </div>
              <div class="card-footer">
                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#result{{$search_achievement->id}}">查看詳情</a>
              </div>
            </div>
          </div>


        <!-- Modal -->
        <div id="result{{$search_achievement->id}}" class="modal fade" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">{{$search_achievement->result_topic}}</h4>
              </div>
              <div class="modal-body">
                <p class="mb_text">成果介紹 :</p>
                <p>{{$search_achievement->result_intro}}</p>
                <p class="mb_text">發表學期 :</p>
                <p>{{$search_achievement->term}}</p>
                <p class="mb_text">召集人 :</p>
                <p>{{$search_achievement->gather_name}}</p>
                <p class="mb_text">系級 :</p>
                <p>{{$search_achievement->gather_grade}}</p>
                <p class="mb_text">成員 :</p>
                <p>{{$search_achievement->member1_name}}、{{$search_achievement->member2_name}}</p>
                <p class="mb_text">社群類別 :</p>
                <p>{{$search_achievement->field}}</p>
                <p class="mb_text">學習反思與效益 :</p>
                <p>{{$search_achievement->result_achievement}}</p>
                <p class="mb_text">執行所遇之困難 :</p>
                <p>{{$search_achievement->result_difficulty}}</p>
                <p class="mb_text">關鍵字 :</p>
                <p>{{$search_achievement->keyword}}</p>
                <p class="mb_text">作品附件連結 :</p>
                <p><a href="{{$search_achievement->accociate}}">{{$search_achievement->accociate}}</a></p>
                <p class="mb_text">成果上傳時間 :</p>
                <p>{{$search_achievement->created_at}}</p>
              </div>
              @if (Auth::guest())
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
              @else
              <div class="modal-footer">
                <!-- <center> -->
                  <button type="button" class="btn btn-info" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> 關閉</button>
                  <a href="{{ url('/achievement/edit') }}/{{$search_achievement->id}}">
                    <button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-pencil"></span> 編輯</button>
                  </a>
                <!-- </center> -->
              </div>
              @endif
            </div>

          </div>
        </div>

        @endforeach
        @endif
        @endif
      </div>
      <!-- /.row -->

      <!-- default -->

      <div class="col-md-4 my-4">
        <h2>全部成果</h2>
      </div>

      <div class="row">
        @if(isset($achievements))
        @foreach ($achievements as $achievement)
        <div class="col-md-4 my-4" id="{{$achievement->id}}">
          <div class="card">
            <!-- <img class="card-img-top" src="http://placehold.it/300x200" alt=""> -->
            <div class="card-body">
              <h4 class="card-title">{{$achievement->result_topic}}</h4>
              <p class="card-text">{{$achievement->result_intro}}</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#result{{$achievement->id}}">查看詳情</a>
            </div>
          </div>
        </div>


        <!-- Modal -->
        <div id="result{{$achievement->id}}" class="modal fade" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">{{$achievement->result_topic}}</h4>
              </div>
              <div class="modal-body">
                <p class="mb_text">成果介紹 :</p>
                <p>{{$achievement->result_intro}}</p>
                <p class="mb_text">發表學期 :</p>
                <p>{{$achievement->term}}</p>
                <p class="mb_text">召集人 :</p>
                <p>{{$achievement->gather_name}}</p>
                <p class="mb_text">系級 :</p>
                <p>{{$achievement->gather_grade}}</p>
                <p class="mb_text">成員 :</p>
                <p>{{$achievement->member1_name}}、{{$achievement->member2_name}}</p>
                <p class="mb_text">社群類別 :</p>
                <p>{{$achievement->field}}</p>
                <p class="mb_text">學習反思與效益 :</p>
                <p>{{$achievement->result_achievement}}</p>
                <p class="mb_text">執行所遇之困難 :</p>
                <p>{{$achievement->result_difficulty}}</p>
                <p class="mb_text">關鍵字 :</p>
                <p>{{$achievement->keyword}}</p>
                <p class="mb_text">作品附件連結 :</p>
                <p><a href="{{$achievement->accociate}}">{{$achievement->accociate}}</a></p>
              </div>
              @if (Auth::guest())
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
              @else
              <div class="modal-footer">
                <!-- <center> -->
                  <button type="button" class="btn btn-info" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> 關閉</button>
                  <a href="{{ url('/achievement/edit') }}/{{$achievement->id}}">
                    <button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-pencil"></span> 編輯</button>
                  </a>
                <!-- </center> -->
              </div>
              @endif
            </div>

          </div>
        </div>

        @endforeach
        @else
        目前無結果可以顯示!
        @endif
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
    <script src="{{asset('vendor/achievement/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('vendor/achievement/popper/popper.min.js')}}"></script>
    <script src="{{asset('vendor/achievement/bootstrap/js/bootstrap.min.js')}}"></script>

    <script>
    // $(document).ready(function(){
    //   $("#{{$achievement->id}}").fadeIn("slow");
    // });
    function openSearch() {
        // document.getElementById("search").innerHTML = "YOU CLICKED ME!";
        // var i=1;
        // if(i%2 == 1){
        //   $("#search").css("display", "block");
        //   i++;
        // }else{
        //   $("#search").css("display", "none");
        //   i++;
        // }
        $("#search").fadeIn("slow");

    }
    function exitSearch() {
      $("#search").fadeOut("slow");
    }
    // function openResult() {
    //   $("#result").fadeIn("slow");
    // }
    </script>
  </body>

</html>
