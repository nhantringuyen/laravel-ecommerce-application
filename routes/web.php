<?php

use App\Livewire\Admin\CategoryList;
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

Route::view('/', 'welcome');

//Route::view('dashboard', 'dashboard')
//    ->middleware(['auth', 'verified'])
//    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
//Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'isAdmin']], function () {
//    Route::view('/', 'dashboard');
//});
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth', 'isAdmin']], function () {
    Route::view('/', 'dashboard');
    Route::get('/categories', CategoryList::class)->name('categories.index');
});
