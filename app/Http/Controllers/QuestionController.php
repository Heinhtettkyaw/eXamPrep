<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class QuestionController extends Controller
{
    public function showQB()
    {
        return view('Admin.questions_bank');
    }

    public function addQuestionPage()
    {
        return view('Admin.add_question');
    }

    public function addQuestionToDB(Request $request)
    {

        $validationRules = [
            'subject' => 'required',
            'year' => 'required',
            'season' => 'required',
            'question_text' => 'required',
            'optA' => 'required',
            'optB' => 'required',
            'optC' => 'required',
            'optD' => 'required',
            'correct_answer' => 'required',
        ];
        Validator::make($request->all(), $validationRules)->validate();
        $data = $this->getQuestionData($request);

        //for Images
        if (
            $request->hasFile('question_img')
        ) {
            $fileName = $request->subject . $request->year . $request->season . $request->file('question_img')->getClientOriginalName();
            $request->file('question_img')->storeAs('public/QuestionDB', $fileName);
            $data['question_img'] = $fileName;
        }
        if ($request->hasFile('optA_img')) {
            $fileName = $request->subject . $request->year . $request->season . $request->file('optA_img')->getClientOriginalName();
            $request->file('optA_img')->storeAs('public/QuestionDB', $fileName);
            $data['optA_img'] = $fileName;
        }
        if ($request->hasFile('optB_img')) {
            $fileName = $request->subject . $request->year . $request->season . $request->file('optB_img')->getClientOriginalName();
            $request->file('optB_img')->storeAs('public/QuestionDB', $fileName);
            $data['optB_img'] = $fileName;
        }
        if ($request->hasFile('optC_img')) {
            $fileName = $request->subject . $request->year . $request->season . $request->file('optC_img')->getClientOriginalName();
            $request->file('optC_img')->storeAs('public/QuestionDB', $fileName);
            $data['optC_img'] = $fileName;
        }
        if ($request->hasFile('optD_img')) {
            $fileName = $request->subject . $request->year . $request->season . $request->file('optD_img')->getClientOriginalName();
            $request->file('optD_img')->storeAs('public/QuestionDB', $fileName);
            $data['optD_img'] = $fileName;
        }

        Question::create($data);
        return redirect()->route('Admin#showQB');
    }

    //private Function
    private function getQuestionData($request)
    {
        return [
            'subject' => $request->subject,
            'year' => $request->year,
            'season' => $request->season,
            'question_text' => $request->question_text,
            'optA' => $request->optA,
            'optB' => $request->optB,
            'optC' => $request->optC,
            'optD' => $request->optD,
            'correct_answer' => $request->correct_answer
        ];
    }
}
