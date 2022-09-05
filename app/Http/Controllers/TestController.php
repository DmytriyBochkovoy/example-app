<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function index() {
        $testPaginator = Test::withCount('questions')->paginate();

//        $tests = DB::table('tests')
//            ->selectRaw('count(tests.id) as questions_count')
//            ->leftJoin('questions', 'questions.test_id', '=', 'tests.id')
//            ->whereNotNull('questions.test_id')
//            ->groupBy('tests.id')
//            ->having('questions_count', '<', 2)
//            ->get()
//            ->dd();

        return view('tests', ['testPaginator' => $testPaginator]);
    }

    public function store (Request $request) {
        $testData = [
            'name' => $request->input('name'),
            'description' => $request->input('description'),
        ];

//        $questions = $request->input('questions');


        $test = Test::create($testData);

//        $test->questions()->saveMany(
//            array_map(function ($question) {
//                return new Question($question);
//            }, $questions)
//        );

//        $test->load('questions');

        return json_encode($test);
    }

    public function editTest() {

        $testPaginator = Test::withCount('questions')->paginate();

        return view('edit-test', ['testPaginator' => $testPaginator]);
    }

}
