@extends('layouts.app')

@section('title', '課程審核介面')

@section('content')
    <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>學生資格審理介面</h2>
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
                            <th>學號</th>
                            <th>姓名</th>
                            <th>目標</th>
                            <th>要修的課</th>
                            <th>申請時間</th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th><label><input type="checkbox">通過</label></th>
                            <th>104403456</th>
                            <th>路人甲</th>
                            <th>魔法師</th>
                            <th>黑魔法防禦術</th>
                            <th>2017/9/3</th> 
                            <th><button type="button" class="btn btn-warning btn-lg">駁回</button></th>
                          </tr>
                          <tr>
                            <th><label><input type="checkbox">通過</label></th>
                            <th>104403523</th>
                            <th>葉以新</th>
                            <th>工具人</th>
                            <th>基礎分母學</th>
                            <th>2017/9/1</th> 
                            <th><button type="button" class="btn btn-warning btn-lg">駁回</button></th>
                          </tr>
                          <tr>
                            <th><label><input type="checkbox">通過</label></th>
                            <th>104403546</th>
                            <th>大中天</th>
                            <th>醫生</th>
                            <th>草藥學</th>
                            <th>2017/9/5</th> 
                            <th><button type="button" class="btn btn-warning btn-lg">駁回</button></th>
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
                            <th>姓名</th>
                            <th>目標</th>
                            <th>要修的課</th>
                            <th>申請時間</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th class="col-md-2">104403456</th>
                            <th class="col-md-2">路人甲</th>
                            <th class="col-md-2">魔法師</th>
                            <th class="col-md-2">黑魔法防禦術</th>
                            <th class="col-md-2">2017/9/3</th> 
                          </tr>
                          <tr>
                            <th class="col-md-2">104403523</th>
                            <th class="col-md-2">葉以新</th>
                            <th class="col-md-2">工具人</th>
                            <th class="col-md-2">基礎分母學</th>
                            <th class="col-md-2">2017/9/1</th> 
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
                            <th class="col-md-2">學號</th>
                            <th class="col-md-2">姓名</th>
                            <th class="col-md-2">目標</th>
                            <th class="col-md-2">要修的課</th>
                            <th class="col-md-2">申請時間</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th class="col-md-2">104403456</th>
                            <th class="col-md-2">丁丁</th>
                            <th class="col-md-2">說你好好</th>
                            <th class="col-md-2">ＸＸＸ開的課</th>
                            <th class="col-md-2">2017/9/3</th> 
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
                    <h4 class="modal-title">Modal Header</h4>
                  </div>
                  <div class="modal-body">
                    <p>Some text in the modal.</p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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