<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemsController;
use App\Http\Controllers\ManagerController;

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

Auth::routes();


// Every part of the system management, will come here

Route::get('/', function () {
    return redirect()->route('login');
});



// System. -> Route manager

Route::get('/manager', [ManagerController::class, 'index'])->name('manager')->middleware('auth');


// items

// Display Items
Route::get('/manager/items', [ItemsController::class, 'index'])->name('manager.items')->middleware('auth');

Route::get('/manager/edit', [ItemsController::class, 'edit'])->name('manager.items.edit')->middleware('auth');

// Item addition form
Route::get('/manager/items/add', [ItemsController::class, 'create'])->name('manager.items.add')->middleware('auth');
// Item post handling
Route::post('/manager/items/add', [ItemsController::class, 'store'] )->name('items.store')->middleware('auth');





// Login


Route::get('/manager/login' , [AuthController::class,'login'])->name('login');
Route::get('login', function() {
    return redirect()->route('login');
});

Route::post('/manager/login', [AuthController::class,'postLogin'])->name('login.validate');
