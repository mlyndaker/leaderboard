<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/score/{id?}', 'ScoreController@index');
Route::post('/score', 'ScoreController@store');
Route::put('/score/{id}', 'ScoreController@update');
Route::delete('/score/{id}', 'ScoreController@destroy');

Route::get('/leaderboard/time', 'LeaderboardController@fastestTime');
Route::get('/leaderboard/score', 'LeaderboardController@topScore');

