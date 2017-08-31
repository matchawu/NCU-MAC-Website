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
                    <h2>公告區</h2>
                    <hr class="star-primary">
                </div>
            </div>

            <ul class="nav nav-tabs">
                 <li class="active"><a data-toggle="tab" href="#tab1">最新公告</a></li>
                 <!-- <li><a data-toggle="tab" href="#tab2">課程公告</a></li>
                 <li><a data-toggle="tab" href="#tab3">審查結果</a></li>
                 <li><a data-toggle="tab" href="#tab4">優異結果</a></li> -->
            </ul>

            <div class="tab-content">

                <div class="panel panel-default tab-pane active " id="tab1">
                    <div class="panel-body"  style="height:500px; background-color:#b0e0e6; border-style:inset;">
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
      body{
        background-image:  url('/wood.jpg');
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

    </style>
@endsection

@section('js')
  <script>

  </script>
@endsection
