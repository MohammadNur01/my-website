<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PortfolioController;

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

Route::get('/', [HomeController::class, 'index']);

Route::get('/about', [AboutController::class, 'index']);

Route::get('/portfolios', [PortfolioController::class, 'index']);

Route::get('portfolios/{port:slug}', [PortfolioController::class, 'show']);

Route::get('/services', [ServiceController::class, "index"]);

Route::get('services/{service:slug}', [ServiceController::class, "show"]);

Route::get('/posts', [PostController::class, 'index']);

Route::get('posts/{post:slug}', [PostController::class, 'show']);



Route::get('/contact', function () {
    return view('contact', [
        "title" => "Contact Us",
        "image" => "bg-contact.jpg"
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('dashboard', function () {
    return view('dashboard.index');
})->middleware('auth');


// Dashboard

Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');
