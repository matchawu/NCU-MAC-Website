@extends('layouts.app')

@section('title', '管理申請')

@section('content')
<div class="container">
  <h2>
    <b></b>
  </h2>
</div>

<div class="container col-sm-1">
</div>

<div class="container col-sm-10">
  <br>
  <!-- 登入歡迎訊息 -->
  <div class="alert alert-info alert-dismissable  fade in">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <span class="glyphicon glyphicon-user"></span>
    <strong> {{$user->account}} </strong>
    你好 ! 歡迎登入微學分系統 !
  </div>

  <div class="well form-horizontal">
    <fieldset>

      <!-- title -->
      <legend><b>已開設課程</b></legend>

      <!-- course table -->
      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>課程名稱</th>
              <th>課程屬性</th>
              <th>上課時數</th>
              <th>認證時數</th>
              <th>申請時間</th>
              <th></th>
              <th></th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            @foreach ($single_classes as $single_class)
              <tr class="success">
                <td>{{$single_class->name}}</td>
                <td>個別課程</td>
                <td>{{$single_class->class_hr}}</td>
                <td>{{$single_class->auth_hr}}</td>
                <?php
                  $timestamp = strtotime($single_class->created_at) + 8*60*60;
                  $time = date('Y-m-d H:i', $timestamp);
                ?>
                <td>{{$time}}</td>
                <!-- look -->
                <td>
                  <a href="#" data-toggle="modal" data-target="#module">
                    <button type="button" class="btn btn-default btn-sm">
                      <span class="glyphicon glyphicon-eye-open"></span> 查看詳情
                    </button>
                  </a>
                </td>
                <!-- edit -->
                <td>
                  <a href="{{ url('/application/edit_single') }}/{{$single_class->id}}">
                    <button type="button" class="btn btn-warning btn-sm">
                      <span class="glyphicon glyphicon-pencil"></span> 編輯
                    </button>
                  </a>
                </td>
                <!-- del -->
                <td>
                  <a href="#" data-toggle="modal" data-target="#deletesingle{{$single_class->id}}">
                    <button type="button" class="btn btn-danger btn-sm">
                      <span class="glyphicon glyphicon-trash"></span> 刪除
                    </button>
                  </a>
                </td>
              </tr>
              <!-- delete single -->
              <div class="modal fade" id="deletesingle{{$single_class->id}}" role="dialog">

                  <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">確認刪除?</h4>
                      </div>
                      <div class="modal-body">
                          <p>刪除的動作將無法復原</p>
                      </div>
                      <div class="modal-footer">
                          <center>
                            <a href="{{asset('/application/deleteSingle')}}/{{$single_class->id}}">
                              <button type="submit" class="btn btn-danger">
                                <span class="glyphicon glyphicon-trash"></span> 確認刪除
                              </button>
                            </a>
                          </center>
                      </div>
                    </div>
                  </div>
                </div>
            @endforeach
            @foreach ($module_classes as $module_class)
            <tr class="info">
              <td>{{$module_class->name}}</td>
              <td>模組課程</td>
              <td>{{$module_class->class_hr}}</td>
              <td>{{$module_class->auth_hr}}</td>
              <?php
                $timestamp = strtotime($module_class->created_at) + 8*60*60;
                $time = date('Y-m-d H:i', $timestamp);
              ?>
              <td>{{$time}}</td>
              <!-- look -->
              <td>
                <a href="#" data-toggle="modal" data-target="#fractal">
                  <button type="button" class="btn btn-default btn-sm">
                    <span class="glyphicon glyphicon-eye-open"></span> 查看詳情
                  </button>
                </a>
              </td>
              <!-- edit -->
              <td>
                <a href="{{ url('/application/edit_module') }}/{{$module_class->id}}">
                  <button type="button" class="btn btn-warning btn-sm">
                    <span class="glyphicon glyphicon-pencil"></span> 編輯
                  </button>
                </a>
              </td>
              <!-- del -->
              <td>
                <a href="#" data-toggle="modal" data-target="#deletemodule{{$module_class->id}}">
                  <button type="button" class="btn btn-danger btn-sm">
                    <span class="glyphicon glyphicon-trash"></span> 刪除
                  </button>
                </a>
              </td>
            </tr>
            <!-- delete module -->
            <div class="modal fade" id="deletemodule{{$module_class->id}}" role="dialog">
                <div class="modal-dialog modal-sm">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">確認刪除?</h4>
                    </div>
                    <div class="modal-body">
                        <p>刪除的動作將無法復原</p>
                    </div>
                    <div class="modal-footer">
                        <center>
                          <a href="{{asset('/application/deleteModule')}}/{{$module_class->id}}">
                            <button type="submit" class="btn btn-danger">
                              <span class="glyphicon glyphicon-trash"></span> 確認刪除
                            </button>
                          </a>
                        </center>
                    </div>
                  </div>
                </div>
              </div>
            @endforeach
            @foreach ($fractal_classes as $fractal_class)
            <tr class="warning">
              <td>{{$fractal_class->name}}</td>
              <td>碎形課程</td>
              <td>{{$fractal_class->class_hr}}</td>
              <td>{{$fractal_class->auth_hr}}</td>
              <?php
                $timestamp = strtotime($fractal_class->created_at) + 8*60*60;
                $time = date('Y-m-d H:i', $timestamp);
              ?>
              <td>{{$time}}</td>
              <!-- look -->
              <td>
                <a href="#" data-toggle="modal" data-target="#single">
                  <button type="button" class="btn btn-default btn-sm">
                    <span class="glyphicon glyphicon-eye-open"></span> 查看詳情
                  </button>
                </a>
              </td>
              <!-- edit -->
              <td>
                <a href="{{ url('/application/edit_fractal') }}/{{$fractal_class->id}}">
                  <button type="button" class="btn btn-warning btn-sm">
                    <span class="glyphicon glyphicon-pencil"></span> 編輯
                  </button>
                </a>
              </td>
              <!-- del -->
              <td>
                <a href="#" data-toggle="modal" data-target="#deletefractal{{$fractal_class->id}}">
                  <button type="button" class="btn btn-danger btn-sm">
                    <span class="glyphicon glyphicon-trash"></span> 刪除
                  </button>
                </a>
              </td>
            </tr>
            <!-- delete fractal -->
            <div class="modal fade" id="deletefractal{{$fractal_class->id}}" role="dialog">
                <div class="modal-dialog modal-sm">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">確認刪除?</h4>
                    </div>
                    <div class="modal-body">
                        <p>刪除的動作將無法復原</p>
                    </div>
                    <div class="modal-footer">
                        <center>
                          <a href="{{asset('/application/deleteFractal')}}/{{$fractal_class->id}}">
                            <button type="submit" class="btn btn-danger">
                              <span class="glyphicon glyphicon-trash"></span> 確認刪除
                            </button>
                          </a>
                        </center>
                    </div>
                  </div>
                </div>
              </div>
            @endforeach
          </tbody>
        </table>
      </div>

      <!-- 各課程的查看詳情 modal -->
      <!-- 個別課程 success-->
      <div class="modal fade" id="single" role="dialog">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <!-- modal header -->
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">查看詳情</h4>
            </div>
            <!-- modal body -->
            <div class="modal-body">
              <form class="form-horizontal" action=" " method="post"  id="contact_form">
                <fieldset>
                  <!-- 此處input name尚未更改 -->
                  <!-- 以下皆為readonly -->
                  <!-- Text input-->
                  <div class="form-group">
                    <label class="col-md-4 control-label">開課學期</label>
                    <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-glass"></i></span>
                    <input  name="first_name" value="106-2" placeholder="ex. 106-1" class="form-control"  type="text" readonly>
                      </div>
                    </div>
                  </div>

                  <!-- Text input-->
                  <div class="form-group">
                    <label class="col-md-4 control-label">課程名稱</label>
                    <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-education"></i></span>
                    <input  name="first_name" value="python" placeholder="課程中文名稱" class="form-control"  type="text" readonly>
                      </div>
                    </div>
                  </div>

                  <!-- Text input-->
                  <div class="form-group">
                    <label class="col-md-4 control-label">課程領域</label>
                    <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-tag"></i></span>
                    <input  name="first_name" value="程式設計" placeholder="人文藝術、" class="form-control"  type="text" readonly>
                      </div>
                    </div>
                  </div>

                  <!-- Text input-->
                  <div class="form-group">
                    <label class="col-md-4 control-label" >上課地點</label>
                      <div class="col-md-4 inputGroupContainer">
                      <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                    <input name="last_name" value="綜教館204" placeholder="請輸入上課地點" class="form-control"  type="text" readonly>
                      </div>
                    </div>
                  </div>

                  <!-- Text input-->
                  <div class="form-group">
                    <label class="col-md-4 control-label">上課時間</label>
                      <div class="col-md-4 inputGroupContainer">
                      <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                    <input name="email" value="9/20 5:00-7:00" placeholder="ex. 9/17 9:00-12:00" class="form-control"  type="text" readonly>
                      </div>
                    </div>
                  </div>

                  <!-- Text input-->
                  <div class="form-group">
                    <label class="col-md-4 control-label">人數限制</label>
                      <div class="col-md-4 inputGroupContainer">
                      <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-blackboard"></i></span>
                    <input name="email" value="50" placeholder="ex. 50" class="form-control"  type="text" readonly>
                      </div>
                    </div>
                  </div>

                  <!-- Text input-->
                  <div class="form-group">
                    <label class="col-md-4 control-label">講師姓名</label>
                      <div class="col-md-4 inputGroupContainer">
                      <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input name="phone" value="承師傅" placeholder="請輸入授課講師中文名字" class="form-control" type="text" readonly>
                      </div>
                    </div>
                  </div>

                  <!-- Text input-->
                  <div class="form-group">
                    <label class="col-md-4 control-label">聯絡方式</label>
                      <div class="col-md-4 inputGroupContainer">
                      <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                    <input name="phone" value="0919530742" placeholder="請填入Email或手機號碼" class="form-control" type="text" readonly>
                      </div>
                    </div>
                  </div>

                  <!-- Text area -->
                  <div class="form-group">
                    <label class="col-md-4 control-label">講師介紹</label>
                      <div class="col-md-4 inputGroupContainer">
                      <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-comment"></i></span>
                            <textarea class="form-control full" name="comment" placeholder="講師背景及專長介紹" readonly>承師傅就是就是熊孩子</textarea>
                    </div>
                    </div>
                  </div>

                  <!-- Text input-->
                  <div class="form-group">
                    <label class="col-md-4 control-label">課程時數</label>
                      <div class="col-md-4 inputGroupContainer">
                      <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-edit"></i></span>
                    <input name="address" value="2" placeholder="本課程上課總時數(hr)" class="form-control" type="text" readonly>
                      </div>
                    </div>
                  </div>

                  <!-- Text input-->
                  <div class="form-group">
                    <label class="col-md-4 control-label">認證時數</label>
                      <div class="col-md-4 inputGroupContainer">
                      <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-check"></i></span>
                    <input name="address" value="2" placeholder="修完本課程學生獲得認證時數(hr)" class="form-control" type="text" readonly>
                      </div>
                    </div>
                  </div>

                  <!-- Text area -->
                  <div class="form-group">
                    <label class="col-md-4 control-label" data-toggle="tooltip" title="Hooray!">課程簡介</label>
                      <div class="col-md-4 inputGroupContainer">
                      <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-info-sign"></i></span>
                            <textarea class="form-control full" name="comment" placeholder="課程介紹" readonly>你好你好今天天氣真好</textarea>
                    </div>
                    </div>
                  </div>
                </fieldset>
              </form>
            </div>
            <!-- modal footer -->
            <div class="modal-footer">
              <center>
                <button type="button" class="btn btn-info" data-dismiss="modal">關閉視窗</button>
              </center>
            </div>
          </div>
        </div>
      </div>
      <!-- 模組課程 info-->
      <div class="modal fade" id="module" role="dialog">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <!-- modal header -->
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">查看詳情</h4>
              </div>
              <!-- modal body -->
              <div class="modal-body">
                <form class="form-horizontal" action=" " method="post"  id="contact_form">
                  <fieldset>
                    <!-- 此處input name尚未更改 -->
                    <!-- 以下皆為readonly -->
                    <!-- Text input-->
                    <div class="form-group">
                      <label class="col-md-4 control-label">開課學期</label>
                      <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-glass"></i></span>
                          <input  name="first_name" placeholder="ex. 106-1" class="form-control"  type="text" readonly>
                        </div>
                      </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                      <label class="col-md-4 control-label">課程名稱</label>
                      <div class="col-md-4 inputGroupContainer">
                      <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-education"></i></span>
                      <input  name="first_name" placeholder="課程中文名稱" class="form-control"  type="text" readonly>
                        </div>
                      </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                      <label class="col-md-4 control-label">課程領域</label>
                      <div class="col-md-4 inputGroupContainer">
                      <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-tag"></i></span>
                      <input  name="first_name" placeholder="人文藝術、" class="form-control"  type="text" readonly>
                        </div>
                      </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                      <label class="col-md-4 control-label" >上課地點</label>
                        <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                      <input name="last_name" placeholder="請輸入上課地點" class="form-control"  type="text" readonly>
                        </div>
                      </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                      <label class="col-md-4 control-label">上課時間</label>
                        <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                      <input name="email" placeholder="ex. 星期二 9:00-12:00" class="form-control"  type="text" readonly>
                        </div>
                      </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                      <label class="col-md-4 control-label">人數限制</label>
                        <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-blackboard"></i></span>
                      <input name="email" placeholder="ex. 50" class="form-control"  type="text" readonly>
                        </div>
                      </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                      <label class="col-md-4 control-label">講師姓名</label>
                        <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                      <input name="phone" placeholder="請輸入授課講師中文名字" class="form-control" type="text" readonly>
                        </div>
                      </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                      <label class="col-md-4 control-label">聯絡方式</label>
                        <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                      <input name="phone" placeholder="請填入Email或手機號碼" class="form-control" type="text" readonly>
                        </div>
                      </div>
                    </div>

                    <!-- Text area -->
                    <div class="form-group">
                      <label class="col-md-4 control-label">講師介紹</label>
                        <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-comment"></i></span>
                              <textarea class="form-control full" name="comment" placeholder="講師背景及專長介紹" readonly></textarea>
                        </div>
                        </div>
                      </div>

                    <!-- Text input-->
                    <div class="form-group">
                      <label class="col-md-4 control-label">課程時數</label>
                        <div class="col-md-4 inputGroupContainer">
                          <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-edit"></i></span>
                            <input name="address" placeholder="本課程上課總時數(hr)" class="form-control" type="text" readonly>
                          </div>
                        </div>
                      </div>

                    <!-- Text input-->
                    <div class="form-group">
                      <label class="col-md-4 control-label">認證時數</label>
                        <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-check"></i></span>
                      <input name="address" placeholder="修完本課程學生獲得認證時數(hr)" class="form-control" type="text" readonly>
                        </div>
                      </div>
                    </div>

                    <!-- Text area -->
                    <div class="form-group">
                      <label class="col-md-4 control-label">課程簡介</label>
                        <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-info-sign"></i></span>
                              <textarea class="form-control full" name="comment" placeholder="課程介紹" readonly></textarea>
                      </div>
                      </div>
                    </div>

                    <!-- 以下三組為模組課程獨有 -->
                    <!-- Text area -->
                    <div class="form-group">
                      <label class="col-md-4 control-label">課程目標</label>
                        <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-screenshot"></i></span>
                              <textarea class="form-control full" name="comment" placeholder="本模組課程欲達成之學習目標" readonly></textarea>
                      </div>
                      </div>
                    </div>

                    <!-- Text area -->
                    <div class="form-group">
                      <label class="col-md-4 control-label">課程要求</label>
                        <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-equalizer"></i></span>
                              <textarea class="form-control full" name="comment" placeholder="本課程對學生修課之要求" readonly></textarea>
                      </div>
                      </div>
                    </div>

                    <!-- Text area -->
                    <div class="form-group">
                      <label class="col-md-4 control-label">其他</label>
                        <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-asterisk"></i></span>
                              <textarea class="form-control full" name="comment" placeholder="其他注意事項" readonly></textarea>
                      </div>
                      </div>
                    </div>

                    <br>

                    <!-- table -->
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>堂數</th>
                            <th>日期</th>
                            <th>時間</th>
                            <th>講師</th>
                            <th>主題</th>
                            <th>內容</th>
                            <th>備註</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>1</td>
                            <td>09/19</td>
                            <td>9:00-12:00</td>
                            <td>辛棄疾</td>
                            <td>南宋愛國詩講座</td>
                            <td>如何變得愛國</td>
                            <td>上課地點改在314</td>
                          </tr>
                          <tr>
                            <td>2</td>
                            <td>09/19</td>
                            <td>9:00-12:00</td>
                            <td>辛棄疾</td>
                            <td>南宋愛國詩講座</td>
                            <td>如何變得愛國</td>
                            <td>上課地點改在314</td>
                          </tr>
                          <tr>
                            <td>3</td>
                            <td>09/19</td>
                            <td>9:00-12:00</td>
                            <td>辛棄疾</td>
                            <td>南宋愛國詩講座</td>
                            <td>如何變得愛國</td>
                            <td>上課地點改在314</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </fieldset>
                </form>
              </div>
              <!-- modal footer -->
              <div class="modal-footer">
                <center>
                  <button type="button" class="btn btn-info" data-dismiss="modal">關閉視窗</button>
                </center>
              </div>
            </div>
          </div>
        </div>
      <!-- 碎形課程 warning -->
      <div class="modal fade" id="fractal" role="dialog">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <!-- modal header -->
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">查看詳情</h4>
              </div>
              <!-- modal body -->
              <div class="modal-body">
                <form class="form-horizontal" action=" " method="post"  id="contact_form">
                  <fieldset>

                    <!-- 此處input name尚未更改 -->
                    <!-- 以下皆為 readonly -->
                    <!-- Text input-->
                    <div class="form-group">
                      <label class="col-md-4 control-label">開課學期</label>
                      <div class="col-md-4 inputGroupContainer">
                      <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-glass"></i></span>
                      <input  name="first_name" placeholder="ex. 106-1" class="form-control"  type="text" readonly>
                        </div>
                      </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                      <label class="col-md-4 control-label">課程名稱</label>
                      <div class="col-md-4 inputGroupContainer">
                      <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-education"></i></span>
                      <input  name="first_name" placeholder="課程中文名稱" class="form-control"  type="text" readonly>
                        </div>
                      </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                      <label class="col-md-4 control-label">課程代號</label>
                      <div class="col-md-4 inputGroupContainer">
                      <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-th-list"></i></span>
                      <input  name="first_name" placeholder="課程代碼" class="form-control"  type="text" readonly>
                        </div>
                      </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                      <label class="col-md-4 control-label">課程領域</label>
                      <div class="col-md-4 inputGroupContainer">
                      <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-tag"></i></span>
                      <input  name="first_name" placeholder="人文藝術、" class="form-control"  type="text" readonly>
                        </div>
                      </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                      <label class="col-md-4 control-label">授課單元</label>
                      <div class="col-md-4 inputGroupContainer">
                      <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-book"></i></span>
                      <input  name="first_name" placeholder="開放授課之單元或類別" class="form-control"  type="text" readonly>
                        </div>
                      </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                      <label class="col-md-4 control-label" >上課地點</label>
                        <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                      <input name="last_name" placeholder="請輸入上課地點" class="form-control"  type="text" readonly>
                        </div>
                      </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                      <label class="col-md-4 control-label">上課時間</label>
                        <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                      <input name="email" placeholder="ex. 9/17 9:00-12:00" class="form-control"  type="text" readonly>
                        </div>
                      </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                      <label class="col-md-4 control-label">人數限制</label>
                        <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-blackboard"></i></span>
                      <input name="email" placeholder="ex. 50" class="form-control"  type="text" readonly>
                        </div>
                      </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                      <label class="col-md-4 control-label">講師姓名</label>
                        <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                      <input name="phone" placeholder="請輸入授課講師中文名字" class="form-control" type="text" readonly>
                        </div>
                      </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                      <label class="col-md-4 control-label">聯絡方式</label>
                        <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                      <input name="phone" placeholder="請填入Email或手機號碼" class="form-control" type="text" readonly>
                        </div>
                      </div>
                    </div>

                    <!-- Text area -->
                    <div class="form-group">
                      <label class="col-md-4 control-label">講師介紹</label>
                        <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-comment"></i></span>
                              <textarea class="form-control full" name="comment" placeholder="講師背景及專長介紹" readonly></textarea>
                      </div>
                      </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                      <label class="col-md-4 control-label">課程時數</label>
                        <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-edit"></i></span>
                      <input name="address" placeholder="本課程上課總時數(hr)" class="form-control" type="text" readonly>
                        </div>
                      </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                      <label class="col-md-4 control-label">認證時數</label>
                        <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-check"></i></span>
                      <input name="address" placeholder="修完本課程學生獲得認證時數(hr)" class="form-control" type="text" readonly>
                        </div>
                      </div>
                    </div>

                    <!-- Text area -->
                    <div class="form-group">
                      <label class="col-md-4 control-label" data-toggle="tooltip" title="Hooray!">課程簡介</label>
                        <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-info-sign"></i></span>
                              <textarea class="form-control full" name="comment" placeholder="課程介紹" readonly></textarea>
                      </div>
                      </div>
                    </div>

                  </fieldset>
                </form>
              </div>
              <!-- modal footer -->
              <div class="modal-footer">
                <center>
                  <button type="button" class="btn btn-info" data-dismiss="modal">關閉視窗</button>
                </center>
              </div>
            </div>
          </div>
        </div>

      <!-- Button 新增課程-->
      <div class="form-group">
        <center>
          <a href="{{ url('/application/choose') }}">
            <button type="button" class="btn btn-success">新增課程 <span class="glyphicon glyphicon-new-window"></span></button>
          </a>
          <a href="{{ url('/application/logout') }}">
            <button type="button" class="btn btn-danger">登出 <span class="glyphicon glyphicon-new-window"></span></button>
          </a>
        </center>
      </div>

    </fieldset>
  </div>
</div>
@endsection

@section('css')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script>

</script>
@endsection

@section('js')
<script>

</script>
@endsection
