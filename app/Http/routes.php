<?php

App::bind('App\Repos\User\UserRepoInterface','App\Repos\User\DbUserRepository');

Route::controller('auth', 'Auth\AuthController');
Route::controller('password', 'Auth\RemindersController');

Route::get('/', function(){
    return 'hey';
})->before('auth');