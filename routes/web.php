<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ManagerController;
use Illuminate\Support\Facades\Route;

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
//partie client Utilisateur
Route::get('/', function () {
    return view('welcome');
});

//partie office

Route::prefix('office')->group(function () {

    Route::middleware(['office-guest'])->group(function () {
        Route::get('/', [AuthController::class, 'indexOffice'])->name('office-login');
        Route::post('/', [AuthController::class, 'loginOffice'])->name('office-login');
    }
    );

    Route::middleware(['office-auth'])->group(function () {

        Route::post('/office-logout', [AuthController::class, 'logoutOffice'])->name('office-logout');
        Route::get('/dashboard', DashboardController::class)->name('dashboard');
        
        Route::prefix('manager')->group(
            function () {
    
            
            Route::get('/', [ManagerController::class, 'index'])->name('manager-dashboard');
            Route::get('/create-employee', [ManagerController::class, 'createEmployeeView'])->name('create-employee');
            Route::post('/create-employee', [ManagerController::class, 'createEmployee'])->name('create-employee');
            Route::get('/create-role', [ManagerController::class, 'createRoleView'])->name('create-role');
            Route::post('/create-role', [ManagerController::class, 'createRole'])->name('create-role');
        }
        );

    }
    );
  
});