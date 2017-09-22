@extends('layouts.app')

@section('title', '開設個別課程')

@section('content')
<div class="container">
  <h2>
    <b></b>
  </h2>
</div>
<br>

<div class="container col-sm-1">
</div>

<div class="container col-sm-10">
  <form class="well form-horizontal" action="{{asset('/authrize/achievement')}}" method="post"  id="single_class">
    <fieldset>

      <!-- Form Name -->
      <legend><b>計畫基本資料表</b></legend>

      <!-- 此處input name 已更改 -->
      <!-- text req term-->
      <div class="form-group">
        <label class="col-md-4 control-label">申請召集人</label>
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
        <input name="gather_name" class="form-control"  type="text" placeholder="姓名" required>
              <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
        <input name="gather_grade" class="form-control"  type="text" placeholder="系/年級" required>

          </div>
          <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
        <input name="gather_email" class="form-control"  type="text" placeholder="聯絡信箱" required>
              <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
        <input name="gather_phone" class="form-control"  type="text" placeholder="連絡電話" required>
          
          </div>
        </div>
      </div>

      

      <!-- text req location-->
      <div class="form-group">
        <label class="col-md-4 control-label" >社群類別</label>
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
        <div class="checkbox-inline" >
          <label>
        <input type="checkbox" value="同領域(同院、系)"> 同領域(同院、系) <br><input type="checkbox" value="跨領域(跨院、校)"> 跨領域(跨院、校)
          </label>
         </div>
          </div>
        </div>
      </div>

      <!-- text req date-->
      <div class="form-group">
        <label class="col-md-4 control-label">社群成員1</label>
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
        <input name="member1_name" class="form-control"  type="text" placeholder="姓名" required>
              <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
        <input name="member1_place" class="form-control"  type="text" placeholder="擔任" required>

          </div>
          <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
        <input name="member1_email" class="form-control"  type="text" placeholder="E-mail" required>
              <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
        <input name="member1_phone" class="form-control"  type="text" placeholder="連絡電話" required>
          
          </div>
        </div>
      </div>

      <!-- text req date-->
      <div class="form-group">
        <label class="col-md-4 control-label">社群成員1</label>
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
        <input name="member2_name" class="form-control"  type="text" placeholder="姓名" required>
              <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
        <input name="member2_place" class="form-control"  type="text" placeholder="擔任" required>

          </div>
          <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
        <input name="member2_email" class="form-control"  type="text" placeholder="E-mail" required>
              <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
        <input name="member2_phone" class="form-control"  type="text" placeholder="連絡電話" required>
          
          </div>
        </div>
      </div>
  
      <div class="form-group">
        <label class="col-md-4 control-label">成果主題</label>
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
        <input name="result_topic" placeholder="" class="form-control" type="text" required>
          </div>
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-4 control-label" data-toggle="tooltip" title="Hooray!">成果介紹</label>
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-info-sign"></i></span>
                <textarea class="form-control full" name="result_intro" placeholder="一、成果內容說明
二、作品附件(含影像、程式、簡報或展演紀錄等，可提供連結在下方)"></textarea>
        </div>
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-4 control-label" data-toggle="tooltip" title="Hooray!">學習反思與效益</label>
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-info-sign"></i></span>
                <textarea class="form-control full" name="result_achievement" placeholder=""></textarea>
        </div>
        </div>
      </div>
      
      <div class="form-group">
        <label class="col-md-4 control-label" data-toggle="tooltip" title="Hooray!">執行所遇之困難</label>
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-info-sign"></i></span>
                <textarea class="form-control full" name="result_difficulty" placeholder=""></textarea>
        </div>
        </div>
      </div>

      <!-- text no_req keyword-->
      <div class="form-group">
        <label class="col-md-4 control-label">關鍵字</label>
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-filter"></i></span>
        <input name="keyword" placeholder="關鍵字請以空格隔開" class="form-control" type="text">
          </div>
        </div>
      </div>

      <!-- text no_req video-->
      <div class="form-group">
        <label class="col-md-4 control-label">作品附件連結</label>
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-film"></i></span>
            <input name="accociate" placeholder="請輸入課程影音網址" class="form-control" type="text">
          </div>
        </div>
      </div>

      <!-- Button submit-->
      <div class="form-group">
        <center>
          {{ csrf_field() }}
          <button type="submit" class="btn btn-success"> 填寫完成 <span class="glyphicon glyphicon-ok"></span></button>
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

<style>
#other_field{
  display: none;
}
</style>
@endsection

@section('js')
<script>
$('select').change(function(){
  if($('select option:selected').text() == "其他"){
    $('#other_field').show();
  }
  else{
    $('#other_field').hide();
  }
});
</script>
@endsection
