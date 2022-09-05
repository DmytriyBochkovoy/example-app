<?php

use App\Http\Controllers\QuestionController;
use App\Http\Controllers\TestController;
use Illuminate\Http\Request;
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

Route::get('/', function () {
    return view('home');
})->name('index');

Route::get('/creat', function () {
    return view('creat-test');
});

Route::get('/tests', [TestController::class, 'index']);

Route::post('/test/create', [TestController::class, 'store'])->name('test-create');

Route::get('/tests/questions', [QuestionController::class, 'index'])->name('question-form');

Route::post('/tests/questions', [QuestionController::class, 'store'])->name('question-create');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
