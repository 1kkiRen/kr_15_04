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

use App\Vote;


Route::get('/', 'VoteController@showAll');

Route::get('/vote/create', function(){
    return view('create_vote');
});

Route::post('/vote/create', 'VoteController@create');

Route::get('/vote/show/{id}', 'VoteController@showId');

Route::get('/vote/positive_inc/{id}', 'VoteController@increasePositive');

Route::get('/vote/negative_inc/{id}', 'VoteController@increaseNegative');