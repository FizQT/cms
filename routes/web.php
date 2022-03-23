<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\TugasController;

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
    // return "2041720078, HAFIZH IZHAR DARMANSYAH, TI - 2G";
// });
//NO 3
// Route::get('/articles/{id}', function ($id) {
    // return "Ini adalah halaman Artikel dengan ID : " . $id;
// });

//PRAKTIKUM 2
//NO 1
// Route::get('/', [PageController::class, 'index']);
//NO 2
// Route::get('/about', [PageController::class, 'about']);
//NO 3
// Route::get('/articles/{id}', [PageController::class, 'articles']);
//NO 4
// Route::get('/', [HomeController::class, 'index']);
// Route::get('/about', [AboutController::class, 'about']);
// Route::get('/articles/{id}', [ArticleController::class, 'articles']);

//PRAKTIKUM 3
// Route::get('/', [TugasController::class, 'index']);

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//PRAKTIKUM 1 MINGGU 3
Route::get('/', function () {
    return view('index');
});

//PRAKTIKUM 1 MINGGU 4
Route::get('/', [App\Http\Controllers\TugasController::class, 'index']);

Route::get('/post', [App\Http\Controllers\TugasController::class, 'index']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
