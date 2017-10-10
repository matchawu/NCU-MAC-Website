<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\IntroduceQuestion;
class IntroduceEditController extends Controller
{
    public function IntroduceQuestion()
	{
		$introduce_questions = IntroduceQuestion::all();
		return view('introduce.edit',['introduce_questions'=>$introduce_questions,]);
	}
	// 新增
	public function Questionstore(Request $request)
	{
		$introduce_questions = new IntroduceQuestion;
		$introduce_questions->question = $request->question;
		$introduce_questions->answer = $request->answer;
		$introduce_questions->save();
		return redirect('/authrize/menu/introduce/edit');
	}
	//刪除
	public function destroy(Request $request, IntroduceQuestion $introduce_question)
	{
		$introduce_question->delete();
		return redirect('/authrize/menu/introduce/edit');
	}
	// 編輯
	public function edit(IntroduceQuestion $introduce_questions)
	{
		// return view('/introduce/editing', ['introduce_questions' => $introduce_questions]);
	}
	public function update(Request $request, IntroduceQuestion $introduce_question)
	{
		// $introduce_questions->update(['question' => $request->question]);
		$introduce_question->question = $request->question;
		$introduce_question->answer = $request->answer;
		$introduce_question->save();

		return redirect('/authrize/menu/introduce/edit');
	}
}
