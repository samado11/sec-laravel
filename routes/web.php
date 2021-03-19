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
    return view('index');
});

Route::get('/markets', function () {return view('markets');});
Route::get('/contactus', function () {return view('contactUs');});
Route::get('/events', function () {
    $data = DB::table('events')->get();
    return view('events', ['data' => $data]);});
Route::get('/services', function () {return view('services');});
Route::get('/eventAdminGet', 'AdminController@eventAdminGet');
Route::post('/eventAdminPost', 'AdminController@eventAdminPost');