<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\IntroduceQuestion;
Use App\IntroduceClasstype;
class IntroduceController extends Controller
{
	public function IntroduceQuestion()
	{
		$introduce_questions = IntroduceQuestion::all();
		$introduce_classtypes = IntroduceClasstype::all();
		return view('introduce.index',['introduce_questions'=>$introduce_questions, 'introduce_classtypes'=>$introduce_classtypes]);
	}

}

