<?php

namespace App\Http\Controllers;

use App\Http\Requests\QuestionRequest;
use App\Models\Question;
use App\Models\Test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuestionController extends Controller
{
    public function index(Request $request)
    {
        $testId = $request->route('id');

        $questions = Question::select('*')
            ->where('test_id', '=', $testId)
            ->paginate();

        return view('questions', ['questions' => $questions]);
    }

    public function store(QuestionRequest $request)
    {
//        $validatedData = $request->validate([
//            'text' => 'required'
//        ]);

        $questionData = [
            'text' => $request->input('text'),
            'type_id' => $request->input('type_id'),
            'test_id' => $request->input('test_id')
        ];

//        $question = DB::table('questions')
//            ->insert([
//                'text' => $request->input('text'),
//                'type_id' => $request->input('type_id'),
//                'test_id' => $request->input('test_id')
//            ]);

        $question = Question::create($questionData);

        return json_encode($question);
    }

}
