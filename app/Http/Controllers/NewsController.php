<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Module_class;
use App\Single_class;
use App\Fractal_class;
use App\Achievement;

class NewsController extends Controller
{
    public function index(){
      $news=News::all();
      return view('authrize/news.index',["news"=>$news]);
    }
    public function create(){
      return view('authrize/news.addNews');
    }
    public function store(Request $request){
      $this->validate($request, [
          'title' => 'required',
          'subtitle' => 'required',
          'content' => 'required',
      ],[
        'title.required'=>'請填寫公告標題',
        'subtitle.required'=>'請填寫公告小標',
        'content.required'=>'請填寫內容'
        ]);
      $news=new News;
      $news->title = $request->title;
      $news->subtitle = $request->subtitle;
      $news->content = $request->content;
      $news->save();
      return redirect('authrize/menu/news');
    }
    public function edit($id){
      $news=News::find($id);
      return view('/authrize/news.edit',["news"=>$news]);
    }
    public function update(Request $request,$id){
      $this->validate($request, [
          'title' => 'required',
          'subtitle' => 'required',
          'content' => 'required',
      ],[
        'title.required'=>'請填寫公告標題',
        'subtitle.required'=>'請填寫公告小標',
        'content.required'=>'請填寫內容'
        ]);
      $news=News::find($id);
      $news->title=$request->title;
      $news->subtitle=$request->subtitle;
      $news->content=$request->content;
      $news->save();
      return redirect('authrize/menu/news');

    }
    public function destroy($id){
      $news=News::find($id);
      $title=$news->title;
      News::destroy($id);
      return back()->with('success','success')->with('title',$title);

    }

    public function refresh_news()
    {
          $news = News::all();
          $module_class=Module_class::orderBy('id', 'desc')->take(3)->get();
          $single_class=Single_class::orderBy('id', 'desc')->take(3)->get();
          return view('news.news',[
            "news"=>$news,
            "module_class"=>$module_class,
            "single_class"=>$single_class,
          ]);
    }
}
