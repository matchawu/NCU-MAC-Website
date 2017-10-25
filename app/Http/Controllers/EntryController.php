<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Achievement;

class EntryController extends Controller
{
    public function index(){

      //  $achievements=Achievement::all();
      $achievements=Achievement::orderBy('id', 'desc')->take(6)->get();
       return view('entry',["achievements"=>$achievements]);
   }

}
