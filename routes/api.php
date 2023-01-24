<?php

use App\Http\Controllers\Api\AnswerApiController;
use App\Http\Controllers\Api\QuestionApiController;
use App\Http\Controllers\Api\TestApiController;
use App\Http\Controllers\Api\UserApiController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
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

Auth::routes();

Route::post('/authenticate', [LoginController::class, 'authenticate']);

Route::get('/user', [UserApiController::class, 'userData']);

Route::get('/tests/all', [TestApiController::class, 'index']);

Route::get('/tests/{id}/questions', [QuestionApiController::class, 'index']);

Route::post('/tests/answer/user', [AnswerApiController::class, 'testResultData']);

//Route::post('/login', [UserApiController::class, 'login']);

//Route::post('/tests/registration', [UserApiController::class, 'save']);

