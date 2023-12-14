<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');

});
Route::get('/tests', function () {
    $r = [1, 2, 2, 3, 3, 4, 34, 34, 34, 34, 34, 3, 43, 44, 20, 70];

    return response()->json($r);
});
