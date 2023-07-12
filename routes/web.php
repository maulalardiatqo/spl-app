<?php

use App\Http\Controllers\SPLcontroller;
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

Route::post('/settings', [SPLcontroller::class, 'savesetting']);


Route::get('/', function () {
    return response()->json(['status' => 'tttt']);
});

Route::get('/salary', function () {
    return view('salary');
});
