<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\WordController;
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

Route::get('/', [AdminController::class, 'login'])->name('admin.login');
Route::post('admin/auth', [AdminController::class, 'auth'])->name('admin.auth');

Route::prefix('admin')->middleware('admin')->group(function () {
  Route::get('dashboard', [AdminController::class, 'index'])->name('admin.index');
  Route::post('logout', [AdminController::class, 'logout'])->name('admin.logout');
  //Words
  Route::resource('words', WordController::class, [
    'names' => [
      'index' => 'admin.words.index',
      'create' => 'admin.words.create',
      'store' => 'admin.words.store',
      'edit' => 'admin.words.edit',
      'update' => 'admin.words.update',
      'destroy' => 'admin.words.destroy'
    ]
  ]);
});
