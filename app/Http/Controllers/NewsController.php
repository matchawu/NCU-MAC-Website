<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(){
      return view('authrize\news.index');
    }
    public function create(){
      return view('authrize\news.addNews');
    }
}
