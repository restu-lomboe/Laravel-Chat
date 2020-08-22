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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::view('/chat', 'chat.index')->middleware('auth');

Route::get('/chat/all-chats', 'ChatController@allChat');
Route::post('/chat/store', 'ChatController@store');

Route::get('/sites/maintenance', function (){
    return Artisan::call('down');
});
