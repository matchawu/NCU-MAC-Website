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
    <form class="well form-horizontal" action=" " method="post"  id="contact_form">
<fieldset>

<!-- title -->
<legend><b>已開設課程</b></legend>

<!-- course table -->
<div class="table-responsive">
  <table class="table table-striped">
    <thead>
      <tr>
        <th>#</th>
        <th>課程名稱</th>
        <th>課程屬性</th>
        <th>上課時數</th>
        <th>認證時數</th>
        <th>申請日期</th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>python</td>
        <td>碎形課程</td>
        <td>10</td>
        <td>10</td>
        <td>2017/08/30</td>
        <td>
          <a href="#" data-toggle="modal" data-target="#01">
            <button type="button" class="btn btn-default btn-sm">
              <span class="glyphicon glyphicon-eye-open"></span> 查看詳情
            </button>
          </a>
        </td>
        <td>
          <a href="#" data-toggle="modal" data-target="#delete">
            <button type="button" class="btn btn-danger btn-sm">
              <span class="glyphicon glyphicon-trash"></span> 刪除
            </button>
          </a>
        </td>
      </tr>
      <tr>
        <td>2</td>
        <td>孤帆遠影畢書盡</td>
        <td>碎形課程</td>
        <td>10</td>
        <td>10</td>
        <td>2017/08/30</td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>3</td>
        <td>python</td>
        <td>碎形課程</td>
        <td>10</td>
        <td>10</td>
        <td>2017/08/30</td>
        <td></td>
        <td></td>
      </tr>
    </tbody>
  </table>
</div>

<!-- 各課程的modal -->
  <div class="modal fade" id="01" role="dialog">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">python</h4>
          </div>
          <div class="modal-body">
            <p>課程詳情</p>
          </div>
          <div class="modal-footer">
            <center>
              <button type="button" class="btn btn-info" data-dismiss="modal">關閉視窗</button>
            </center>
          </div>
        </div>
      </div>
    </div>

    <!-- delete warning -->
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
                <button type="button" class="btn btn-danger" data-dismiss="modal">確認刪除</button>
              </center>
            </div>
          </div>
        </div>
      </div>

<!-- Button -->
<div class="form-group">
  <!-- <label class="col-md-4 control-label"></label>
  <div class="col-md-4"> -->
  <center>
    <a href="{{ url('/application/form0') }}">
      <button type="button" class="btn btn-success">新增課程 <span class="glyphicon glyphicon-new-window"></span></button>
    </a>
  </center>
  <!-- </div> -->
</div>

</fieldset>
</form>
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
