<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TagController;
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

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route::get('user', function () {
//     return '<h1>Hi Siswa</h1>';
// })->middleware(['auth', 'verified', 'role:user|admin']); //2 user

// Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

//User
Route::get('/user', function () {
    return view('admin.user.index');
})->name('user.index');
Route::get('/user/create', function () {
    return view('admin.user.create');
})->name('user.create');

//Post
Route::get('/post', [PostController::class, 'index'])->name('post');
Route::get('/post/create', [PostController::class, 'create'])->name('post.create');
Route::post('/post/create', [PostController::class, 'store'])->name('post.store');
Route::get('/post/edit/{id}', [PostController::class, 'edit'])->name('post.edit');
Route::put('/post/update/{post}', [PostController::class, 'update'])->name('post.update');
Route::delete('/post/delete/{id}', [PostController::class, 'destroy'])->name('post.delete');

// Tag
Route::get('/tag', [TagController::class, 'index'])->name('tag');
Route::get('/tag/create', [TagController::class, 'create'])->name('tag.create');
Route::post('/tag/create', [TagController::class, 'store'])->name('tag.store');
Route::get('/tag/edit/{id}', [TagController::class, 'edit'])->name('tag.edit');
Route::put('/tag/update/{id}', [TagController::class, 'update'])->name('tag.update');
Route::delete('/tag/delete/{id}', [TagController::class, 'destroy'])->name('tag.delete');

// Category
Route::get('/kategori', [CategoryController::class, 'index'])->name('kategori');
Route::get('/kategori/create', [CategoryController::class, 'create'])->name('kategori.create');
Route::post('/kategori/create', [CategoryController::class, 'store'])->name('kategori.store');
Route::get('/kategori/edit/{id}', [CategoryController::class, 'edit'])->name('kategori.edit');
Route::put('/kategori/update/{id}', [CategoryController::class, 'update'])->name('kategori.update');
Route::delete('/kategori/delete/{id}', [CategoryController::class, 'destroy'])->name('kategori.delete');

// Event
Route::get('/agenda', [EventController::class, 'index'])->name('agenda');
Route::get('/agenda/create', [EventController::class, 'create'])->name('agenda.create');
Route::post('/agenda/create', [EventController::class, 'store'])->name('agenda.store');
Route::get('/agenda/edit/{id}', [EventController::class, 'edit'])->name('agenda.edit');
Route::put('/agenda/update/{id}', [EventController::class, 'update'])->name('agenda.update');
Route::delete('/agenda/delete/{id}', [EventController::class, 'destroy'])->name('agenda.delete');

require __DIR__.'/auth.php';
