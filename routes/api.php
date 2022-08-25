<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::group([
    'middleware' => 'api',
    'namespace' => 'App\Http\Controllers\Backend',
//'prefix' => 'auth'

],
    function ($router) {

      //chapter router
        Route::prefix('chapters')->group(function () {
            Route::get('/chapter', 'ChapterController@index');
            Route::post('/add-chapter', 'ChapterController@store');
            Route::put('/update-chapter/{id}', 'ChapterController@update');
            Route::delete('/delete-chapter/{id}', 'ChapterController@destroy');
        });
        //student router
        Route::prefix('student')->group(function () {
            Route::get('/students', 'StudentController@index');
            Route::post('/add-students', 'StudentController@store');
            Route::put('/update-students/{id}', 'StudentController@update');
            Route::delete('/delete-students/{id}', 'StudentController@destroy');
        });
        Route::prefix('status')->group(function () {
            Route::get('/statuies', 'StatusController@index');
            Route::post('/add-status', 'StatusController@store');
            Route::put('/update-status/{id}', 'StatusController@update');
            Route::delete('/delete-status/{id}', 'StatusController@destroy');
        });


    });
