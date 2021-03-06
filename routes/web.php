<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\CompanyController;


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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/users2', function () {
    $users = User::paginate(5);
    return view('dashboard', ['users' => $users]);
})->name('users');

Route::middleware(['auth:sanctum', 'verified'])->prefix('data')->group(function () {
    Route::resources([
        'contacts' => PersonController::class,
        'companies' => CompanyController::class
    ]);
    Route::get('lines', function(){
        return view('date.railway-line.index');
    })->name('railwayLines');
});

Route::middleware(['isAdmin'])->group(function () {
    Route::resources([
        'users' => UserController::class
    ]);
});