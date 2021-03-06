<?php

Route::group(['prefix' => 'v1','middleware' => ['cors','auth:api']], function () {
    Route::resource('task', 'TasksController');
    Route::resource('user', 'UsersController');
    Route::resource('user.task', 'UserTasksController');
    Route::get('/user', function () {
        return Auth::user();
    });
    Route::get('user/messages', 'MessagesController@fetchMessages');
    Route::post('/user/gcmtoken', 'GcmTokensController@addToken');
});

