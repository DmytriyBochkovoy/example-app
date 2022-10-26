<?php

use App\Http\Controllers\Api\AnswerApiController;
use App\Http\Controllers\Api\QuestionApiController;
use App\Http\Controllers\Api\TestApiController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/tests/all', [TestApiController::class, 'index']);

Route::get('/tests/{id}/questions', [QuestionApiController::class, 'index']);

Route::post('/tests/answer/user', [AnswerApiController::class, 'testResultData']);

