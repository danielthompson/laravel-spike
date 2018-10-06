<?php

use App\Trainer;
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

Route::get('trainers', 'TrainerController@index');

Route::get('trainers/{trainer}', 'TrainerController@show');

Route::post('trainers', 'TrainerController@create');

Route::put('trainers/{trainer}', 'TrainerController@update');

Route::delete('trainers/{trainer}', 'TrainerController@delete');

