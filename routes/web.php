<?php

use Illuminate\Support\Facades\Route;

//Crud
use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\EditController;
use App\Http\Controllers\CreateController;
use App\Http\Controllers\ShowController;
use App\Http\Controllers\DeleteController;

//Auth
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PasswordController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route Home
Route::get('/', function(){
    return view('home');
});

//Route login
Route::get('login', [LoginController::class, 'index']);
Route::post('login', [LoginController::class, 'check']);

//Route register
Route::get('register', [RegisterController::class, 'index']);
Route::post('register', [RegisterController::class, 'store']);

//Route recover password
Route::get('password', [PasswordController::class, 'index']);
Route::post('password', [PasswordController::class, 'store']);

//Routes Employees
Route::prefix('employees')->group(function () {
    Route::get('/', [EmployeesController::class, 'index']);

    //Routes create
    Route::prefix('create')->group(function () {
        Route::get('/', [CreateController::class, 'index']);
        Route::post('/', [CreateController::class, 'create']);
    });

    Route::get('show/{id}', [ShowController::class, 'index']);

    //Routes update
    Route::prefix('edit/{id}')->group(function () {
        Route::get('/', [EditController::class, 'index']);
        Route::put('/', [EditController::class, 'edit']);
    });

    //Routes delete
    Route::prefix('delete/{id}')->group(function () {
        Route::get('/', [DeleteController::class, 'index']);
        Route::delete('/', [DeleteController::class, 'delete']);
    });
});


//Route página error 404
Route::get('error404', function(){
    return view('error404');
});
