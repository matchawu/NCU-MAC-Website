@extends('layouts.app')

@section('title', '首頁')

@section('content')

    
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
                    <h1>公告區</h1>
                    <hr class="star-primary">
                </div>
            </div>

            <ul class="nav nav-tabs">
                 <li class="active"><a data-toggle="tab" href="#tab1">最新公告</a></li>
                 <li><a data-toggle="tab" href="#tab2">最新課程</a></li>
                 <!-- <li><a data-toggle="tab" href="#tab2">課程公告</a></li>
                 <li><a data-toggle="tab" href="#tab3">審查結果</a></li>
                 <li><a data-toggle="tab" href="#tab4">優異結果</a></li> -->
            </ul>


            <div class="tab-content">

                <div class="panel panel-default tab-pane active " id="tab2">
                    <div class="panel-body"  style="height:500px; background-color:#b0e0e6; border-style:inset; overflow-x: hidden;overflow-y: scroll;">
                    <table class="table table-striped">
          <thead>
            <tr>
              <th>課程名稱</th>
              <th>課程屬性</th>
              <th>認證時數</th>
              <th>任課老師</th>
              <th>申請時間</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($single_classes as $single_class)
              <tr class="success" style="height:50px;">
                <td>{{$single_class->name}}</td>
                <td>個別課程</td>
                <td>{{$single_class->auth_hr}}</td>
                <td>{{$single_class->teacher}}</td>
                <?php
                  $timestamp = strtotime($single_class->created_at) + 8*60*60;
                  $time = date('Y-m-d H:i', $timestamp);
                ?>
                <td>{{$time}}</td>
                <!-- view -->
                <!-- <td>
                  <a href="{{ url('/application/view_single') }}/{{$single_class->id}}">
                    <button type="button" class="btn btn-default btn-sm">
                      <span class="glyphicon glyphicon-eye-open"></span> 查看詳情
                    </button>
                  </a>
                </td> -->
              </tr>
            @endforeach
            @foreach ($module_classes as $module_class)
            <tr class="info" style="height:50px;">
              <td>{{$module_class->name}}</td>
              <td>模組課程</td>
              <td>{{$module_class->auth_hr}}</td>
              <td>{{$module_class->teacher}}</td>
              <?php
                $timestamp = strtotime($module_class->created_at) + 8*60*60;
                $time = date('Y-m-d H:i', $timestamp);
              ?>
              <td>{{$time}}</td>
              <!-- view -->
              <!-- <td>
                <a href="{{ url('/application/view_module') }}/{{$module_class->id}}">
                  <button type="button" class="btn btn-default btn-sm">
                    <span class="glyphicon glyphicon-eye-open"></span> 查看詳情
                  </button>
                </a>
              </td> -->
            </tr>
            @endforeach
            @foreach ($fractal_classes as $fractal_class)
            <tr class="warning" style="height:50px;">
              <td>{{$fractal_class->name}}</td>
              <td>碎形課程</td>
              <td>{{$fractal_class->auth_hr}}</td>
              <td>{{$fractal_class->teacher}}</td>
              <?php
                $timestamp = strtotime($fractal_class->created_at) + 8*60*60;
                $time = date('Y-m-d H:i', $timestamp);
              ?>
              <td>{{$time}}</td>
              <!-- view -->
              <!-- <td>
                <a href="{{ url('/application/view_fractal') }}/{{$fractal_class->id}}">
                  <button type="button" class="btn btn-default btn-sm">
                    <span class="glyphicon glyphicon-eye-open"></span> 查看詳情
                  </button>
                </a>
              </td> -->
            </tr>
            @endforeach
          </tbody>
        </table>
                    </div>
                </div>

                <div class="panel panel-default tab-pane  " id="tab1">
                    <div class="panel-body"  style="height:500px; background-color:#b0e0e6; border-style:inset; overflow-x: hidden;overflow-y: scroll;">
                        Basic panel example2
                    </div>
                </div>

                <!-- <div class="panel panel-default tab-pane  " id="tab3">
                    <div class="panel-body"  style="height:350px;">
                        Basic panel example3
                    </div>
                </div>

                <div class="panel panel-default tab-pane  " id="tab4">
                    <div class="panel-body"  style="height:350px;">
                        Basic panel example4
                    </div>
                </div> -->
            </div>


        </div>
    </section>

    <!-- Items -->
          <section class="main items container">
            <article class="item">
              <header>
                <a href="#"><img src="{{asset('/img/intro.jpg')}}" alt="" /></a>
                <h3>認識微學分</h3>
              </header>
              <p>Fusce malesuada efficitur venenatis. Pellentesque tempor leo sed massa hendrerit hendrerit. In sed feugiat est, eu congue elit. Ut porta magna vel felis sodales vulputate. Donec faucibus dapibus lacus non ornare.</p>
              <ul class="actions">
                <li><a href="#" class="button">More</a></li>
              </ul>
            </article>
            <article class="item">
              <header>
                <a href="#"><img src="{{asset('/img/Negative6.jpg')}}" alt="" /></a>
                <h3>課程探索</h3>
              </header>
              <p>Fusce malesuada efficitur venenatis. Pellentesque tempor leo sed massa hendrerit hendrerit. In sed feugiat est, eu congue elit. Ut porta magna vel felis sodales vulputate. Donec faucibus dapibus lacus non ornare.</p>
              <ul class="actions">
                <li><a href="#" class="button">More</a></li>
              </ul>
            </article>
            <article class="item">
              <header>
                <a href="#"><img src="{{asset('/img/DSC.JPG')}}" alt="" /></a>
                <h3>課程影音</h3>
              </header>
              <p>文字敘述</p>
              <ul class="actions">
                <li><a href="#" class="button">More</a></li>
              </ul>
            </article>
            <article class="item">
              <header>
                <a href="#"><img src="{{asset('/img/Negative1.jpg')}}"  alt="" /></a>
                <h3>我要開課</h3>
              </header>
              <p>文字敘述</p>
              <ul class="actions">
                <li><a href="#" class="button">More</a></li>
              </ul>
            </article>
          </section>

    <!-- About Section -->
    <section class="success" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1>相關單位連結</h1>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row text-center">
                <div class="col-lg-4" style="height:300px; border-style:solid;">
                    <h3><strong>校內相關單位</strong></h3>
                    <p class="link"><a href="https://ncu.openedu.tw/">中大磨課師平台</a></p>
                    <p class="link"><a href="https://ncu.openedu.tw/">中大課程模組平台</a></p>
                    <p class="link"><a href="http://140.115.103.89/">通識教育中心</a></p>
                    <p class="link"><a href="http://140.115.191.37/index.aspx">總教學中心</a></p>
                    <p class="link"><a href="http://careercenter.ncu.edu.tw/Joomla/index.php">學務處職涯發展中心</a></p>
                </div>
                <div class="col-lg-4" style="height:300px; border-style:solid">
                    <h3><strong>校內相關單位</strong></h3>
                    <p class="link"><a href="http://service-learning.ncu.edu.tw/">學務處服務學習辦公室</a></p>
                    <p class="link"><a href="http://osa.ncu.edu.tw/about.php?group_id=2">學務處生活輔導組</a></p>
                    <p class="link"><a href="http://www.iic.ncu.edu.tw//">研發處育成中心</a></p>
                    <p class="link"><a href="http://oia.ncu.edu.tw/index.php/tw/">國際事務處</a></p>
                </div>
                <div class="col-lg-4" style="height:300px; border-style:solid">
                    <h3><strong>外部相關連結</strong></h3>
                    <p class="link"><a href="https://www.openedu.tw/">中華開放教育平台</a></p>
                    <p class="link"><a href="http://youth.tycg.gov.tw/">桃園市青年事務局</a></p>
                    <p class="link"><a href="http://www.hakka.tycg.gov.tw/">桃園市客家事務局</a></p>
                    <p class="link"><a href="http://culture.tycg.gov.tw/">桃園市文化局</a></p>
                    <p class="link"><a href="https://www.wda.gov.tw/Default.aspx">行政院職訓局</a></p>
                    <p class="link"><a href="http://home.cloud.acer.com/tw/cpf/">宏碁雲教授官方網站</a></p>
                </div>

            </div>
            
        </div>
    </section>
    

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

    <!-- Portfolio Modals -->

</body>
@endsection

@section('css')

  <style>

      /*body{
        background-color: #202024;
      }*/

      body{
        background-color: #6db9e4;
      }

      img {
        max-width:450px;
        myimg:expression(onload=function(){
        this.style.width=(this.offsetWidth > 200)?"200px":"auto"});
      }
      .panel-green{
        background-color:#339966;
        margin-top: 2%;
        margin-bottom: 8%;
        color:#fff;
        font-weight: 900;

      }
      .circle {
        width: 300px;
        height:300px;
        background: #ffbb33;
        -moz-border-radius: 50px;
        -webkit-border-radius: 50px;
        border-radius: 50%;
        margin-bottom:10%;
        text-align: center;
        line-height: 300px;
        font-size: 20px;
        font-weight: bold;
        color: #fff;
      }
      .circle:hover{
        background-color: #ffcc66;
      }
      .center {
        position: absolute;
        left: 24%;
        top:45%;

        }
        .link{
            font-size: 18px;
        }
        
        /* Item */

  .item {
    padding: 3em 3em 1em 3em;
    background-color: #ffffff;
    border-radius: 4px;
    text-align: center;
    border-style: solid;
  }

    .item header {
      border-top-left-radius: 4px;
      border-top-right-radius: 4px;
      margin: -3em 0 3em -3em;
      width: calc(100% + 6em);
      height: 15em;
      display: -moz-flex;
      display: -webkit-flex;
      display: -ms-flex;
      display: flex;
      -moz-align-items: center;
      -webkit-align-items: center;
      -ms-align-items: center;
      align-items: center;
      -moz-justify-content: center;
      -webkit-justify-content: center;
      -ms-justify-content: center;
      justify-content: center;
      background-color: #444;
      color: rgba(255, 255, 255, 0.75);
      position: relative;
      overflow: hidden;
    }

      .item header input, .item header select, .item header textarea {
        color: #ffffff;
      }

      .item header a {
        color: inherit;
      }

        .item header a:hover {
          color: #EF6480 !important;
        }

      .item header strong, .item header b {
        color: #ffffff;
      }

      .item header h1, .item header h2, .item header h3, .item header h4, .item header h5, .item header h6 {
        color: #ffffff;
      }

      .item header blockquote {
        border-left-color: #ffffff;
      }

      .item header code {
        background: rgba(255, 255, 255, 0.075);
        border-color: #ffffff;
      }

      .item header hr {
        border-bottom-color: #ffffff;
      }

      .item header a {
        -moz-transition: -moz-transform 0.2s ease;
        -webkit-transition: -webkit-transform 0.2s ease;
        -ms-transition: -ms-transform 0.2s ease;
        transition: transform 0.2s ease;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        display: block;
      }

        .item header a:before {
          content: '';
          display: block;
          position: absolute;
          top: 0;
          left: 0;
          width: 100%;
          height: 100%;
          background-color: rgba(0, 0, 0, 0.25);
          background-image: url("images/overlay.png");
        }

      .item header:hover a {
        -moz-transform: scale(1.1);
        -webkit-transform: scale(1.1);
        -ms-transform: scale(1.1);
        transform: scale(1.1);
      }

      .item header > * {
        position: relative;
        z-index: 1;
      }

      .item header h3 {
        margin: 0;
        -moz-pointer-events: none;
        -webkit-pointer-events: none;
        -ms-pointer-events: none;
        pointer-events: none;
      }

  .items {
    display: -moz-flex;
    display: -webkit-flex;
    display: -ms-flex;
    display: flex;
    -moz-flex-wrap: wrap;
    -webkit-flex-wrap: wrap;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    width: calc(100% + 2em);
    margin: -2em 0 0 -2em;
  }

    .items .item {
      margin: 2em 0 0 2em;
      width: calc(50% - 2em);
    }

  @media screen and (max-width: 980px) {

    .item header {
      height: 25em;
    }

    .items {
      -moz-flex-direction: column;
      -webkit-flex-direction: column;
      -ms-flex-direction: column;
      flex-direction: column;
      -moz-flex-wrap: nowrap;
      -webkit-flex-wrap: nowrap;
      -ms-flex-wrap: nowrap;
      flex-wrap: nowrap;
      width: 100%;
      margin: 0;
    }

      .items .item {
        width: 100%;
        margin: 0 0 2em 0;
      }

        .items .item:last-child {
          margin-bottom: 0;
        }

  }

  @media screen and (max-width: 736px) {

    .item header {
      height: 15em;
    }

    .items .item {
      margin: 0 0 1em 0;
    }

  }

  @media screen and (max-width: 480px) {

    .item {
      padding: 2em 1em 0.1em 1em;
    }

      .item header {
        height: 12em;
        margin: -2em 0 2em -1em;
        width: calc(100% + 2em);
      }

  }
    </style>

@endsection

@section('js')
  <script>

  </script>
@endsection
