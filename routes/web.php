<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('admin', function () {
    return view('admin.dashboard.index');
})->middleware(['auth', 'verified', 'role:admin'])->name('dashboard');

Route::get('user', function () {
    return '<h1>Hi Siswa</h1>';
})->middleware(['auth', 'verified', 'role:user|admin']); //2 user

require __DIR__.'/auth.php';

Route::get('/post', function() {
    return view('admin.post.index');
})->name('post');

Route::get('/post/create', function() {
    return view('admin.post.create');
})->name('post.create');

Route::get('/tag', function() {
    return view('admin.tag.index');
})->name('tag');

Route::get('/tag/create', function() {
    return view('admin.tag.create');
})->name('tag.create');

Route::get('/kategori', function() {
    return view('admin.category.index');
})->name('kategori');

Route::get('/kategori/create', function() {
    return view('admin.category.create');
})->name('kategori.create');

Route::get('/agenda', function() {
    return view('admin.event.index');
})->name('agenda');

Route::get('/agenda/create', function() {
    return view('admin.event.create');
})->name('agenda.create');
