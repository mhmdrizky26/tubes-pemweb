<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CategoryUserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostUserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
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

Route::get('/test', function () {
    return view('kategori.lomba');
});

Route::get('/singleblog', function () {
    return view('single-blog');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Akses Siswa
Route::get('/', [WelcomeController::class, 'index'])->name('post');
Route::get('/post/{post}', [WelcomeController::class, 'show'])
    ->name('post.show')
    ->middleware('auth', 'verified', 'role:user');
Route::get('/category/{slug}', [WelcomeController::class, 'show'])
    ->name('category.show')
    ->middleware('auth', 'verified', 'role:user');

// Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware(['auth', 'verified', 'role:admin']);

//User Admin
Route::get('/user', [UserController::class, 'index'])->name('user')->middleware(['auth', 'verified', 'role:admin']);
Route::delete('/user/delete/{id}', [UserController::class, 'destroy'])->name('user.delete')->middleware(['auth', 'verified', 'role:admin']);

//Post
Route::get('/post', [PostController::class, 'index'])->name('post')->middleware(['auth', 'verified', 'role:admin']);
Route::get('/post/create', [PostController::class, 'create'])->name('post.create')->middleware(['auth', 'verified', 'role:admin']);
Route::post('/post/create', [PostController::class, 'store'])->name('post.store')->middleware(['auth', 'verified', 'role:admin']);
Route::get('/post/edit/{id}', [PostController::class, 'edit'])->name('post.edit')->middleware(['auth', 'verified', 'role:admin']);
Route::put('/post/update/{post}', [PostController::class, 'update'])->name('post.update')->middleware(['auth', 'verified', 'role:admin']);
Route::delete('/post/delete/{id}', [PostController::class, 'destroy'])->name('post.delete')->middleware(['auth', 'verified', 'role:admin']);

// Tag
Route::get('/tag', [TagController::class, 'index'])->name('tag')->middleware(['auth', 'verified', 'role:admin']);
Route::get('/tag/create', [TagController::class, 'create'])->name('tag.create')->middleware(['auth', 'verified', 'role:admin']);
Route::post('/tag/create', [TagController::class, 'store'])->name('tag.store')->middleware(['auth', 'verified', 'role:admin']);
Route::get('/tag/edit/{id}', [TagController::class, 'edit'])->name('tag.edit')->middleware(['auth', 'verified', 'role:admin']);
Route::put('/tag/update/{id}', [TagController::class, 'update'])->name('tag.update')->middleware(['auth', 'verified', 'role:admin']);
Route::delete('/tag/delete/{id}', [TagController::class, 'destroy'])->name('tag.delete')->middleware(['auth', 'verified', 'role:admin']);

// Category
Route::get('/kategori', [CategoryController::class, 'index'])->name('kategori')->middleware(['auth', 'verified', 'role:admin']);
Route::get('/kategori/create', [CategoryController::class, 'create'])->name('kategori.create')->middleware(['auth', 'verified', 'role:admin']);
Route::post('/kategori/create', [CategoryController::class, 'store'])->name('kategori.store')->middleware(['auth', 'verified', 'role:admin']);
Route::get('/kategori/edit/{id}', [CategoryController::class, 'edit'])->name('kategori.edit')->middleware(['auth', 'verified', 'role:admin']);
Route::put('/kategori/update/{id}', [CategoryController::class, 'update'])->name('kategori.update')->middleware(['auth', 'verified', 'role:admin']);
Route::delete('/kategori/delete/{id}', [CategoryController::class, 'destroy'])->name('kategori.delete')->middleware(['auth', 'verified', 'role:admin']);

// Event
Route::get('/agenda', [EventController::class, 'index'])->name('agenda')->middleware(['auth', 'verified', 'role:admin']);
Route::get('/agenda/create', [EventController::class, 'create'])->name('agenda.create')->middleware(['auth', 'verified', 'role:admin']);
Route::post('/agenda/create', [EventController::class, 'store'])->name('agenda.store')->middleware(['auth', 'verified', 'role:admin']);
Route::get('/agenda/edit/{id}', [EventController::class, 'edit'])->name('agenda.edit')->middleware(['auth', 'verified', 'role:admin']);
Route::put('/agenda/update/{id}', [EventController::class, 'update'])->name('agenda.update')->middleware(['auth', 'verified', 'role:admin']);
Route::delete('/agenda/delete/{id}', [EventController::class, 'destroy'])->name('agenda.delete')->middleware(['auth', 'verified', 'role:admin']);



require __DIR__.'/auth.php';
