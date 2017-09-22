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
  <form action="{{asset('/application/addappUser')}}" method="post">          
  <table class="table">
    <tbody>
      <tr>
      @if (isset($hint))
      <div class="alert alert-warning">
          <span class="glyphicon glyphicon-exclamation-sign"></span>
          <strong>{{$hint}}</strong>
      </div>
      @endif
      {{ csrf_field() }}
        <td><input type="text"  class="form-control" name ="unitname" placeholder="開課單位" required></td>
        <td><input type="text" class="form-control" name ="account" placeholder="帳號" required></td>
        <td><input type="password" class="form-control" name ="password" placeholder="密碼" required></td>
        <td><input type="password" class="form-control" placeholder="確認密碼" required></td>
        <td><input type="email" class="form-control" name ="mail" placeholder="聯絡信箱" required></td>
        <td><input type="text" class="form-control" name="phone" placeholder="申請人電話" required></td>
        <td><input type="text" class="form-control" name ="name" placeholder="申請人姓名" required></td>
                <!-- create -->
                <td>
                    <button type="submit" class="btn btn-primary btn-sm">
                      <span class="glyphicon glyphicon-plus"></span> 新增
                    </button>
                </td>
      

      </tr>

    </tbody>
  </table>
  </form>
  <table class="table table-bordered table-hover">
    <thead>
      <tr>
        <th>開課單位</th>
        <th>帳號</th>
        <th>聯絡信箱</th>
        <th>聯絡電話</th>
        <th>申請人姓名</th>
        <th colspan = 2>操作</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($applicants as $applicants)
      <tr class="success">
        <td>{{$applicants->unitname}}</td>
        <td>{{$applicants->account}}</td>
        <td>{{$applicants->mail}}</td>
        <td>{{$applicants->phone}}</td>
        <td>{{$applicants->name}}</td>
        <td>
                  <a href="{{ url('/application/edit_single') }}/{{$applicants->id}}">
                    <button type="button" class="btn btn-warning btn-sm">
                      <span class="glyphicon glyphicon-pencil"></span> 編輯
                    </button>
                  </a>
                </td>
                <!-- del -->
                <td>
                  <a href="#" data-toggle="modal" data-target="#deletesingle{{$applicants->id}}">
                    <button type="button" class="btn btn-danger btn-sm">
                      <span class="glyphicon glyphicon-trash"></span> 刪除
                    </button>
                  </a>
                </td>
      </tr>
      <div class="modal fade" id="deletesingle{{$applicants->id}}" role="dialog">

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
                            <a href="{{asset('/authrize/deleteapplicants')}}/{{$applicants->id}}">
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
