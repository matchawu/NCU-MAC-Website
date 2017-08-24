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

<div class="container col-sm-10">
  <form class="well form-horizontal" action=" " method="post"  id="contact_form">
    <fieldset>
      <!-- Form Name -->
      <legend><b>編輯模組課程</b></legend>

      <!-- 此處input name尚未更改 -->
      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label">開課學期</label>
        <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-glass"></i></span>
            <input  name="first_name" placeholder="ex. 106-1" class="form-control"  type="text">
          </div>
        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label">課程名稱</label>
        <div class="col-md-4 inputGroupContainer">
        <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-education"></i></span>
        <input  name="first_name" placeholder="課程中文名稱" class="form-control"  type="text">
          </div>
        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label">課程領域</label>
        <div class="col-md-4 inputGroupContainer">
        <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-tag"></i></span>
        <input  name="first_name" placeholder="人文藝術、" class="form-control"  type="text">
          </div>
        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" >上課地點</label>
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
        <input name="last_name" placeholder="請輸入上課地點" class="form-control"  type="text">
          </div>
        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label">上課時間</label>
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
        <input name="email" placeholder="ex. 星期二 9:00-12:00" class="form-control"  type="text">
          </div>
        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label">人數限制</label>
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-blackboard"></i></span>
        <input name="email" placeholder="ex. 50" class="form-control"  type="text">
          </div>
        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label">講師姓名</label>
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
        <input name="phone" placeholder="請輸入授課講師中文名字" class="form-control" type="text">
          </div>
        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label">聯絡方式</label>
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
        <input name="phone" placeholder="請填入Email或手機號碼" class="form-control" type="text">
          </div>
        </div>
      </div>

      <!-- Text area -->
      <div class="form-group">
        <label class="col-md-4 control-label">講師介紹</label>
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-comment"></i></span>
                <textarea class="form-control full" name="comment" placeholder="講師背景及專長介紹"></textarea>
          </div>
          </div>
        </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label">課程時數</label>
          <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-edit"></i></span>
              <input name="address" placeholder="本課程上課總時數(hr)" class="form-control" type="text">
            </div>
          </div>
        </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label">認證時數</label>
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-check"></i></span>
        <input name="address" placeholder="修完本課程學生獲得認證時數(hr)" class="form-control" type="text">
          </div>
        </div>
      </div>

      <!-- Text area -->
      <div class="form-group">
        <label class="col-md-4 control-label">課程簡介</label>
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-info-sign"></i></span>
                <textarea class="form-control full" name="comment" placeholder="課程介紹"></textarea>
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
                <textarea class="form-control full" name="comment" placeholder="本模組課程欲達成之學習目標"></textarea>
        </div>
        </div>
      </div>

      <!-- Text area -->
      <div class="form-group">
        <label class="col-md-4 control-label">課程要求</label>
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-equalizer"></i></span>
                <textarea class="form-control full" name="comment" placeholder="本課程對學生修課之要求"></textarea>
        </div>
        </div>
      </div>

      <!-- Text area -->
      <div class="form-group">
        <label class="col-md-4 control-label">其他</label>
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-asterisk"></i></span>
                <textarea class="form-control full" name="comment" placeholder="其他注意事項"></textarea>
        </div>
        </div>
      </div>

      <br>

      <!-- Button new class-->
      <div class="form-group">
        <center>
          <a href="#" data-toggle="modal" data-target="#new">
            <button type="button" class="btn btn-default btn-md">
              <span class="glyphicon glyphicon-plus"></span> 新增一堂課程
            </button>
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
              <form class="well form-horizontal" action=" " method="post"  id="new_form">
                <fieldset>
                  <!-- 此處input name尚未更改 -->
                  <!-- Text input-->
                  <div class="form-group">
                    <label class="col-md-4 control-label">上課日期</label>
                    <div class="col-md-4 inputGroupContainer">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                        <input  name="first_name" placeholder="課程日期 ex.9/18" class="form-control"  type="text">
                      </div>
                    </div>
                  </div>

                  <!-- Text input-->
                  <div class="form-group">
                    <label class="col-md-4 control-label">上課時間</label>
                      <div class="col-md-4 inputGroupContainer">
                      <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                    <input name="email" placeholder="ex. 9:00-12:00" class="form-control"  type="text">
                      </div>
                    </div>
                  </div>

                  <!-- Text input-->
                  <div class="form-group">
                    <label class="col-md-4 control-label">授課講師</label>
                      <div class="col-md-4 inputGroupContainer">
                      <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input name="phone" placeholder="請輸入授課講師中文名字" class="form-control" type="text">
                      </div>
                    </div>
                  </div>

                  <!-- Text input-->
                  <div class="form-group">
                    <label class="col-md-4 control-label">授課主題</label>
                      <div class="col-md-4 inputGroupContainer">
                      <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-book"></i></span>
                    <input name="phone" placeholder="本堂上課主題或單元" class="form-control" type="text">
                      </div>
                    </div>
                  </div>

                  <!-- Text area -->
                  <div class="form-group">
                    <label class="col-md-4 control-label">授課內容</label>
                      <div class="col-md-4 inputGroupContainer">
                      <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-info-sign"></i></span>
                            <textarea class="form-control full" name="comment" placeholder="本堂授課內容"></textarea>
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
              </form>
            </div>

            <div class="modal-footer">
              <center>
                <button type="button" class="btn btn-success" data-dismiss="modal">
                  <span class="glyphicon glyphicon-ok"></span> 確認新增
                </button>
              </center>
            </div>
          </div>
        </div>
      </div>

      <!-- edit course modal-->
      <div class="modal fade" id="edit" role="dialog">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">編輯課程</h4>
            </div>
            <div class="modal-body">
              <!-- form 把.well拿掉就不會有灰色背景-->
              <form class=" form-horizontal" action=" " method="post"  id="edit_form">
                <fieldset>
                  <!-- 此處input name尚未更改 -->
                  <!-- Text input-->

                  <div class="form-group">
                    <label class="col-md-4 control-label">上課日期</label>
                    <div class="col-md-4 inputGroupContainer">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                        <input  name="first_name" placeholder="課程日期 ex.9/18" class="form-control"  type="text">
                      </div>
                    </div>
                  </div>

                  <!-- Text input-->
                  <div class="form-group">
                    <label class="col-md-4 control-label">上課時間</label>
                      <div class="col-md-4 inputGroupContainer">
                      <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                    <input name="email" placeholder="ex. 9/17 9:00-12:00" class="form-control"  type="text">
                      </div>
                    </div>
                  </div>

                  <!-- Text input-->
                  <div class="form-group">
                    <label class="col-md-4 control-label">授課講師</label>
                      <div class="col-md-4 inputGroupContainer">
                      <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input name="phone" placeholder="請輸入授課講師中文名字" class="form-control" type="text">
                      </div>
                    </div>
                  </div>

                  <!-- Text input-->
                  <div class="form-group">
                    <label class="col-md-4 control-label">授課主題</label>
                      <div class="col-md-4 inputGroupContainer">
                      <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-book"></i></span>
                    <input name="phone" placeholder="本堂上課主題或單元" class="form-control" type="text">
                      </div>
                    </div>
                  </div>

                  <!-- Text area -->
                  <div class="form-group">
                    <label class="col-md-4 control-label">授課內容</label>
                      <div class="col-md-4 inputGroupContainer">
                      <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-info-sign"></i></span>
                            <textarea class="form-control full" name="comment" placeholder="本堂授課內容"></textarea>
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
              </form>
            </div>

            <div class="modal-footer">
              <center>
                <button type="button" class="btn btn-warning" data-dismiss="modal">
                  <span class="glyphicon glyphicon-ok"></span> 確認更改
                </button>
              </center>
            </div>
          </div>
        </div>
      </div>

      <!-- delete warning modal-->
      <div class="modal fade" id="delete" role="dialog">
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
                <button type="button" class="btn btn-danger" data-dismiss="modal">
                  <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> 確認刪除
                </button>
              </center>
            </div>
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
              <th></th>
              <th></th>
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
              <td>
                <!-- edit -->
                <a href="#" data-toggle="modal" data-target="#edit">
                  <button type="button" class="btn btn-default btn-sm">
                    <span class="glyphicon glyphicon-pencil"></span> 編輯
                  </button>
                </a>
              </td>
              <td>
                <!-- delete -->
                <a href="#" data-toggle="modal" data-target="#delete">
                  <button type="button" class="btn btn-danger btn-sm">
                    <span class="glyphicon glyphicon-trash"></span> 刪除
                  </button>
                </a>
              </td>
            </tr>
            <tr>
              <td>2</td>
              <td>09/19</td>
              <td>9:00-12:00</td>
              <td>辛棄疾</td>
              <td>南宋愛國詩講座</td>
              <td>如何變得愛國</td>
              <td>上課地點改在314</td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>3</td>
              <td>09/19</td>
              <td>9:00-12:00</td>
              <td>辛棄疾</td>
              <td>南宋愛國詩講座</td>
              <td>如何變得愛國</td>
              <td>上課地點改在314</td>
              <td></td>
              <td></td>
            </tr>
          </tbody>
        </table>
      </div>

      <!-- Button submit -->
      <div class="form-group">
        <center>
          <!-- 確認更改以後將資料回傳到login上面 顯示 -->
          <a href="{{ url('/application/login') }}">
            <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-ok"></span> 確認更改 </button>
          </a>
          <a href="{{ url('/application/login') }}">
            <button type="button" class="btn btn-info">返回 <span class="glyphicon glyphicon-log-out"></span></button>
          </a>
        </center>
      </div>

    </fieldset>
  </form>
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
