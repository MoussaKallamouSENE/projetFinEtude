<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\SiteController;
use Illuminate\Database\Capsule\Manager;
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
//=====================partie client Utilisateur========================================
Route::get('/', [SiteController::class, 'index'])->name('home');
Route::get('/menu', [SiteController::class, 'menuView'])->name('menu');

// ==============================Reservation==============================
Route::get('/reservation', [SiteController::class, 'reservationView'])->name('create-reservation');
Route::post('/reservation', [SiteController::class, 'reservationTableView'])->name('table-reservation');

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

            //================================Employee============================================================        
            Route::get('/create-employee', [ManagerController::class, 'createEmployeeView'])->name('create-employee');
            Route::post('/create-employee', [ManagerController::class, 'createEmployee'])->name('create-employee');
            Route::get('/list-employee', [ManagerController::class ,'listEmployee'])->name('list-employee');
            Route::get('/create-employee/{id}/edit', [ManagerController::class, 'editEmployee'])->name('edit-employee');
            Route::put('/update-employe/{id}',[ManagerController::class, 'updateEmploye'])->name('update-employe');
            Route::delete('/destroy-employe/{id}',[ManagerController::class, 'destroy'])->name('destroy-employe');
            Route::get('/inactiveEmployer/{id}', [ManagerController::class, 'inactiveEmploye'])->name('employe-inactive');
            Route::get('/activeEmployer/{id}', [ManagerController::class, 'activeEmploye'])->name('employe-active');
            //=====================================fin employer===================================================

            

            //=============================gestion des roles==========================================================
            Route::get('/list-role', [ManagerController::class ,'listRole'])->name('list-role');
            Route::get('/create-role', [ManagerController::class, 'createRoleView'])->name('create-role');
            Route::post('/create-role', [ManagerController::class, 'createRole'])->name('create-role');
            Route::get('/create-role/{id}/edit', [ManagerController::class, 'editRole'])->name('edit-role');
            Route::patch('/update_role/{id}',[ManagerController::class, 'updateRole'])->name('update-role');
            Route::delete('/destroy-role/{id}',[ManagerController::class, 'destroyRole'])->name('destroy-role');

            //=====================================fin role========================================
            


            //===================================GESTION DES CATEGORIS====================================================================
            Route::get('/list-categorie', [ManagerController::class ,'listCategorie'])->name('list-categorie');
            Route::get('/create-categorie', [ManagerController::class, 'createCategorieView'])->name('create-categorie');
            Route::post('/create-categorie', [ManagerController::class, 'createCategorie'])->name('creer-categorie');
            Route::get('/create-categorie/{id}/edit', [ManagerController::class, 'editCategorie'])->name('edit-categorie');
            Route::patch('/update_categorie/{id}',[ManagerController::class, 'updateCategorie'])->name('update-categorie');
            Route::delete('/destroy-categorie/{id}',[ManagerController::class, 'destroyCategorie'])->name('destroy-categorie');
            //=====================================fin categorie========================================

            //=======================================GESTION DES ASSIETTE========================================================
            Route::get('/list-assiete', [ManagerController::class ,'listAssiete'])->name('list-assiete');
            Route::get('/create-assiete', [ManagerController::class, 'createAssieteView'])->name('create-assiete');
            Route::post('/store-assiete', [ManagerController::class, 'createAssiete'])->name('store-assiete');
            Route::get('/create-assiete/{id}/edit', [ManagerController::class, 'editAssiete'])->name('edit-assiete');
            Route::patch('/update_assiete/{id}',[ManagerController::class, 'updateAssiete'])->name('update-assiete');
            Route::delete('/destroy-assiete/{id}',[ManagerController::class, 'destroyAssiete'])->name('destroy-assiete');
            Route::get('/inactive/{id}', [ManagerController::class, 'inactiveAssiete'])->name('assiete-inactive');
            Route::get('/active/{id}', [ManagerController::class, 'activeAssiete'])->name('assiete-active');

            //=====================================fin plat========================================
            
            
            
            //=================================Gestion des Tables================================================================= 
            Route::get('/list-table', [ManagerController::class ,'listTable'])->name('list-table');
            Route::get('/create-table', [ManagerController::class, 'createtableView'])->name('create-table');
            Route::post('/create-table', [ManagerController::class, 'createtable'])->name('create-table');
            Route::get('/create-table/{id}/edit', [ManagerController::class, 'editTable'])->name('edit-table');
            Route::patch('/update_table/{id}',[ManagerController::class, 'updateTable'])->name('update-table');
            Route::delete('/destroy-table/{id}',[ManagerController::class, 'destroyTable'])->name('destroy-table');

            //===================================fin table=========================================================
           
            //=======================================GESTION DES PRODUITS=========================================================== 
            Route::get('/list-product', [ManagerController::class ,'listProduct'])->name('list-product');
            Route::get('/create-product', [ManagerController::class, 'createProductView'])->name('create-product');
            Route::post('/create-product', [ManagerController::class, 'createProduct'])->name('create-product');
            Route::get('/create-product/{id}/edit', [ManagerController::class, 'editProduct'])->name('edit-product');
            Route::patch('/update_product/{id}',[ManagerController::class, 'updateProduct'])->name('update-product');
            Route::delete('/destroy-product/{id}',[ManagerController::class, 'destroyProduct'])->name('destroy-product');

            //=======================================fin produit============================================================

            // ===============================================Les reservations===========================================================
            
            Route::get('/create-reservation', [ManagerController::class, 'createReservationView'])->name('create-reservation');
            Route::post('/create-reservation', [ManagerController::class ,'createReservation'])->name('create-reservation');
            Route::get('/list-reservation', [ManagerController::class ,'listReservation'])->name('list-reservation');

            // ===============================================Fin des reservations===========================================================
        }
        );

    }
    );
  
});