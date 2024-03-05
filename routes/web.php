<?php

use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Permissions\RoleController;
use App\Http\Controllers\Permissions\AssignController;
use App\Http\Controllers\Permissions\PermissionController;

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
    // $role = Role::find(1);
    // $role->givePermissionTo('create-post');
    // dd($role);
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('has.role')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::middleware('permission:assign-permission')->controller(RoleController::class)->group(function() {
        Route::get('/roles', 'index')->name('roles');
        Route::post('/role-store', 'store')->name('roles.store');
    });

    Route::middleware('permission:assign-permission')->controller(PermissionController::class)->group(function() {
        Route::get('/permissions', 'index')->name('permissions');
        Route::post('/permissions-store', 'store')->name('permissions.store');
    });

    Route::middleware('permission:assign-permission')->controller(AssignController::class)->group(function() {
        Route::get('/assigns', 'index')->name('assigns');
        Route::post('/assigns-store', 'store')->name('assigns.store');
    });
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
