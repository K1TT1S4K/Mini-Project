<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
    return view('index');
});

Route::get('/kittisak', function () {
    return view('new');
});

Route::get('/admin', function () {
    return view('admin');
});
// Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
Route::get('/article', function () {
    return view('article');
})->name('article');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin');
    })->name('dashboard');

    Route::get('/profile', function () {
        return view('profile');
    })->name('profile');

    Route::get('/project', function () {
        return view('project');
    })->name('project');

    Route::get('/project-add', function () {
        return view('project.add');
    })->name('project-add');

    Route::get('/project-edit/{id}', function ($id) {
        return view('project.edit',compact('id'));
    })->name('project-edit');

    Route::get('/article', function () {
        return view('article');
    })->name('article');

    Route::get('/article-add', function () {
        return view('article.add');
    })->name('article-add');

    Route::get('/article-edit', function () {
        return view('article.edit',compact('id'));
    })->name('article-edit');

    Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
});

