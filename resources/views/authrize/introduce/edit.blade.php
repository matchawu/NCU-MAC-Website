@extends('layouts.app')

@section('title','常見問題編輯')

@section('content')
<div class="panel-group">
  <div class="panel panel-info" style="margin-top: 5%;">
    <div class="panel-heading"><center>相關問題編輯與刪除</center></div>
    <div class="panel-body">
      @foreach($introduce_questions as $introduce_question)
        <ul>
          <li style="margin-left: 5%;">
            Question : {{$introduce_question->question}}
            <br><br>
          <div class="row">
            <div class="col-sm-10">Answer : {{$introduce_question->answer}}</div>
            <div class="col-sm-1">

                <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editModal{{$introduce_question->id}}">
                  <span class="glyphicon glyphicon-pencil"></span> 編輯
                </button>

              <!-- 編輯的Modal -->
              <div class="modal fade" id="editModal{{$introduce_question->id}}" role="dialog">
                <div class="modal-dialog">
                  <!-- Modal content-->
                    <div class="modal-content">
                      <form action="{{ asset('/authrize/menu/introduce/edit/'.$introduce_question->id) }}" method="post">
                      {{ csrf_field() }}
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">{{$introduce_question->question}}</h4>
                      </div>
                      
                      <div class="modal-body">
                        <h4>問題</h4>
                        <div class="input-group">                  
                          <span class="input-group-addon"><i class="glyphicon glyphicon-education"></i></span>
                          
                          <textarea name="question" class="form-control">{{$introduce_question->question}}</textarea>
                        </div>

                        <h4>答案</h4>
                        <div class="input-group">                  
                          <span class="input-group-addon"><i class="glyphicon glyphicon-education"></i></span>
                          <textarea name="answer" class="form-control">{{$introduce_question->answer}}</textarea>
                        </div>
                      </div>
                    <!-- Modal footer-->
                      <div class="modal-footer">                
                        <button type="submit" class="btn btn-default">確認編輯</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">關閉</button>
                      </div>
                      </form>
                    </div>
                  
                </div>
              </div>

            </div>
            <div class="col-sm-1">
              <form action="{{ url('/authrize/menu/introduce/edit/'.$introduce_question->id) }}" method="POST">
                {!! csrf_field() !!}
                {!! method_field('DELETE') !!}
                <button type="submit" class="btn btn-danger btn-sm" id="{{ $introduce_question->id }}">
                  <span class="glyphicon glyphicon-trash"></span> 刪除
                </button>
              </form>
            </div>

          </div>
          </li>
          
          <br><hr>
        </ul>
      @endforeach
    </div>
  </div>
  
  <!-- 新增 -->
  <div class="panel panel-info" style="margin-bottom:  15%;">
    <div class="panel-heading"><center>相關問題新增</center></div>
    <div class="panel-body">
      <form action="{{ asset('/authrize/menu/introduce/edit') }}" method="POST" name="add">
        {{ csrf_field() }}
        <h4>問題</h4>
        <div class="input-group">                  
          <span class="input-group-addon"><i class="glyphicon glyphicon-education"></i></span>
          <input name="question" class="form-control" type="text">
        </div>

        <h4>答案</h4>
        <div class="input-group">                  
          <span class="input-group-addon"><i class="glyphicon glyphicon-education"></i></span>
          <textarea name="answer" class="form-control" type="text"></textarea>
        </div>
        <br>
        <center>
          <button type="submit" class="btn btn-info btn-sm">
            <span class="glyphicon glyphicon-ok"></span> 送出新增
          </button>
        </center>
      </form> 
    </div>
  </div>
</div>

@endsection

@section('css')
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
@endsection
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
@section('js')



