<?php

Route::controller('auth', 'Auth\AuthController');
Route::controller('password', 'Auth\RemindersController');

Route::get('/', function(){
    return 'hey';
});