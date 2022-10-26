<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Question;
use App\Models\TestResult;
use Illuminate\Http\Request;

class AnswerApiController extends Controller
{
    public function testResultData(Request $request)
    {
        $answersUser = $request->all();

//        $userId = Auth::id();

        $answersUserData = [
            'user_id' => '4567',
            'answers' => $answersUser,
            'result' => 0,
        ];

        dd($answersUser);

//        return TestResult::create($answersUserData);
    }

//    public function processingTestResults($answers)
//    {
//        if (is_array($answers)) {
//            foreach ($answers as $value) {
//                Question::where()
//            }
//        }
//    }
}
