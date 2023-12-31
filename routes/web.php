<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Frontend\FrontendController;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [FrontendController::class, 'index'])->name('frontend.index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function() {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    //category routes
    Route::get('/category', [CategoryController::class, 'index'])->name('admin.category');

    Route::get('/add-category', [CategoryController::class, 'create'])->name('admin.addcategory');

    Route::post('/add-category', [CategoryController::class, 'store'])->name('admin.addcategory');

    Route::get('/edit-category/{category_id}', [CategoryController::class, 'edit'])->name('admin.editcategory');

    Route::post('/update-category/{category_id}', [CategoryController::class, 'update'])->name('admin.updatecategory');

    Route::get('/delete-category/{category_id}', [CategoryController::class, 'delete'])->name('admin.deletecategory');
    //posts routes
    Route::get('/posts', [PostController::class, 'index'])->name('admin.posts');

    Route::get('/add-post', [PostController::class, 'create'])->name('admin.addpost');

    Route::post('/add-post', [PostController::class, 'store'])->name('admin.addpost');

    Route::get('/edit-post/{post_id}', [PostController::class, 'edit'])->name('admin.editpost');

    Route::post('/update-post/{post_id}', [PostController::class, 'update'])->name('admin.updatepost');

    Route::get('/delete-post/{post_id}', [PostController::class, 'delete'])->name('admin.deletepost');

    Route::get('/users', [UserController::class, 'index'])->name('admin.users');

    Route::get('/user-edit/{user_id}', [UserController::class, 'edit'])->name('admin.useredit');

    Route::post('/user-update/{user_id}', [UserController::class, 'update'])->name('admin.userupdate');
});
