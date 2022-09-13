<?php

namespace App\Http\Controllers;

use App\DataTransferObjects\CreateTestData;
use App\Http\Resources\CreateTestResource;
use App\Models\Answer;
use App\Models\Question;
use App\Models\QuestionType;
use Illuminate\Http\Request;

class AnswerController extends Controller
{
    public function show() {

        $answer = Answer::withCount('question')->get();

        return dd($answer);
    }
}
