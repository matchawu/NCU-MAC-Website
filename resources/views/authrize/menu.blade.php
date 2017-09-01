@extends('layouts.app')

@section('title', '管理員登入')

@section('content')

            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>開課帳號管理</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="container">

  <div class="alert alert-info alert-dismissable  fade in">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      <span class="glyphicon glyphicon-tags"></span>
       &nbsp;&nbsp;在此對開課單位的帳號進行<strong>新增、修改、刪除。</strong>
  </div>

  <div class="row">
                <div class="col-lg-12">
                    <h5><strong>新增</strong></h5>
                </div>
            </div>
  <table class="table">
    <tbody>
      <tr>
      @if (isset($hint))
      <div class="alert alert-warning">
          <span class="glyphicon glyphicon-exclamation-sign"></span>
          <strong>{{$hint}}</strong>
      </div>
      @endif
      <form class="" action="{{asset('/application/addappUser')}}" method="post">
      {{ csrf_field() }}
        <td><input type="text"  class="form-control" name ="unitname" placeholder="開課單位"></td>
        <td><input type="text" class="form-control" name ="account" placeholder="帳號"></td>
        <td><input type="password" class="form-control" name ="password" placeholder="密碼"></td>
        <td><input type="password" class="form-control" name ="password2" placeholder="確認密碼"></td>
        <td><input type="email" class="form-control" name ="mail" placeholder="聯絡信箱"></td>
        <td><input type="text" class="form-control" name ="name" placeholder="申請人姓名"></td>
        <td><input type="text" class="form-control" name="phone" placeholder="申請人電話"></td>
                <!-- create -->
                <td>
                    <button type="submit" class="btn btn-primary btn-sm">
                      <span class="glyphicon glyphicon-plus"></span> 新增
                    </button>
                </td>
      </form>
      </tr>
      
    </tbody>
  </table>

  <table class="table table-bordered table-hover">
    <thead>
      <tr>
        <th>開課單位</th>
        <th>帳號</th>
        <th>聯絡方式</th>
        <th>申請人姓名</th>>
        <th colspan = 2>操作</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>AAA</td>
        <td>Defaultson</td>
        <td>def@somemail.com</td>
        <td>123</td>
                <!-- edit -->
        <td>
          <button type="button" class="btn btn-warning btn-sm">
             <span class="glyphicon glyphicon-pencil"></span> 編輯
          </button>
        </td>
                <!-- del -->
        <td>
          <button type="button" class="btn btn-danger btn-sm">
            <span class="glyphicon glyphicon-trash"></span> 刪除
          </button>
        </td>
      </tr>      
      <tr class="success">
        <td>BBB</td>
        <td>Doe</td>
        <td>john@example.com</td>
        <td>456</td>
        <td>
          <button type="button" class="btn btn-warning btn-sm">
             <span class="glyphicon glyphicon-pencil"></span> 編輯
          </button>
        </td>
                <!-- del -->
        <td>
          <button type="button" class="btn btn-danger btn-sm">
            <span class="glyphicon glyphicon-trash"></span> 刪除
          </button>
        </td>
      </tr>
      <tr class="danger">
        <td>CCC</td>
        <td>Moe</td>
        <td>mary@example.com</td>
        <td>123</td>
        <td>
          <button type="button" class="btn btn-warning btn-sm">
             <span class="glyphicon glyphicon-pencil"></span> 編輯
          </button>
        </td>
                <!-- del -->
        <td>
          <button type="button" class="btn btn-danger btn-sm">
            <span class="glyphicon glyphicon-trash"></span> 刪除
          </button>
        </td>
      </tr>
      <tr class="info">
        <td>DDD</td>
        <td>Dooley</td>
        <td>july@example.com</td>
        <td>123</td>
        <td>
          <button type="button" class="btn btn-warning btn-sm">
             <span class="glyphicon glyphicon-pencil"></span> 編輯
          </button>
        </td>
                <!-- del -->
        <td>
          <button type="button" class="btn btn-danger btn-sm">
            <span class="glyphicon glyphicon-trash"></span> 刪除
          </button>
        </td>
      </tr>
      <tr class="warning">
        <td>EEE</td>
        <td>Refs</td>
        <td>bo@example.com</td>
        <td>123</td>
        <td>
          <button type="button" class="btn btn-warning btn-sm">
             <span class="glyphicon glyphicon-pencil"></span> 編輯
          </button>
        </td>
                <!-- del -->
        <td>
          <button type="button" class="btn btn-danger btn-sm">
            <span class="glyphicon glyphicon-trash"></span> 刪除
          </button>
        </td>
      </tr>
      <tr class="active">
        <td>FFF</td>
        <td>Activeson</td>
        <td>act@example.com</td>
        <td>123</td>
        <td>
          <button type="button" class="btn btn-warning btn-sm">
             <span class="glyphicon glyphicon-pencil"></span> 編輯
          </button>
        </td>
                <!-- del -->
        <td>
          <button type="button" class="btn btn-danger btn-sm">
            <span class="glyphicon glyphicon-trash"></span> 刪除
          </button>
        </td>
      </tr>
    </tbody>
  </table>
</div>

</body>
</html>

@endsection

@section('css')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script>

</script>
  <style>

        .function{
          border-style:outset;
          height: 190px; 
          text-align: center;
        }
    </style>
@endsection

@section('js')
<script>

</script>
@endsection