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

//Emp Contact Info
Route::get('/', function () {
    return redirect('/contacts');
});

Auth::routes(['verify' => true]);
Route::get('profile', function () {
    return '<h1>This is profile page</h1>';
})->middleware('verified');

Auth::routes();

Route::resource('contacts', 'ContactController');
//End



