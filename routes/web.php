<?php

use App\Http\Controllers\QuestionController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\AnswerController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('index');

Route::get('/pass-test', function () {
    return view('template-edit');
});

Route::get('/tests', [TestController::class, 'index'])->name('tests');

Route::post('/test/create', [TestController::class, 'store'])->name('test-create');

Route::get('/tests/edit-test/{id}', [TestController::class, 'edit'])->name('edit-test');

Route::post('/tests/edit-test/{id}', [TestController::class, 'update'])->name('update-test');

Route::get('/tests/edit-test/{id}/questions', [QuestionController::class, 'index'])->name('questions');

Route::get('/tests/{id}/question', [QuestionController::class, 'edit'])->name('question');

Route::post('/test/{id}/question/create', [QuestionController::class, 'store'])->name('question-create');

Route::get('/test/pass-test', [AnswerController::class, 'show'])->name('pass-test');







