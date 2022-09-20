<?php

namespace App\Http\Controllers;

use App\DataTransferObjects\CreateTestData;
use App\Http\Resources\CreateTestResource;
use App\Models\Test;
use Illuminate\Http\Request;
use App\Enums\QuestionTypeEnum;

class TestController extends Controller
{
    public function index()
    {
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

    public function show()
    {
        $questionTypes = QuestionTypeEnum::cases();

        $testPaginator = Test::withCount('questions')->paginate();

        return view('tests-user', ['testPaginator' => $testPaginator, 'questionTypes' => $questionTypes]);
    }

    public function create()
    {
        return view('create-test');
    }

    public function store(CreateTestData $testData)
    {
        $test = Test::create($testData->toArray());

//        CreateTestResource::make($test);

        return redirect(route('tests'));
    }

    public function edit(Request $request, $id)
    {

        $testId = $request->route('id');

        $test = Test::where('id', $testId)
            ->withCount('questions')
            ->first();


        return view('edit-test', ['test' => $test, 'testId' => $testId]);
    }

    public function update(Request $request)
    {

        $request->validate([
            'name' => 'required|max:100',
            'description' => 'required|max:255'
        ]);

        $testId = $request->route('id');

        Test::where('id', $testId)
            ->update([
                'name' => $request->input('name'),
                'description' => $request->input('description'),
            ]);

        return redirect(route('tests'));
    }


}
