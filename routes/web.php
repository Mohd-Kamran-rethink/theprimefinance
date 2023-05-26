<?php

use Illuminate\Support\Facades\Route;

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
    return view('Pages.Home');
});
Route::get('/about', function () {
    return view('Pages.About');
});
Route::get('/trade-finance', function () {
    return view('Pages.trade-finance');
});
Route::get('/mortgage-finance', function () {
    return view('Pages.mortgage-finance');
});
Route::get('/business-loan', function () {
    return view('Pages.business-loan');
});
Route::get('/Equipment-Machiner', function () {
    return view('Pages.Equipment-Machiner');
});
Route::get('/Trade-Credit-Insurance', function () {
    return view('Pages.Trade-Credit-Insurance');
});
Route::get('/contact', function () {
    return view('Pages.contact');
});
Route::get('/Equipment-Machinery', function () {
    return view('Pages.Equipment-Machinery');
});
