<?php

namespace App\Http\Controllers;

use App\Enums\QuestionTypeEnum;
use App\Http\Requests\QuestionRequest;
use App\Models\Answer;
use App\Models\Question;
use App\Models\QuestionType;
use App\Models\Test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuestionController extends Controller
{
    public function index(Request $request)
    {
        $testId = $request->route('id');

        $questions = Question::with('answers')
            ->where('test_id', '=', $testId)
            ->paginate();

        return view('questions', ['questions' => $questions, 'testId' => $testId]);
    }

    public function show(Request $request )
    {
        $testId = $request->route('testId');

        $questionType = $request->route('questionType');

        $questions = Question::with('answers')
            ->where('test_id', $testId)
            ->whereHas('answers')
            ->paginate();

        return view('pass-test', ['questions' => $questions, 'questionType' => $questionType]);
    }

    public function store(QuestionRequest $request)
    {
        $questionData = [
            'text' => $request->input('text'),
            'type_id' => $request->input('type_id'),
            'test_id' => $request->route('id'),
            'question_type' => $request->input('question_type')
        ];

        $question = Question::create($questionData);

        return redirect(route('questions'));
    }

    public function edit(Request $request, $id)
    {
        $questionTypes = QuestionTypeEnum::cases();

        $testId = $request->route('id');

        $test = Test::where('id', $testId)
            ->withCount('questions')
            ->first();

        $questionTopic = QuestionType::select('name', 'id')
            ->get();

        return view('create-question', ['test' => $test,
            'questionTopic' => $questionTopic,
            'testId' => $testId,
            'questionTypes' => $questionTypes
        ]);
    }

    public function update(Request $request)
    {
//        $questionData = [
//            'text' => $request->input('text'),
//            'type_id' => $request->input('type_id'),
//            'test_id' => $request->input('test_id')
//        ];
//
//        Question::where('id', $testId)
//            ->update([
//                'name' => $request->input('name'),
//                'description' => $request->input('description'),
//            ]);
//
//        return
    }

    public function destroy(Request $request)
    {
        $questionId = $request->route('questionId');

        $result = Question::destroy($questionId);

        return redirect(route('tests'));
    }

}
