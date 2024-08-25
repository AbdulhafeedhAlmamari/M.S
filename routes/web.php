<?php

use App\Http\Controllers\admin\DashController;
use App\Http\Controllers\admin\PermissionController;
use App\Http\Controllers\admin\RoleController;
use App\Http\Controllers\UserController;
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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::group(['prefix' => 'admin',  'middleware' => ['role:مدير الموقع']], function () {
    Route::get('/dashboard', [DashController::class, 'index'])->name('admin.dashboard');
    Route::resource('/role', RoleController::class);
    Route::get('/permission', [PermissionController::class, 'index'])->name('permissions');
    Route::post('/permission', [PermissionController::class, 'store'])->name('permissions');
    Route::get('permission/byRole', [RoleController::class, 'getByRole'])->name('permission_byRole');
    Route::resource('/user', UserController::class);
});


Route::group(['prefix' => 'admin',  'middleware' => ['auth', 'role:مدير الاقسام,مدير الموقع']], function () {
    Route::get('/dashboard', [DashController::class, 'index'])->name('admin.dashboard');
    Route::get('/dashboard/section', [DashController::class, 'index'])->name('admin.section');
});
