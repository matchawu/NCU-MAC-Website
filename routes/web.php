<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//根目錄
Route::get('/', function () {
    return view('welcome');
});
//首頁
Route::get('Homepage', function () {
    return view('Homepage.homepage');
});
//簡介
Route::get('/introduce', function () {
    return view('introduce.index');
});
Route::get('/introduce/edit', function () {
    return view('introduce.edit');
});
//審核單位入口
Route::get('/check',function() {
  return view('check.index');
});
Route::get('/check/ckeckclass',function() {
  return view('check.checkclass');
});
Route::get('/check/checkstudents',function() {
  return view('check.checkstudents');
});
Route::get('/check/checkprojects',function() {
  return view('check.checkprojects');
});
Route::get('/check/register',function() {
  return view('check.register');
});
//開課單位入口
Route::get('/openclass',function() {
  return view('openclass.index');
});
Route::get('/openclass/applied',function(){
  return view('openclass.applied');
});
Route::get('/openclass/apply',function(){
  return view('openclass.apply');
});
Route::get('/openclass/classmanage',function(){
  return view('openclass.classmanage');
});
Route::get('/openclass/classmanage/class',function(){
  return view('openclass.class');
});

//單位申請
Route::get('/application', function () {
    return view('application.index');
});

Route::get('/application/form1', function () {
    return view('application.form1');
});
Route::get('/application/form2', function () {
    return view('application.form2');
});
Route::get('/application/form3', function () {
    return view('application.form3');
});

//歷年紀錄
Route::get('record', function () {
    return view('record.index');
});

Auth::routes();
