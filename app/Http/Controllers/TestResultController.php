<?php

namespace App\Http\Controllers;

use App\Models\TestResult;
use Illuminate\Http\Request;

class TestResultController extends Controller
{
    public function show()
    {
        $answers = TestResult::select('answers')->get();

        dd($answers[3]->answers);

        return view('test-results');
    }
}
