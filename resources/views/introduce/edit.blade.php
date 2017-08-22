@extends('layouts.app')

@section('title','微學分簡介編輯')

@section('content')
	<form  role="form"  action="">
        <div class="modal-dialog modal-lg">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Q & A</h4>
            </div>
            <div class="modal-body">
              <div class="form-group">
                  <textarea class="form-control" rows="5" id="comment" name="summary" style="height: 500px;"></textarea>
              </div>
            </div>
             <div class="modal-footer">
               <a href="{{ url('/introduce') }}">
               	<button type="button" class="btn btn-default" >確認修改</button>
               </a>
             </div>
           </div>
         </div>
      </form>
@endsection

@section('css')

@endsection

@section('js')



