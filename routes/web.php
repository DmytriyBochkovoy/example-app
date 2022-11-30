<?php

use App\Http\Controllers\QuestionController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\TestResultController;
use App\Http\Controllers\AnswerController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('{any}', function () {
    return view('layouts.app');
})->where('any', '.*');


//Route::get('/sign-in', [LoginController::class, 'index'])->name('sign-in');
//
//Route::post('/sign-in/check', [LoginController::class, 'login'])->name('sign-in-check');
//
//Route::get('/sign-up', [RegistrationController::class, 'index'])->name('sign-up');
//
//Route::post('/sign-up/save', [RegistrationController::class, 'save'])->name('sign-up-save');
//
//Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
//
//Route::get('/tests', [TestController::class, 'index'])->name('tests');
//
//Route::get('/tests/test/creation', [TestController::class, 'create'])->name('test-create');
//
//Route::post('/tests/test/creation/save', [TestController::class, 'store'])->name('test-save');
//
//Route::get('/tests/edit-test/{id}', [TestController::class, 'edit'])->name('edit-test');
//
//Route::post('/tests/edit-test/{id}', [TestController::class, 'update'])->name('update-test');
//
//Route::get('/tests/catalog', [TestController::class, 'show'])->middleware('auth')->name('tests-user');
//
//Route::get('/tests/{testName}/{testId}', [QuestionController::class, 'show'])->name('test-user');
//
//Route::post('/tests/answer-user', [AnswerController::class, 'testResultData'])->name('answer-user');
//
//Route::get('/tests/edit-test/{id}/questions', [QuestionController::class, 'index'])->name('questions');
//
//Route::get('/tests/{id}/question/create', [QuestionController::class, 'edit'])->name('question');
//
//Route::post('/test/{id}/question/save', [QuestionController::class, 'store'])->name('question-create');
//
//Route::get('/test/question/{questionId}/destroy', [QuestionController::class, 'destroy'])->name('destroy-question');
//
//Route::get('/test/question/{id}/answer/create', [AnswerController::class, 'create'])->name('create-answer');
//
//Route::post('/test/question/{id}/answer/save', [AnswerController::class, 'store'])->name('save-answer');
//
//Route::get('/test/question/answer/{id}', [AnswerController::class, 'edit'])->name('edit-answer');
//
//Route::post('/test/question/answer/{id}/update', [AnswerController::class, 'update'])->name('update-answer');
//
//Route::get('/test/question/{questionId}/answer/{id}/destroy', [AnswerController::class, 'destroy'])->name('destroy-answer');

//Route::get('/tests/results', [TestResultController::class, 'show'])->name('tests-result');



