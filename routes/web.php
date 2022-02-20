<?php


use App\Http\Controllers\AboutController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\CategoryController;
use App\Models\Category;
use App\Models\User;
use App\Models\Post;
use App\Models\Portfolio;
use App\Models\PostCategory;
use App\Models\Service;
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
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', [AboutController::class, 'index']);

Route::get('/portfolios', [PortfolioController::class, 'index']);

Route::get('portfolios/{port:slug}', [PortfolioController::class, 'show']);

Route::get('/services', [ServiceController::class, "index"]);

Route::get('services/{service:slug}', [ServiceController::class, "show"]);

Route::get('/posts', [PostController::class, 'index']);

Route::get('posts/{post:slug}', [PostController::class, 'show']);

Route::get('posts/categories/{category:slug}', function (Category $category) {
    return view('posts/posts', [
        'title' => "Post By Category : $category->name",
        'posts' => $category->posts->load('category', 'author'),
        "categories" => Category::all()
    ]);
});

Route::get('/authors/{author:username}', function (User $author) {
    return view('/posts/posts', [
        'title' => "Post by Author : $author->name",
        'posts' => $author->posts->load('category', 'author'),
        "categories" => Category::all()
    ]);
});


Route::get('/contact', function () {
    return view('contact', [
        "title" => "Contact Us",
        "image" => "bg-contact.jpg"
    ]);
});
