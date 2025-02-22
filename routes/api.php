<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CarouselItemsController;
use App\Http\Controllers\Api\UserController;
use App\Models\CarouselItems;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

//PUBLIC API'S
Route::post('/login',  [AuthController::class, 'login']);
Route::post('/user',  [UserController::class, 'store'])->name('user.store');

//PRIVATE API'S
Route::middleware(['auth:sanctum'])->group(function () {

    Route::post('/logout',  [AuthController::class, 'logout']);

    Route::delete('/carousel/{id}',  [CarouselItemsController::class, 'destroy']);
    Route::controller(CarouselItemsController::class)->group(function () {
        Route::get('/carousel',             'index');
        Route::get('/carousel/{id}',        'show');
        Route::post('/carousel',            'store');
        Route::put('/carousel/{id}',        'update');
        // Route::delete('/carousel/{id}', '   destroy');
    });


    Route::controller(UserController::class)->group(function () {
        Route::get('/user',                 'index');
        Route::get('/user/{id}',            'show');
        Route::put('/user/{id}',            'update')->name('user.update');
        Route::put('/user/email/{id}',      'email')->name('user.email');
        Route::put('/user/password/{id}',   'password')->name('user.password');
        Route::delete('/user/{id}',         'destroy');
    });
});

// Route::post('/login',  [AuthController::class, 'login']);
// Route::post('/logout',  [AuthController::class, 'logout']);

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });



// Route::get('/carousel',  [CarouselItemsController::class, 'index']);
// Route::get('/carousel/{id}',  [CarouselItemsController::class, 'show']);
// Route::post('/carousel',  [CarouselItemsController::class, 'store']);
// Route::put('/carousel/{id}',  [CarouselItemsController::class, 'update']);
// Route::delete('/carousel/{id}',  [CarouselItemsController::class, 'destroy']);
