<?php

namespace App\Http\Controllers\Api;

use App\DataTransferObjects\CreateTestData;
use App\Http\Controllers\Controller;
use App\Http\Resources\CreateTestResource;
use App\Http\Resources\TestResource;
use App\Models\Test;
use Illuminate\Http\Request;
use App\Enums\QuestionTypeEnum;

class TestApiController extends Controller
{
    public function __invoke()
    {
        return $testPaginator = Test::withCount('questions')->paginate();
    }

    public function index() {
        return $testPaginator = Test::withCount('questions')->paginate();
    }
}
