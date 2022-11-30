<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Answer;
use App\Models\Question;
use App\Models\TestResult;
use Illuminate\Http\Request;

class AnswerApiController extends Controller
{
    public function testResultData(Request $request)
    {
        $answersUser = $request->all();

//        $userId = Auth::id();

        $result = $this->processingTestResults($answersUser);

        $answersUserData = [
            'user_id' => '4777',
            'answers' => $answersUser,
            'result' => $result,
        ];

//        TestResult::create($answersUserData);

        return $result;
    }

    public function processingTestResults($answers)
    {
        if (is_array($answers)) {
            $pointsScored = null;

            foreach ($answers as $key => $value) {
                $question = Question::where('id', $key)
                    ->first()->question_type;

                if ($question === 'single') {
                    $answer = Answer::where('question_id', $key)
                        ->where('is_true', true)
                        ->first()->id;

                    if ($answer === $value) {
                        $rightAnswers = Answer::where('id', $value)
                            ->first()->mark;
                        $pointsScored += $rightAnswers;
                    } else {
                        $pointsScored += 0;
                    }
                } else {
                    $answer = Answer::where('question_id', $key)
                        ->where('is_true', true)
                        ->get();

                    foreach ($answer as $element) {
                        if (in_array($element->id, $value)) {
                            $rightAnswers = Answer::where('id', $element->id)
                                ->first()->mark;
                            $pointsScored += $rightAnswers;
                        } else {
                            $pointsScored += 0;
                        }
                    }
                }
            }

            return $pointsScored;
        }

        return 'ERROR';
    }
}
