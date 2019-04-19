<?php
Route::get('/', 'TopicsController@index')->name('root');
Auth::routes(['verify' => true]);

Route::resource('users', 'UsersController', ['only' => ['show', 'edit', 'update']]);