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

Route::get('users/{username}', 'ProfileController@show')->name('user-profile');

Route::group(['middleware' => 'auth'], function ($router) {
    Route::resource('questions', 'QuestionController');
    Route::resource('replies', 'ReplyController');

    // profile
    Route::get('users/{username}/edit', 'ProfileController@edit')->name('user-profile.edit');
    Route::put('users/{username}/update', 'ProfileController@update')->name('user-profile.update');

    // voting
    Route::post('upvote', 'VoteController@upvote')->name('upvote');
    Route::post('downvote', 'VoteController@downvote')->name('downvote');

    // favorite
    Route::post('favorite', 'VoteController@favorite')->name('favorite');
    Route::post('unfavorite', 'VoteController@unfavorite')->name('unfavorite');
    Route::get('check_favorite/{question_id}', 'VoteController@check_favorite')->name('check_favorite');
    Route::get('check_vote/{question_id}', 'VoteController@check_vote')->name('check_vote');
});

Route::get('/home', 'HomeController@index')->name('home');
