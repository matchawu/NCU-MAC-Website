@extends('layouts.app')

@section('title', '課程審核介面')

@section('content')
    <div class="container">
      <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>課程審理介面</h2>
                    <hr class="star-primary">
                </div>
            </div>

            <ul class="nav nav-tabs">
                 <li class="active"><a data-toggle="tab" href="#tab1">待審核</a></li>
                 <li><a data-toggle="tab" href="#tab2">已審核</a></li>
            </ul>

      <div class="tab-content" style="text-align: center;">

          <div id="tab1" class="tab-pane fade in active">
              <p></p>
                <div class="panel panel-default">
                  <div class="panel-body">
                    <table class="table table-hover">
                        <thead>
                          <tr>
                            <th><button type="button" class="btn btn-info">全選</button></th>
                            <th>流水號</th>
                            <th>課名</th>
                            <th>開課單位</th>
                            <th>申請時間</th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th><label><input type="checkbox">通過</label></th>
                            <th data-toggle="modal" data-target="#myModal">T1-1061-A</th>
                            <th data-toggle="modal" data-target="#myModal">AAAAA</th>
                            <th data-toggle="modal" data-target="#myModal">教務處</th>
                            <th data-toggle="modal" data-target="#myModal">2017/9/15</th>
                            <th><button type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#myModal2">駁回</button></th>
                          </tr>
                          <tr>
                            <th><label><input type="checkbox">通過</label></th>
                            <th>L1-1061-A</th>
                            <th>BBBBB</th>
                            <th>學務處</th>
                            <th>2017/9/4</th>
                            <th><button type="button" class="btn btn-warning btn-lg">駁回</button></th>
                          </tr>
                          <tr >
                            <th><label><input type="checkbox">通過</label></th>
                            <th>A1-1061-A</th>
                            <th>CCCCC</th>
                            <th>Ａ社團</th>
                            <th>2017/9/18</th>
                            <th><button type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#myModal">駁回</button></th>
                          </tr>
                          </tbody>
                      </table>
                  </div>
                </div>
                <button type="button" class="btn btn-primary btn-block">送出！</button>
          </div>

          <div id="tab2" class="panel-group fade">
              <p></p>
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">通過</h3>
                    </div>
                    <div class="panel-body">
                        <table class="table table-hover">
                        <thead>
                          <tr>
                            <th>流水號</th>
                            <th>課名</th>
                            <th>開課單位</th>
                            <th>申請時間</th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr data-toggle="model" data-target='#myModal'>
                            <th>T1-1061-A</th>
                            <th>AAAAA</th>
                            <th>教務處</th>
                            <th>2017/9/15</th> 
                            <th><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">課程內容</button></th>
                          </tr>
                          <tr>
                            <th>L1-1061-A</th>
                            <th>BBBBB</th>
                            <th>學務處</th>
                            <th>2017/9/4</th> 
                            <th><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">課程內容</button></th>
                          </tr>
                          </tbody>
                      </table>
                    </div>

                </div>

                <div class="panel panel-danger">
                    <div class="panel-heading">
                        <h3 class="panel-title">未通過</h3>
                    </div>
                    <div class="panel-body">
                        <table class="table table-hover">
                        <thead>
                          <tr>
                            <th>流水號</th>
                            <th>課名</th>
                            <th>開課單位</th>
                            <th>申請時間</th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>
                            <th>A1-1061-A</th>
                            <th>CCCCC</th>
                            <th>Ａ社團</th>
                            <th>2017/9/18</th> 
                            <th><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">課程內容</button></th>
                          </tr>
                          </tbody>
                      </table>
                    </div>
                </div>
          </div>

      </div><!-- tabcontent -->
    </div><!-- content -->
        <!-- Modal -->
            <div id="myModal" class="modal fade" role="dialog">
              <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">課程內容</h4>
                  </div>
                  <div class="modal-body">
                    <p>課程內容，這邊會撈出資料顯示並可列印</p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
                </div>

              </div>
            </div>

            <div id="myModal2" class="modal fade" role="dialog">
              <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">駁回</h4>
                  </div>
                  <div class="modal-body">
                    <p><form role="form">
                      <label for="name">默认的复选框和单选按钮的实例</label>
                        <div class="checkbox">
                            <label><input type="checkbox" value="">內容不足</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="">內容錯誤</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="">重複申請</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="">ＯＯＯ錯誤</label>
                        </div>
                      <div class="form-group">
                        <label for="name">其他原因</label>
                        <textarea class="form-control" rows="3"></textarea>
                      </div>
                    </form>
                    </p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">送出！</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">關閉</button>
                  </div>
                </div>

              </div>
            </div>
        <!-- Modal -->
@endsection

@section('css')
  <style>

    </style>
@endsection

@section('js')
  <script>

  </script>
@endsection
