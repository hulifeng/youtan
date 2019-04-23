<?php
Route::get('/', 'TopicsController@index')->name('topics.index');
Auth::routes(['verify' => true]);

// 用户
Route::resource('users', 'UsersController', ['only' => ['show', 'edit', 'update']]);

// 分类
Route::resource('categories', 'CategoriesController', ['only' => ['show']]);

// 话题
Route::resource('topics', 'TopicsController', ['only' => ['index', 'show', 'create', 'store', 'update', 'edit', 'destroy']]);