<?php
Route::get('/', 'HomeController@Index');
Route::get('/new_contact', 'HomeController@new');
Route::get('/single/{id}', 'HomeController@single');



Route::group(['middleware' => 'auth'], function () {
    Route::get('panel', 'HomeController@Panel');
});

Route::get('/login', 'HomeController@Login');
Route::post('/logincheck', 'HomeController@Logincheck');

Route::post('/add', 'AddController@Add');

Route::get('/logout', 'HomeController@Logout');



