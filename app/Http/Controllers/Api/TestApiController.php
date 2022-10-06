<?php

namespace App\Http\Controllers\Api;

use App\DataTransferObjects\CreateTestData;
use App\Http\Resources\CreateTestResource;
use App\Http\Resources\TestResources;
use App\Models\Test;
use Illuminate\Http\Request;
use App\Enums\QuestionTypeEnum;

class TestApiController
{
    public function index()
    {
        $testPaginator = Test::withCount('questions')->paginate();

//        $testPaginator = TestResources::toArray($testPaginator);

        return $testPaginator;

    }
}
