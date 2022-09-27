<?php

namespace App\Http\Controllers;

use App\Models\TestResult;
use Illuminate\Http\Request;

class TestResultController extends Controller
{
    public function show()
    {
        $answers = TestResult::select('answers')->get();

        dd($answers[0]->answers);

        return view('test-results');
    }

//    public function testResultData(Request $request)
//    {
//        $answersUser = $request->all();
//
//        unset($answersUser['_token']);
//
//        $answersUserData = [
//            'user_id' => '12345',
//            'answers' => json_encode($answersUser)
//        ];
//
//        TestResult::create($answersUserData);
//
//        return redirect(route('tests-user'));
//    }
}
