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
//管理員登入
Route::get('/authrize', function () {
    return view('authrize.login');
});
Route::get('/authrize/menu', function () {
    return view('authrize.menu');
});
Route::get('authrize', function () {
    return view('authrize.login');
});
//簡介
Route::get('/introduce', function () {
    return view('introduce.index');
});
Route::get('/introduce/edit', function () {
    return view('introduce.edit');
});
// //審核單位入口
// Route::get('/check',function() {
//   return view('check.index');
// });
// Route::get('/check/ckeckclass',function() {
//   return view('check.checkclass');
// });
// Route::get('/check/checkstudents',function() {
//   return view('check.checkstudents');
// });
// Route::get('/check/checkprojects',function() {
//   return view('check.checkprojects');
// });
// Route::get('/check/register',function() {
//   return view('check.register');
// });
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

//application
//log in
Route::get('/application', 'AppUserController@index');
Route::get('/application/logout', 'AppUserController@logout');
Route::post('/application', 'AppUserController@login');
Route::post('/application/addappUser', 'AppUserController@register'
);
//edit password
Route::get('/application/edit_pwd', 'AppUserController@edit_goto');
Route::post('/application/edit_pwd', 'AppUserController@edit_pwd');
//manage
Route::get('/application/mgt', function () {
    return view('application.mgt');
});
//browse class
Route::get('/application/class', function () {
    return view('application.class');
});
// //edit
// Route::get('/application/edit_single', function () {
//     return view('application.edit_single');
// });
// Route::get('/application/edit_module', function () {
//     return view('application.edit_module');
// });
// Route::get('/application/edit_fractal', function () {
//     return view('application.edit_fractal');
// });
Route::get('/application/choose', function () {
    return view('application.choose');
});
//new single class
Route::get('/application/single','Single_classController@index');
Route::post('/application/single','Single_classController@store');
//view single class
Route::get('/application/view_single/{id}','Single_classController@view');
//edit single class
Route::get('/application/edit_single/{id}','Single_classController@edit');
Route::post('/application/edit_single/{id}','Single_classController@edit_fin');
//delete single class
Route::get('/application/deleteSingle/{id}','Single_classController@delete');

//new module class
Route::get('/application/module','Module_classController@index');
Route::post('/application/module','Module_classController@store');
//view module class
Route::get('/application/view_module/{id}','Module_classController@view');
//edit module class
Route::get('/application/edit_module/{id}','Module_classController@edit');
Route::post('/application/edit_module/{id}','Module_classController@edit_fin');
//delete module class
Route::get('/application/deleteModule/{id}','Module_classController@delete');

//module
//add module
Route::post('/application/add_module','ModuleController@store');
//edit small module
Route::post('/application/edit_smallmodule/{id}','ModuleController@edit_fin');
//delete module
Route::get('/application/deleteModule/{id}','ModuleController@delete');

//new fractal class
Route::get('/application/fractal','Fractal_classController@index');
Route::post('/application/fractal','Fractal_classController@store');
//view fractal
Route::get('/application/view_fractal/{id}','Fractal_classController@view');
//edit fractal
Route::get('/application/edit_fractal/{id}','Fractal_classController@edit');
Route::post('/application/edit_fractal/{id}','Fractal_classController@edit_fin');
//delete fractal
Route::get('/application/deleteFractal/{id}','Fractal_classController@delete');

//finish
Route::get('/application/finish', function () {
    return view('application.finish');
});

//歷年紀錄
Route::get('record', function () {
    return view('record.index');
});


Auth::routes();
