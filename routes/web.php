<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\CheckAdminMiddleware;
use App\Http\Middleware\CheckLoginMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'processLogin'])->name('process_login');

Route::get('register', [AuthController::class, 'register'])->name('register');
Route::post('register', [AuthController::class, 'processRegister'])->name('process_register');
Route::get('cart', function () {
    return view('cart.cart');
});
Route::group([
    'middleware' => CheckLoginMiddleware::class,
], function(){
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
    Route::resource('books', BookController::class)
    ->except(
        'show',
        // 'destroy',
    );
    Route::resource('users', UserController::class)
    ->except(
        'show',
        // 'destroy',
    );
});
// Route::group([
//     'middleware' => CheckAdminMiddleware::class,
// ], function(){
//     Route::delete('books/{book}',[BookController::class, 'destroy'])->name('books.destroy');
//     Route::delete('users/{user}',[UserController::class, 'destroy'])->name('users.destroy');
// });




// Route::group(['prefix' => 'books', 'as' =>  'books.'], function(){
//     Route::get('/', [BookController::class, 'index'])->name('index');
//     Route::get('/create', [BookController::class, 'create'])->name('create');
//     Route::post('/create',[BookController::class, 'store'])->name('store');
//     Route::get('/edit/{book}',[BookController::class, 'edit'])->name('edit');
//     Route::put('/edit/{book}',[BookController::class, 'update'])->name('update');
//     Route::delete('/destroy/{book}',[BookController::class, 'destroy'])->name('destroy');
// });
// Route::group(['prefix' => 'users', 'as' =>  'users.'], function(){
//     Route::get('/', [UserController::class, 'index'])->name('index');
//     Route::get('/create', [UserController::class, 'create'])->name('create');
//     Route::post('/create',[UserController::class, 'store'])->name('store');
//     Route::get('/edit/{user}',[UserController::class, 'edit'])->name('edit');
//     Route::put('/edit/{user}',[BookController::class, 'update'])->name('update');
//     Route::delete('/destroy/{user}',[UserController::class, 'destroy'])->name('destroy');
// });
