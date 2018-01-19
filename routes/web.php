<?php

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
    $questions = App\Question::all();
    return view('home', compact('questions'));
});

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::resource('questions', 'QuestionController');

    // voting
    Route::post('upvote', 'VoteController@upvote')->name('upvote');

    // favorite
    Route::post('favorite', 'VoteController@favorite')->name('favorite');
    Route::post('unfavorite', 'VoteController@unfavorite')->name('unfavorite');
    Route::get('check_favorite/{check_favorite}', 'VoteController@check_favorite')->name('check_favorite');
});

Route::get('/home', 'HomeController@index')->name('home');
