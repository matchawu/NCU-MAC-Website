<!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom" style="background-color:#fdf5e6">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <a class="navbar-brand" href="{{ url('/Homepage') }}"><span><img src="http://www.ncu.edu.tw/assets/thumbs/pic/df1dfaf0f9e30b8cc39505e1a5a63254.png" height="25" width="25" ></span>微學分首頁</a>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right ">
                    <li class="page-scroll navbtn">
                        <a href="{{ url('/Homepage') }}">最新公告</a>
                    </li>
                    <li class="page-scroll navbtn">
                        <a href="{{ url('/introduce') }}">簡介</a>
                    </li>
                    <li class="page-scrol navbtn">
                        <a href="{{ url('/record') }}">課程搜尋</a>
                    </li>
                    <li class="page-scrol navbtn">
                        <a href="{{ url('/video') }}">課程影音</a>
                    </li>
                    <li class="page-scroll navbtn">
                        <a href="{{ url('/application') }}">開課單位登入</a>
                    </li>

                     @if (Auth::guest())
                     <li class="page-scroll navbtn ">
                        <a href="{{ url('/authrize') }}">管理員登入</a>
                    </li>
                    @else
                        <li>
                            <a href="{{ url('/logout') }}"
                                onclick="event.preventDefault();
                                         document.getElementById('logout-formm').submit();">
                                登出
                            </a>

                            <form id="logout-formm" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    @endif

                </ul>
            </div>

            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

<style type="text/css">
    .navbtn{
        border-color: #f5f5dc;
        border-right-style:solid;
        border-radius:25%;
    }
</style>
