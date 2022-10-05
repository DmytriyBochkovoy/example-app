<?php

namespace App\Http\Controllers\Api;

use App\DataTransferObjects\CreateTestData;
use App\Http\Resources\CreateTestResource;
use App\Models\Test;
use Illuminate\Http\Request;
use App\Enums\QuestionTypeEnum;

class TestApiController
{
    public function index()
    {
        return $testPaginator = Test::withCount('questions')->paginate();
    }
}
