<?php

use App\Http\Controllers\Admin\ProjectController as AdminProjectController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::middleware('auth')->prefix('admin/projects')->name('admin.projects.')->group(function () {
    Route::get('/', [AdminProjectController::class, 'index'])->name('index');
    Route::post('/', [AdminProjectController::class, 'store'])->name('store');
    Route::get('/create', [AdminProjectController::class, 'create'])->name('create');
    Route::get('/{id}', [AdminProjectController::class, 'show'])->name('show');
    Route::get('/{id}/edit', [AdminProjectController::class, 'edit'])->name('edit');
    Route::put('/{id}', [AdminProjectController::class, 'update'])->name('update');
    Route::delete('/{id}', [AdminProjectController::class, 'destroy'])->name('destroy');
    Route::delete('/{id}/permanent-delete', [AdminProjectController::class, 'permanentDestroy'])->name('permanent-destroy');
    Route::get('/{id}/restore', [AdminProjectController::class, 'restore'])->name('restore');
});
