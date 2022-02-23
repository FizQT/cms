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

// Route::get('/', function () {
//     return view('welcome');
// });

//PRAKTIKUM 1
//NO 1
// Route::get('/', function () {
//     return " Hi! Selamat Datang di Website Laravel";
// });
//NO 2
// Route::get('/about', function () {
//     return "2041720078,";
//     return " HAFIZH IZHAR DARMANSYAH,";
//     return " TI - 2G";
// });
//NO 3
Route::get('/articles/{id}', function ($id) {
    return "Ini adalah halaman Artikel dengan ID : " . $id;
});

//PRAKTIKUM 2
//NO 1

//NO 2

//NO 3

//PRAKTIKUM 3
//NO 1

//NO 2

//NO 3
