<?php
Route::get('/', 'TopicsController@index')->name('topics.index');
Auth::routes(['verify' => true]);

// 用户
Route::resource('users', 'UsersController', ['only' => ['show', 'edit', 'update']]);

// 分类
Route::resource('categories', 'CategoriesController', ['only' => ['show']]);

// 话题
Route::resource('topics', 'TopicsController', ['only' => ['index', 'show', 'create', 'store', 'update', 'edit', 'destroy']]);

// 回复
Route::resource('replies', 'RepliesController', ['only' => ['store', 'destroy']]);

Route::group(['namespace' => 'Smartmd', 'prefix' => 'editor'], function () {
    Route::post('/upload', 'UploadController@imSave');
    Route::get('/write', function () {
        return view('vendor/smartmd/write');
    });
    Route::get('/php-show','ParseController@index');
    Route::get('/js-show',function(){
        return view('vendor/smartmd/js-show');
    });
});

Route::post('upload_image', 'TopicsController@uploadImage')->name('topics.upload_image');

// 通知
Route::resource('notifications', 'NotificationsController', ['only' => ['index']]);