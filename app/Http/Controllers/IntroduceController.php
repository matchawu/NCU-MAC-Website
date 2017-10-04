<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\IntroduceQuestion;
Use App\IntroduceClasstype;
Use App\IntroduceClassstep;

class IntroduceController extends Controller
{
	public function IntroduceQuestion()
	{
		$introduce_questions = IntroduceQuestion::all();
		$introduce_classtypes = IntroduceClasstype::all();
		$introduce_classsteps = IntroduceClassstep::all();
		return view('introduce.index',['introduce_questions'=>$introduce_questions, 'introduce_classtypes'=>$introduce_classtypes, 
			'introduce_classsteps'=>$introduce_classsteps]);
	}

	public function show()
	{
		$introduce_questions = IntroduceQuestion::all();
		$introduce_classtypes = IntroduceClasstype::all();
		$introduce_classsteps = IntroduceClassstep::all();
		return view('authrize.introduce.index',['introduce_questions'=>$introduce_questions, 'introduce_classtypes'=>$introduce_classtypes, 
			'introduce_classsteps'=>$introduce_classsteps]);
	}

	public function update(Request $request, IntroduceClasstype $introduce_classtypes)
	{
		// $introduce_questions->update(['question' => $request->question]);
		$introduce_classtypes->body = $request->editor1;
		$introduce_classtypes->save();
		return redirect('/authrize/menu/introduce');
	}

	public function update1(Request $request, IntroduceClassstep $introduce_classsteps)
	{
		$introduce_classsteps->body = $request->editor2;
		$introduce_classsteps->save();
		return redirect('/authrize/menu/introduce');
	}

}

