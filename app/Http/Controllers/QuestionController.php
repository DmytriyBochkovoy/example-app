<?php

namespace App\Http\Controllers;

use App\Http\Requests\QuestionRequest;
use App\Models\Question;
use App\Models\Test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuestionController extends Controller
{
    public function index()
    {
        $testName = DB::table('tests')
            ->select('name', 'id')
            ->get();
        $questionTypes = DB::table('question_types')
            ->select('name', 'id')
            ->get();

        return view('create-question', ['testName' => $testName, 'questionTypes' => $questionTypes]);
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
