@extends('layouts.app')

@section('title', '審核單位分流')

@section('content')
  <br>
     <br>
     <br>
     <br>
     <br>
      <div class="panel panel-green">
     
      <div class="panel-body" style="font-size:25px;"><center>開課單位帳號申請</center></div>
      <form role="form">
        <div class="form-group">
          <label for="name">開課單位</label>
          <input type="text" class="form-control" id="name" placeholder="请输入開課單位名稱">
          <label for="name">帳號</label>
          <input type="text" class="form-control" id="account" placeholder="请输入帳號">
          <label for="name">密碼</label>
          <input type="text" class="form-control" id="password" placeholder="请输入密碼">
          <label for="name">請再次輸入密碼</label>
          <input type="text" class="form-control" id="password2" placeholder="请输入名称">
          <label for="name">開課單位編號</label>
          <input type="text" class="form-control" id="name" placeholder="请输入開課單位編號">
         </div>
          <div class="form-group">
            <label for="inputfile">其他檔案(文件)</label>
            <input type="file" id="inputfile">
            <p class="help-block">一些文字敘述。</p>
          </div>
          <div class="checkbox">
            <label>
              <input type="checkbox">我已閱讀過相關文件
            </label>
          </div>
      <button type="submit" class="btn btn-primary btn-block">提交！</button>
</form>
      </div>
@endsection

@section('css')
  <style>
    .divCenter{
      position: absolute;
      top: 25vh;
    }
    .imgClass{
       border-radius: 8px;
    }
    .imgClass:hover{
      box-shadow: 5px 5px 5px grey;
      width: 98%;
      height: 98%;
    }
    .title{
      text-align: center;
    }


    </style>
@endsection

@section('js')
  <script>

  </script>
@endsection
