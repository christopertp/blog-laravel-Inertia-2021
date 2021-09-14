<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PostController;

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
    return view('root');
});

Route::group(['middleware' => ['auth:sanctum', 'verified']], function () {
    Route::get('/dashboard', function () {
        return Inertia\Inertia::render('Dashboard');
    })->name('dashboard');

    Route::resource('posts', PostController::class);
});

// Route::group(['prefix' => 'js'], function () {
//     Route::inertia('/', 'Index')->name('rooot');
// });

// Route::inertia('/', 'Index');
Route::get('/products', [ProductController::class, 'index'])->name('list_products');

Route::get('/blog', [BlogController::class, 'index'])->name('blog_posts');
Route::get('/{slug}', [BlogController::class, 'show'])->name('blog_post');
Route::get('/user/{userId}', [BlogController::class, 'user'])->name('blog_user_posts');
Route::get('/category/{slug}', [BlogController::class, 'category'])->name('blog_category_posts');
Route::get('/tag/{slug}', [BlogController::class, 'tag'])->name('blog_tag_posts');

