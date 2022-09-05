<?php

use App\Http\Controllers\QuestionController;
use App\Http\Controllers\TestController;
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

Route::get('/creat', function () {
    return view('creat-test');
});

Route::get('/tests', [TestController::class, 'index']);

Route::post('/test/create', [TestController::class, 'store'])->name('test-create');

Route::get('tests/edit-test/{id}', [TestController::class, 'editTest'])->name('edit-test');

Route::get('/tests/questions', [QuestionController::class, 'index'])->name('question-form');

Route::post('/tests/questions', [QuestionController::class, 'store'])->name('question-create');






