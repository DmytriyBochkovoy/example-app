<?php

namespace App\Http\Controllers;

use App\DataTransferObjects\CreateTestData;
use App\Http\Resources\CreateTestResource;
use App\Models\Answer;
use App\Models\Question;
use App\Models\QuestionType;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\This;

class AnswerController extends Controller
{
    public function show()
    {
        $answer = Answer::withCount('question')->get();

        return dd($answer);
    }

    public function create(Request $request, $id)
    {
        $questionId = $request->route('id');

        return view('create-answer', ['questionId' => $questionId]);
    }

    public function store(Request $request, $questionId)
    {
        $answerData = [
            'text' => $request->input('text'),
            'question_id' => $questionId,
            'is_true' => $request->input('is_true')
        ];

        $answerData = Answer::create($answerData);

        return redirect(route('tests'));
    }

    public function edit(Request $request, $id)
    {
        $answerId = $request->route('id');

        $answer = Answer::where('id', $answerId)
            ->first();

        return view('edit-answer', ['answer' => $answer, 'answerId' => $answerId]);
    }

    public function update(Request $request)
    {

        $request->validate([
            'text' => 'required|max:100',
        ]);

        $answerId = $request->route('id');

        Answer::where('id', $answerId)
            ->update([
                'text' => $request->input('text'),
            ]);

        return redirect(route('tests'));
    }

    public function destroy(Request $request)
    {
        $answerId = $request->route('id');

        $result = Answer::destroy($answerId);

        return redirect(route('tests'));
    }

    public function userAnswersData(Request $request)
    {
        $answer = $request->collect();

        dd($answer);
    }

}
