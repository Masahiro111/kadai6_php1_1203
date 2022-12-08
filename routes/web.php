<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\SurveyController;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/survey/create', [SurveyController::class, 'create'])->name('survey.create');
    Route::post('/survey', [SurveyController::class, 'store'])->name('survey.store');
    Route::get('/survey/{survey}', [SurveyController::class, 'show'])->name('survey.show');
    Route::get('/survey/{survey}/questions/create', [QuestionController::class, 'create'])->name('question.create');
    Route::post('/survey/{survey}/questions', [QuestionController::class, 'store'])->name('question.store');

    Route::get('/survey/take/{survey}-{slug}', [SurveyController::class, 'take'])->name('survey.take');
    Route::post('/survey/take/{survey}-{slug}', [SurveyController::class, 'takeStore'])->name('survey.takeStore');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
