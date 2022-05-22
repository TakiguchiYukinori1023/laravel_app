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
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//以下は自分で作成したルート
Route::get('/ecsite', 'EcSiteController@topPage')->name('toppage');
Route::get('/ecsite/search', 'EcSiteController@search')->name('search');
Route::get('/ecsite/mypage', 'EcSiteController@myPage')->name('mypage');
Route::get('/contact', 'ContactController@index')->name('index');
Route::post('/contact/confirm', 'ContactController@confirm')->name('confirm');
Route::post('/contact/thanks', 'ContactController@send')->name('send');
Route::get('/ecsite/cart', 'EcSiteController@getCartInfo')->name('cartinfo');
