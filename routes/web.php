<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\RoleController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [AuthController::class, 'login']);

Route::post('login', [AuthController::class, 'AuthLogin'])->name('login');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('logout', [AuthController::class, 'logout'])->name('auth.logout');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('role', RoleController::class);


    //PROFILE_ORANG
    Route::get('/person', [PersonController::class, 'index'])->name('orang');
});

require __DIR__ . '/auth.php';


// Route::middleware('auth')->group(function(){

//     Route::resource('role', RoleController::class);
// });
// Route::controller(RoleController::class)->group(function(){
//     Route::get('/roles', 'index')->middleware('can:role-list');
//     Route::get('/roles/create', 'create')->middleware('can:role-create');
// });
