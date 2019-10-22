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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', 'kontrolerLogIn@login');
Route::get('/login', 'kontrolerLogIn@login');
Route::get('/register', 'kontrolerLogIn@register');

Route::get('/home', 'kontrolerNavigasi@home');
Route::get('/halaman1', 'kontrolerNavigasi@halaman1');
Route::get('/halaman2', 'kontrolerNavigasi@halaman2');
Route::get('/halaman3', 'kontrolerNavigasi@halaman3');
