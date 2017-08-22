@extends('layouts.app')

@section('title', '課程審核介面')

@section('content')
    <div class="container">
      <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>成果發表審理介面</h2>
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
                            <th>組名</th>
                            <th>成果主題</th>
                            <th>申請時間</th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th><label><input type="checkbox">通過</label></th>
                            <th>A123456</th>
                            <th>AAAAA</th>
                            <th>造飛機</th>
                            <th>2017/9/15</th> 
                            <th><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#modal1">成果內容</button><button type="button" class="btn btn-warning btn-lg">駁回</button></th>
                          </tr>
                          <tr>
                            <th><label><input type="checkbox">通過</label></th>
                            <th>B123456</th>
                            <th>BBBBB</th>
                            <th>造船</th>
                            <th>2017/9/4</th> 
                            <th><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#modal2">成果內容</button><button type="button" class="btn btn-warning btn-lg">駁回</button></th>
                          </tr>
                          <tr>
                            <th><label><input type="checkbox">通過</label></th>
                            <th>C123456</th>
                            <th>CCCCC</th>
                            <th>核融合發電研究</th>
                            <th>2017/9/18</th> 
                            <th><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#modal3">成果內容</button><button type="button" class="btn btn-warning btn-lg">駁回</button></th>
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
                            <th class="col-md-2">流水號</th>
                            <th class="col-md-2">組名</th>
                            <th class="col-md-2">成果主題</th>
                            <th class="col-md-2">申請時間</th>
                            <th class="col-md-2"></th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th class="col-md-2">A123456</th>
                            <th class="col-md-2">AAAAA</th>
                            <th class="col-md-2">造飛機</th>
                            <th class="col-md-2">2017/9/15</th> 
                            <th class="col-md-2"><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#modal1">成果內容</button><button type="button" class="btn btn-warning btn-lg">駁回</button></th>
                          </tr>
                          <tr>
                            <th class="col-md-2">B123456</th>
                            <th class="col-md-2">BBBBB</th>
                            <th class="col-md-2">造船</th>
                            <th class="col-md-2">2017/9/4</th> 
                            <th class="col-md-2"><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#modal2">成果內容</button><button type="button" class="btn btn-warning btn-lg">駁回</button></th>
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
                            <th class="col-md-2">流水號</th>
                            <th class="col-md-2">課名</th>
                            <th class="col-md-2">開課單位</th>
                            <th class="col-md-2">申請時間</th>
                            <th class="col-md-2"></th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th class="col-md-2">C123456</th>
                            <th class="col-md-2">CCCCC</th>
                            <th class="col-md-2">核融合發電研究</th>
                            <th class="col-md-2">2017/9/18</th> 
                            <th class="col-md-2"><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#modal3">成果內容</button><button type="button" class="btn btn-warning btn-lg">駁回</button></th>
                          </tr>
                          </tbody>
                      </table>
                    </div>
                </div>
          </div>

      </div><!-- tabcontent -->
    </div><!-- content -->
        <!-- Modal -->
            <div id="modal1" class="modal fade" role="dialog">
              <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Modal Header</h4>
                  </div>
                  <div class="modal-body">
                    <p>AAAAA組的內容</p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
                </div>

              </div>
            </div>

            <div id="modal2" class="modal fade" role="dialog">
              <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Modal Header</h4>
                  </div>
                  <div class="modal-body">
                    <p>BBBBB組的內容</p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
                </div>

              </div>
            </div>

            <div id="modal3" class="modal fade" role="dialog">
              <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Modal Header</h4>
                  </div>
                  <div class="modal-body">
                    <p>CCCCC組的內容</p>
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