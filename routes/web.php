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

// Route::get('/', function () {
//     return view('home');
// });
Auth::routes();

Route::get('/suria-management', 'HomeController@index')->name('home');

Auth::routes();
Route::get('/url_fetch_content', 'UrlFecthContentController@url_fetch_content')->name('url_fetch_content');
Route::post('/url_fetch_content','UrlFecthContentController@get_url');
Route::get('/manager_new_content', 'ManagerNewContent@index');
Route::get('/getcontent','ManagerNewContent@view_data');

