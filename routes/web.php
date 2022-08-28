<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('Welcome');
});

Route::get('/already-entered', function () {
    return Inertia::render('AlreadyEntered');
})->name('already_entered');



Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/vote-q1/{name}',function ($name, \Illuminate\Http\Request $request){
    $answer = \App\Models\QuizResponse::where(['ip' => $request->ip()])->first();

    if($answer == null)
    {
        $answer = new \App\Models\QuizResponse();
        $answer->ip = $request->ip();
    }
    elseif($answer->question_one != null)
    {
        return redirect()->route('already_entered');
    }
    $answer->question_one = array_flip(config('enums.names'))[$name];
    $answer->save();

    return Inertia::render('QuestionTwo');
});

Route::get('/vote-q2/{name}',function ($name, \Illuminate\Http\Request $request){
    $answer = \App\Models\QuizResponse::where(['ip' => $request->ip()])->first();

    if($answer == null)
    {
        $answer = new \App\Models\QuizResponse();
        $answer->ip = $request->ip();
    }
    elseif($answer->question_two != null)
    {
        return redirect()->route('already_entered');
    }
    $answer->question_two = array_flip(config('enums.names'))[$name];
    $answer->save();

    return Inertia::render('QuestionThree');
});
Route::get('/vote-q3',function ( \Illuminate\Http\Request $request){
    $answer = \App\Models\QuizResponse::where(['ip' => $request->ip()])->first();

    if($answer == null)
    {
        $answer = new \App\Models\QuizResponse();
        $answer->ip = $request->ip();
    }
    elseif($answer->question_three != null)
    {
        return redirect()->route('already_entered');
    }
    $answer->question_three = $request->total_score;
    $answer->save();

    return Inertia::render('QuestionFour');
});
Route::get('/vote-q4',function (\Illuminate\Http\Request $request){
    $answer = \App\Models\QuizResponse::where(['ip' => $request->ip()])->first();

    if($answer == null)
    {
        $answer = new \App\Models\QuizResponse();
        $answer->ip = $request->ip();
    }
    elseif($answer->question_four != null)
    {
        return redirect()->route('already_entered');
    }
    $answer->question_four = $request->total_score;
    $answer->save();

    return Inertia::render('QuestionFive');
});
Route::get('/vote-q5',function (\Illuminate\Http\Request $request){
    $answer = \App\Models\QuizResponse::where(['ip' => $request->ip()])->first();

    if($answer == null)
    {
        $answer = new \App\Models\QuizResponse();
        $answer->ip = $request->ip();
    }
    elseif($answer->question_fivea != null)
    {
        return redirect()->route('already_entered');
    }
    $answer->question_fivea = $request->total_score;
    $answer->question_fiveb = $request->name;
    $answer->save();

    return Inertia::render('Finish');
});
Route::get('/real-finish',function (\Illuminate\Http\Request $request){
    $answer = \App\Models\QuizResponse::where(['ip' => $request->ip()])->first();

    if($answer == null)
    {
        $answer = new \App\Models\QuizResponse();
        $answer->ip = $request->ip();
    }
    elseif($answer->name != null)
    {
        return redirect()->route('already_entered');
    }
    $answer->name = $request->name;
    $answer->email = $request->email;
    $answer->save();

    return Inertia::render('RealFinish');
});

require __DIR__.'/auth.php';
