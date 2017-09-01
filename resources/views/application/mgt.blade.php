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
                <!-- view -->
                <td>
                  <a href="{{ url('/application/view_single') }}/{{$single_class->id}}">
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
              <!-- view -->
              <td>
                <a href="{{ url('/application/view_module') }}/{{$module_class->id}}">
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
              <!-- view -->
              <td>
                <a href="{{ url('/application/view_fractal') }}/{{$fractal_class->id}}">
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

      <!-- Button 新增課程-->
      <div class="form-group">
        <center>
          <a href="{{ url('/application/choose') }}">
            <button type="button" class="btn btn-success">新增課程 <span class="glyphicon glyphicon-new-window"></span></button>
          </a>
          <a href="{{ url('/application/logout') }}">
            <button type="button" class="btn btn-primary">登出 <span class="glyphicon glyphicon-new-window"></span></button>
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
