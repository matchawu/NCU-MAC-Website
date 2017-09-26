@extends('layouts.app')

@section('title', '編輯模組課程')

@section('content')
<div class="container">
  <h2>
    <b></b>
  </h2>
</div>

<div class="container col-sm-1">
</div>

<div class="container col-sm-10 well">
  <form class="well form-horizontal" action="{{asset('/application/edit_module')}}/{{$module_class->id}}" method="post"  id="contact_form">
    <fieldset>
      <!-- Form Name -->
      <legend><b>編輯模組課程</b></legend>

      <!-- 此處input name更改 -->
      <!-- Text term req-->
      <div class="form-group">
        <label class="col-md-4 control-label">開課學期</label>
        <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-glass"></i></span>
            <input  name="term" value="{{$module_class->term}}" placeholder="ex. 106-1" class="form-control"  type="text" required>
          </div>
        </div>
      </div>

      <!-- text req way-->
      <div class="form-group">
        <label class="col-md-4 control-label">開課模式</label>
        <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-tag"></i></span>
            <select class="form-control" id="way" name="way" value="{{$module_class->way}}">
              <option value="單位創課" id="way1">單位創課</option>
              <option value="學生募課" id="way2">學生募課</option>
              <option value="企業捐課" id="way3">企業捐課</option>
            </select>
          </div>
        </div>
      </div>

      <!-- Text name req-->
      <div class="form-group">
        <label class="col-md-4 control-label">課程名稱</label>
        <div class="col-md-4 inputGroupContainer">
        <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-education"></i></span>
        <input  name="name" value="{{$module_class->name}}" placeholder="課程中文名稱" class="form-control"  type="text" required>
          </div>
        </div>
      </div>

      <!-- text req field-->
      <div class="form-group">
        <label class="col-md-4 control-label">課程領域</label>
        <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-tag"></i></span>
            <select class="form-control" id="field" name="field" value="{{$module_class->field}}">
              <option value="人文與思想" id="field1">人文與思想</option>
              <option value="自然科學" id="field2">自然科學</option>
              <option value="應用科學" id="field3">應用科學</option>
              <option value="社會思潮與現象" id="field4">社會思潮與現象</option>
              <option value="跨域整合" id="field5">跨域整合</option>
              <option value="社會實踐" id="field6">社會實踐</option>
              <option value="創意創業" id="field7">創意創業</option>
              <option value="其他" id="field8">其他</option>
            </select>
          </div>
        </div>
      </div>

      <!-- text no_req other_field-->
      <div class="form-group" id="other_field">
        <label class="col-md-4 control-label">輸入分類</label>
        <div class="col-md-4 inputGroupContainer">
        <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-circle-arrow-right"></i></span>
        <input  name="other_field" placeholder="請輸入其他分類名稱" class="form-control"  type="text" value="{{$module_class->other_field}}">
          </div>
        </div>
      </div>

      <!-- Text location req-->
      <div class="form-group">
        <label class="col-md-4 control-label" >上課地點</label>
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
        <input name="location" value="{{$module_class->location}}" placeholder="請輸入上課地點" class="form-control"  type="text" required>
          </div>
        </div>
      </div>

      <!-- Text limit req-->
      <div class="form-group">
        <label class="col-md-4 control-label">人數限制</label>
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-blackboard"></i></span>
        <input name="limit" value="{{$module_class->limit}}" placeholder="ex. 50" class="form-control"  type="text" required>
          </div>
        </div>
      </div>

      <!-- Text teacher req-->
      <div class="form-group">
        <label class="col-md-4 control-label">講師姓名</label>
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
        <input name="teacher" value="{{$module_class->teacher}}" placeholder="請輸入授課講師中文名字" class="form-control" type="text" required>
          </div>
        </div>
      </div>

      <!-- Text email req-->
      <div class="form-group">
        <label class="col-md-4 control-label">聯絡方式</label>
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
        <input name="email" value="{{$module_class->email}}" placeholder="請填入電子郵件" class="form-control" type="text" required>
          </div>
        </div>
      </div>

      <!-- Textarea no_req teacher_intro -->
      <div class="form-group">
        <label class="col-md-4 control-label">講師介紹</label>
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-comment"></i></span>
                <textarea class="form-control full" name="teacher_intro" placeholder="講師背景及專長介紹">{{$module_class->teacher_intro}}</textarea>
          </div>
          </div>
        </div>

      <!-- Text class_hr req-->
      <div class="form-group">
        <label class="col-md-4 control-label">課程時數</label>
          <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-edit"></i></span>
              <input name="class_hr" value="{{$module_class->class_hr}}" placeholder="本課程上課總時數(hr)" class="form-control" type="text" required>
            </div>
          </div>
        </div>

      <!-- Text auth_hr req-->
      <div class="form-group">
        <label class="col-md-4 control-label">認證時數</label>
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-check"></i></span>
        <input name="auth_hr" value="{{$module_class->auth_hr}}" placeholder="修完本課程學生獲得認證時數(hr)" class="form-control" type="text" required>
          </div>
        </div>
      </div>

      <!-- Textarea no_req class_intro -->
      <div class="form-group">
        <label class="col-md-4 control-label">課程簡介</label>
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-info-sign"></i></span>
                <textarea class="form-control full" name="class_intro" placeholder="課程介紹">{{$module_class->class_intro}}</textarea>
        </div>
        </div>
      </div>

      <!-- 以下三組為模組課程獨有 -->
      <!-- Textarea no_req goal -->
      <div class="form-group">
        <label class="col-md-4 control-label">課程目標</label>
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-screenshot"></i></span>
                <textarea class="form-control full" name="goal" placeholder="本模組課程欲達成之學習目標">{{$module_class->goal}}</textarea>
        </div>
        </div>
      </div>

      <!-- Textarea no_req claim -->
      <div class="form-group">
        <label class="col-md-4 control-label">課程要求</label>
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-equalizer"></i></span>
                <textarea class="form-control full" name="claim" placeholder="本課程對學生修課之要求">{{$module_class->claim}}</textarea>
        </div>
        </div>
      </div>

      <!-- Textarea no_req other-->
      <div class="form-group">
        <label class="col-md-4 control-label">其他</label>
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-asterisk"></i></span>
                <textarea class="form-control full" name="other" placeholder="其他注意事項">{{$module_class->other}}</textarea>
        </div>
        </div>
      </div>

      <!-- text no_req keyword-->
      <div class="form-group">
        <label class="col-md-4 control-label">關鍵字</label>
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-filter"></i></span>
            <input name="keyword" placeholder="關鍵字請以空格隔開" class="form-control" type="text" value="{{$module_class->keyword}}">
          </div>
        </div>
      </div>

      <!-- text no_req video-->
      <div class="form-group">
        <label class="col-md-4 control-label">影音連結</label>
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-film"></i></span>
            <input name="video" placeholder="請輸入課程影音網址" class="form-control" type="text" value="{{$module_class->video}}">
          </div>
        </div>
      </div>

      <br>

      <!-- Button submit-->
      <div class="form-group">
        <center>
          <!-- 確認更改以後將資料回傳到login上面 顯示 -->
          {{ csrf_field() }}
          <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-ok"></span> 確認更改 </button>
        </center>
      </div>

    </fieldset>
  </form>
  <!-- 下半部分 -->

      <!-- table -->
      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>上課日期</th>
              <th>起始時間</th>
              <th>結束時間</th>
              <th>授課講師</th>
              <th>上課主題</th>
              <th>上課內容</th>
              <th>備註</th>
              <th></th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            @foreach ($modules as $module)
            <tr>
              <td>{{$module->date}}</td>
              <td>{{$module->start}}</td>
              <td>{{$module->end}}</td>
              <td>{{$module->teacher}}</td>
              <td>{{$module->unit}}</td>
              <td>{{$module->detail}}</td>
              <td>{{$module->comment}}</td>
              <td>
                <!-- edit -->
                <a href="#" data-toggle="modal" data-target="#editmodule{{$module->id}}">
                  <button type="button" class="btn btn-default btn-sm">
                    <span class="glyphicon glyphicon-pencil"></span> 編輯
                  </button>
                </a>
              </td>
              <td>
                <!-- delete -->
                <a href="#" data-toggle="modal" data-target="#deletemodule{{$module->id}}">
                  <button type="button" class="btn btn-danger btn-sm">
                    <span class="glyphicon glyphicon-trash"></span> 刪除
                  </button>
                </a>
              </td>
            </tr>
            <!-- delete warning modal-->
            <div class="modal fade" id="deletemodule{{$module->id}}" role="dialog">
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
                      <a href="{{asset('/application/deleteSmallModule')}}/{{$module->id}}">
                        <button type="button" class="btn btn-danger">
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

        @foreach ($modules as $module)
        <!-- edit course modal-->
        <div class="modal fade" id="editmodule{{$module->id}}" role="dialog">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">編輯課程</h4>
              </div>
              <div class="modal-body">
                <form class=" form-horizontal" action="{{asset('/application/edit_smallmodule')}}/{{$module->id}}" method="post"  id="edit_form">
                  <fieldset>
                    <!-- 此處input name更改 -->
                    <!-- Text input-->
                    <div class="form-group">
                      <div class="col-md-3">
                      </div>
                      <label class="col-md-2 control-label">上課日期</label>
                      <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                          <input  name="date" value="{{$module->date}}" placeholder="課程日期 ex.9/18" class="form-control"  type="date">
                        </div>
                      </div>
                      <div class="col-md-3">
                      </div>
                    </div>

                    <br>
                    <br>

                    <!-- Text start-->
                    <div class="form-group">
                      <div class="col-md-3">
                      </div>
                      <label class="col-md-2 control-label">起始時間</label>
                      <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                            <input name="start"  value="{{$module->start}}" placeholder="ex. 9/17 9:00-12:00" class="form-control"  type="time">
                        </div>
                      </div>
                      <div class="col-md-3">
                      </div>
                    </div>

                    <br>
                    <br>

                    <!-- Text end-->
                    <div class="form-group">
                      <div class="col-md-3">
                      </div>
                      <label class="col-md-2 control-label">結束時間</label>
                        <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                      <input name="end"  value="{{$module->end}}" placeholder="ex. 9/17 9:00-12:00" class="form-control"  type="time">
                        </div>
                      </div>
                      <div class="col-md-3">
                      </div>
                    </div>

                    <br>
                    <br>

                    <!-- Text input-->
                    <div class="form-group">
                      <div class="col-md-3">
                      </div>
                      <label class="col-md-2 control-label">授課講師</label>
                        <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                      <input name="teacher"  value="{{$module->teacher}}" placeholder="請輸入授課講師中文名字" class="form-control" type="text">
                        </div>
                      </div>
                      <div class="col-md-3">
                      </div>
                    </div>

                    <br>
                    <br>

                    <!-- Text input-->
                    <div class="form-group">
                      <div class="col-md-3">
                      </div>
                      <label class="col-md-2 control-label">授課主題</label>
                        <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-book"></i></span>
                      <input name="unit"  value="{{$module->unit}}" placeholder="本堂上課主題或單元" class="form-control" type="text">
                        </div>
                      </div>
                      <div class="col-md-3">
                      </div>
                    </div>

                    <br>
                    <br>

                    <!-- Text area -->
                    <div class="form-group">
                      <div class="col-md-3">
                      </div>
                      <label class="col-md-2 control-label">授課內容</label>
                        <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-info-sign"></i></span>
                              <textarea class="form-control full" name="detail"  placeholder="本堂授課內容">{{$module->detail}}</textarea>
                      </div>
                      </div>
                      <div class="col-md-3">
                      </div>
                    </div>

                    <br>
                    <br>
                    <br>

                    <!-- Text area -->
                    <div class="form-group">
                      <div class="col-md-3">
                      </div>
                      <label class="col-md-2 control-label">課程備註</label>
                        <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-exclamation-sign"></i></span>
                              <textarea class="form-control full" name="comment" placeholder="本堂課備註或注意事項 ex.更換授課地點或時間或人數限制更動"> {{$module->comment}}</textarea>
                      </div>
                      </div>
                      <div class="col-md-3">
                      </div>
                    </div>

                    <br>
                    <br>

                  </fieldset>
              <!-- </div>

              <div class="modal-footer"> -->
                <center>
                  <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                  <button type="submit" class="btn btn-warning">
                    <span class="glyphicon glyphicon-ok"></span> 確認更改
                  </button>
                </center>
              </div>
            </form>

            </div>
          </div>
        </div>
        @endforeach
      </div>

      <br>

      <!-- Button new class and back -->
      <div class="form-group">
        <center>
          <a href="#" data-toggle="modal" data-target="#new">
            <button type="button" class="btn btn-default btn-md">
              <span class="glyphicon glyphicon-plus"></span> 新增一堂課程
            </button>
          </a>
          <a href="{{ url('/application') }}">
            <button type="button" class="btn btn-info">返回 <span class="glyphicon glyphicon-log-out"></span></button>
          </a>
        </center>
      </div>



  <!-- new class modal -->
  <div class="modal fade" id="new" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">新增一堂課程</h4>
        </div>
        <div class="modal-body">

          <!-- form -->
          <form class="well form-horizontal" action="{{asset('/application/add_module')}}" method="post"  id="new_form">
            <fieldset>
              <!-- 此處input name尚未更改 -->
              <!-- Text date-->
              <div class="form-group">
                <label class="col-md-4 control-label">上課日期</label>
                <div class="col-md-4 inputGroupContainer">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                    <input  name="date" placeholder="課程日期 ex.9/18" class="form-control"  type="date">
                  </div>
                </div>
              </div>

              <!-- Text strat-->
              <div class="form-group">
                <label class="col-md-4 control-label">起始時間</label>
                  <div class="col-md-4 inputGroupContainer">
                  <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                <input name="start" placeholder="ex. 9:00-12:00" class="form-control"  type="time">
                  </div>
                </div>
              </div>

              <!-- Text end-->
              <div class="form-group">
                <label class="col-md-4 control-label">結束時間</label>
                  <div class="col-md-4 inputGroupContainer">
                  <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                <input name="end" placeholder="ex. 9:00-12:00" class="form-control"  type="time">
                  </div>
                </div>
              </div>

              <!-- Text input-->
              <div class="form-group">
                <label class="col-md-4 control-label">授課講師</label>
                  <div class="col-md-4 inputGroupContainer">
                  <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input name="teacher" placeholder="請輸入授課講師中文名字" class="form-control" type="text">
                  </div>
                </div>
              </div>

              <!-- Text input-->
              <div class="form-group">
                <label class="col-md-4 control-label">授課主題</label>
                  <div class="col-md-4 inputGroupContainer">
                  <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-book"></i></span>
                <input name="unit" placeholder="本堂上課主題或單元" class="form-control" type="text">
                  </div>
                </div>
              </div>

              <!-- Text area -->
              <div class="form-group">
                <label class="col-md-4 control-label">授課內容</label>
                  <div class="col-md-4 inputGroupContainer">
                  <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-info-sign"></i></span>
                        <textarea class="form-control full" name="detail" placeholder="本堂授課內容"></textarea>
                </div>
                </div>
              </div>

              <!-- Text area -->
              <div class="form-group">
                <label class="col-md-4 control-label">課程備註</label>
                  <div class="col-md-4 inputGroupContainer">
                  <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-exclamation-sign"></i></span>
                        <textarea class="form-control full" name="comment" placeholder="本堂課備註或注意事項 ex.更換授課地點或時間或人數限制更動"></textarea>
                </div>
                </div>
              </div>

            </fieldset>

        <!-- </div> -->

        <!-- <div class="modal-footer"> -->
          <center>
            <input type="hidden" name="class_id" value="{{$module_class->id}}">
            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
            <button type="submit" class="btn btn-success">
              <span class="glyphicon glyphicon-ok"></span> 確認新增
            </button>
          </center>
        </div>
        </form>
      </div>
    </div>
  </div>





</div>
@endsection

@section('css')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>
  table{
    table-layout:fixed;
    word-break:break-all;
    word-wrap:break-word;
  }
  td{
    word-wrap:break-word;
  }
</style>
<style>
#other_field{
  display: none;
}
</style>
@endsection

@section('js')
<script>
var x = $("#field").attr("value");
var b = $("#way").attr("value");
$(document).ready(function(){
  for(y=1;y<=8;y++){
    if(x== $("#field"+y).attr("value")){
      $("#field"+y).attr('selected','selected');
    }
  }
  for(a=1;a<=3;a++){
    if(b== $("#way"+a).attr("value")){
      $("#way"+a).attr('selected','selected');
    }
  }

  $('select').change(function(){
    if($('select option:selected').text() === "其他"){
      $('#other_field').show();
    }
    else{
      $('#other_field').hide();
    }
  });

  if($("#field").val() === "其他"){
    $("#other_field").css("display","block");
  }
});
</script>
@endsection
