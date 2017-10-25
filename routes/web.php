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
//test
Route::get('/entry', function () {
    return view('entry');
});
//根目錄
Route::get('/', 'EntryController@index');

//首頁
Route::get('/Homepage','AppUserController@refreshhomepage');

//管理員登入
Route::get('/authrize', function () {
    return view('authrize.login');
});

Route::get('authrize/menu', function () {
    return view('authrize.menu');
})->middleware('auth');
Route::resource('authrize/menu/news','NewsController');

Route::get('/authrize/menu/addClient','AppUserController@addApplicant')->middleware('auth');

Route::get('authrize/menu/uploadAchievement', function () {
    return view('authrize.uploadachievement');
})->middleware('auth');

Route::get('/authrize/achievement','AppUserController@storeachievement');
Route::post('/authrize/achievement','AppUserController@storeachievement');

//寄信用
Route::post('/authrize/menu/addClient/sendmail','AppUserController@sentMailTo');


// Route::post('/authrize/sentMailTo','AppUserController@sentMailTo');

Route::get('authrize', function () {
    return view('authrize.login');
});

//編輯開課單位資訊功能
Route::get('/authrize/editClient/{id}','AppUserController@editClient');
Route::post('/authrize/editClient/{id}','AppUserController@edit_fin');


Route::get('/authrize/deleteapplicants/{id}','AppUserController@delete');

Route::get('authrize', function () {
    return view('authrize.login');
});

//管理員編輯簡介
Route::get('/authrize/menu/introduce', function () {
    return view('authrize/introduce/index');
});
Route::get('/authrize/menu/introduce/edit', function () {
    return view('authrize.introduce.edit');
});
Route::get('/authrize/menu/introduce', 'IntroduceController@show');
Route::post('/authrize/menu/introduce/step{introduce_classsteps}', 'IntroduceController@update1');
Route::post('/authrize/menu/introduce/{introduce_classtypes}', 'IntroduceController@update');

Route::get('/authrize/menu/introduce/edit', 'IntroduceEditController@IntroduceQuestion');
Route::delete('/introduce/edit/{introduce_question}', 'IntroduceEditController@destroy');
Route::post('/introduce/edit/{introduce_question}', 'IntroduceEditController@update');




//簡介
Route::get('/introduce', function () {
    return view('introduce.index');
});
Route::get('/introduce', 'IntroduceController@IntroduceQuestion');
Route::post('/introduce/edit', 'IntroduceEditController@Questionstore');

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


//成果展示
Route::get('/achievement', 'AchievementController@index');
Route::get('/achievement/achievement', 'AchievementController@index');
//成果編輯
Route::get('/achievement/edit/{id}', 'AchievementController@edit');
Route::post('/achievement/edit/{id}', 'AchievementController@edit_fin');
//成果查詢
// Route::get('achievement/search', 'AchievementController@search');
Route::post('achievement/search', 'AchievementController@search');

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
Route::get('/application/deleteSmallModule/{id}','ModuleController@delete');

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
Route::get('record','SearchController@indexall');

Route::get('record/view_single/{id}','ViewClassController@view_single');
Route::get('record/view_module/{id}','ViewClassController@view_module');
Route::get('record/view_fractal/{id}','ViewClassController@view_fractal');

Route::get('record/個別課程','SearchController@all');
Route::get('record/個別課程/人文與思想','SearchController@humanities');
Route::get('record/個別課程/自然科學','SearchController@nscience');
Route::get('record/個別課程/應用科學','SearchController@ascience');
Route::get('record/個別課程/社會思潮與現象','SearchController@trend');
Route::get('record/個別課程/跨域整合','SearchController@interdisciplinary');
Route::get('record/個別課程/社會實踐','SearchController@social');
Route::get('record/個別課程/創意創業','SearchController@creative');
Route::get('record/個別課程/其他','SearchController@others');

Route::get('record/模組課程','SearchController@all2');
Route::get('record/模組課程/人文與思想','SearchController@humanities2');
Route::get('record/模組課程/自然科學','SearchController@nscience2');
Route::get('record/模組課程/應用科學','SearchController@ascience2');
Route::get('record/模組課程/社會思潮與現象','SearchController@trend2');
Route::get('record/模組課程/跨域整合','SearchController@interdisciplinary2');
Route::get('record/模組課程/社會實踐','SearchController@social2');
Route::get('record/模組課程/創意創業','SearchController@creative2');
Route::get('record/模組課程/其他','SearchController@others2');

Route::get('record/碎形課程','SearchController@all3');
Route::get('record/碎形課程/人文與思想','SearchController@humanities3');
Route::get('record/碎形課程/自然科學','SearchController@nscience3');
Route::get('record/碎形課程/應用科學','SearchController@ascience3');
Route::get('record/碎形課程/社會思潮與現象','SearchController@trend3');
Route::get('record/碎形課程/跨域整合','SearchController@interdisciplinary3');
Route::get('record/碎形課程/社會實踐','SearchController@social3');
Route::get('record/碎形課程/創意創業','SearchController@creative3');
Route::get('record/碎形課程/其他','SearchController@others3');

Route::get('search', 'SearchController@index');
Route::post('search', 'SearchController@search');
Route::post('search2', 'SearchController@search2');

//課程影音
Route::get('/video', 'VideoController@index');
Route::get('/video/video','VideoController@index');



Auth::routes();
