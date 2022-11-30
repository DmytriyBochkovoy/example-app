<?php

namespace App\Http\Controllers\Api;

use App\Enums\QuestionTypeEnum;
use App\Http\Controllers\Controller;
use App\Http\Requests\QuestionRequest;
use App\Models\Answer;
use App\Models\Question;
use App\Models\QuestionType;
use App\Models\Test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuestionApiController extends Controller
{
    public function index(Request $request)
    {
        $testId = $request->route('id');

        $questions = Question::with('answers')
            ->where('test_id', '=', $testId)
            ->paginate();

        return $questions;
    }
}
