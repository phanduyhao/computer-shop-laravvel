<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ConfirmPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\VerificationController;
use App\Http\Controllers\MainPostController;
use App\Http\Controllers\MainProductController;
use App\Http\Controllers\admin\HomeController;
use App\Http\Controllers\admin\UsersController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\PostController;

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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->withoutMiddleware(['auth']);
Route::get('/posts', [MainPostController::class, 'index'])->name('post');
Route::get('/posts/{slug}', [MainPostController::class, 'details'])->name('posts.details');

// Danh sách sản phẩm theo danh mục
Route::get('/products/{categorySlug}', [MainProductController::class, 'ShowProduct'])->name('products.showProduct');

// Chi tiết sản phẩm
Route::get('/products/details/{slug}', [MainProductController::class, 'ProductDetail'])->name('products.details');

Auth::routes();

// Đăng nhập
Route::get('/login',[LoginController::class,'showLoginForm'])->name('login');
Route::get('/register',[RegisterController::class,'showRegistrationForm'])->name('register');

// Bài viết

// Admin
Route::middleware(['auth', 'checkLevel'])->group(function() {
    Route::prefix('admin')->group(function () {
        Route::get('/', [HomeController::class, 'home'])->name('admin');

        //            User
        Route::get('/userAdmin',[UsersController::class,'userAdmin'])->name('userAdmin');
        Route::get('/user',[UsersController::class,'user'])->name('user');
        Route::post('/userAdmin',[UsersController::class,'store'])->name('user.store');
        Route::patch('/userAdmin/{user}',[UsersController::class,'update'])->name('user.update');
        Route::delete('/users/{id}', [UsersController::class,'destroy'])->name('users.destroy');

        //            Categories
        Route::resource('cates', CategoryController::class);
        Route::delete('/cates/{id}', [CategoryController::class,'destroy'])->name('cates.destroy');
        Route::post('cates/delete-all', [CategoryController::class,'deleteAllCates'])->name('deleteAllCate');

        //            Products
        Route::resource('products', ProductController::class);
        Route::delete('/products/{id}', [ProductController::class,'destroy'])->name('products.destroy');
        Route::post('products/delete-all', [ProductController::class,'deleteAllProducts'])->name('deleteAllProduct');

        //            Posts
        Route::resource('posts', PostController::class);
        Route::delete('/posts/{id}', [PostController::class,'destroy'])->name('posts.destroy');
        Route::post('posts/delete-all', [PostController::class,'deleteAllPosts'])->name('deleteAllPost');
    });
});
