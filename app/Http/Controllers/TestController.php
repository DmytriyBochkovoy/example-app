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

        $test = Test::create($testData);

//        $test->questions()->saveMany(
//            array_map(function ($question) {
//                return new Question($question);
//            }, $questions)
//        );

//        $test->load('questions');

        return json_encode($test);
    }

    public function viewEditTest(Request $request, $id) {

        $testId = $request->route('id');

        $test = Test::where('id', $testId)
            ->withCount('questions')
            ->first();


        return view('edit-test', ['test' => $test]);
    }

    public function updateTest(Request $request) {

        $testId = $request->route('id');

        Test::where('id', $testId)
            ->update([
                'name' => $request->input('name'),
                'description' => $request->input('description'),
            ]);

        return redirect(route('tests'));
    }




}
