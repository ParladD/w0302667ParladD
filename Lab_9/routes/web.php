<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route ::get('/layouts','PostController@body')->name('home');


Route ::get('/posts/create','PostController@create');


Route ::post('/posts','PostController@store'); //post method to store the data in the database

Route ::get('/posts/{post}','PostController@show');

Route ::post('/posts/{post}/comments','CommentsController@store');


Route::get('/register','RegistrationController@create'); //new user

Route::post('/register','RegistrationController@store');//stores new user to the database


Route::get('/login','SessionsController@create');//login page for existing user

Route::post('/login','SessionsController@store');//login user/ sign in


Route::get('/logout','SessionsController@destroy');//logout for user