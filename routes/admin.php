<?php


use App\Http\Controllers\AnneeController;
use App\Http\Controllers\PtbaController;
use App\Http\Controllers\UtilisateurController;
use App\Http\Controllers\ComposantController;
use App\Http\Controllers\ActiviteController;
use App\Http\Controllers\OperationController;
use App\Http\Controllers\DecaissementController;
use App\Http\Controllers\EntreeController;
use App\Http\Controllers\TableauController;





Route::middleware(['admin'])->group(function () {

// MENU TABLEAU DE BORD

// MENU INSCRIPTION
Route::get('/', [TableauController::class, 'index'])->name('admin_tableau');

// 📂 Annees

Route::get('/annees/index', [AnneeController::class, 'index'])->name('admin_annee_index');
Route::post('/annees/save', [AnneeController::class, 'store'])->name('admin_annee_store');
Route::get('/annees/modifier/{id}', [AnneeController::class, 'show'])->name('admin_annee_edit');
Route::post('/annees/update/{id}', [AnneeController::class, 'update'])->name('admin_annee_update');
Route::post('/annees/delete/{id}', [AnneeController::class, 'destroy'])->name('admin_annee_delete');


// 📂 Ptbas

Route::get('/ptbas/index', [PtbaController::class, 'index'])->name('admin_ptba_index');
Route::get('/ptbas/create', [PtbaController::class, 'create'])->name('admin_ptba_create');
Route::post('/ptbas/save', [PtbaController::class, 'store'])->name('admin_ptba_store');
Route::get('/ptbas/modifier/{id}', [PtbaController::class, 'show'])->name('admin_ptba_edit');
Route::post('/ptbas/update/{id}', [PtbaController::class, 'update'])->name('admin_ptba_update');
Route::post('/ptbas/delete/{id}', [PtbaController::class, 'destroy'])->name('admin_ptba_delete');


// 📂 Utilisateurs

Route::get('/utilisateurs/index', [UtilisateurController::class, 'index'])->name('admin_utilisateur_index');
Route::post('/utilisateurs/save', [UtilisateurController::class, 'store'])->name('admin_utilisateur_store');
Route::get('/utilisateurs/modifier/{id}', [UtilisateurController::class, 'show'])->name('admin_utilisateur_edit');
Route::post('/utilisateurs/update/{id}', [UtilisateurController::class, 'update'])->name('admin_utilisateur_update');
Route::post('/utilisateurs/delete/{id}', [UtilisateurController::class, 'destroy'])->name('admin_utilisateur_delete');

// 📂 Composants

Route::get('/composants/index', [ComposantController::class, 'index'])->name('admin_composant_index');
Route::post('/composants/save', [ComposantController::class, 'store'])->name('admin_composant_store');
Route::get('/composants/modifier/{id}', [ComposantController::class, 'show'])->name('admin_composant_edit');
Route::post('/composants/update/{id}', [ComposantController::class, 'update'])->name('admin_composant_update');
Route::post('/composants/delete/{id}', [ComposantController::class, 'destroy'])->name('admin_composant_delete');


// 📂 Activites

Route::get('/activites/index', [ActiviteController::class, 'index'])->name('admin_activite_index');
Route::post('/activites/save', [ActiviteController::class, 'store'])->name('admin_activite_store');
Route::get('/activites/modifier/{id}', [ActiviteController::class, 'show'])->name('admin_activite_edit');
Route::post('/activites/update/{id}', [ActiviteController::class, 'update'])->name('admin_activite_update');
Route::post('/activites/delete/{id}', [ActiviteController::class, 'destroy'])->name('admin_activite_delete');



// 📂 Operations

Route::get('/operations/index', [OperationController::class, 'index'])->name('admin_operation_index');
Route::post('/operations/save', [OperationController::class, 'store'])->name('admin_operation_store');
Route::get('/operations/modifier/{id}', [OperationController::class, 'show'])->name('admin_operation_edit');
Route::post('/operations/update/{id}', [OperationController::class, 'update'])->name('admin_operation_update');
Route::post('/operations/delete/{id}', [OperationController::class, 'destroy'])->name('admin_operation_delete');

// 📂 Decaissements

Route::get('/decaissements/index', [DecaissementController::class, 'index'])->name('admin_decaissement_index');
Route::post('/decaissements/save', [DecaissementController::class, 'store'])->name('admin_decaissement_store');
Route::get('/decaissements/modifier/{id}', [DecaissementController::class, 'show'])->name('admin_decaissement_edit');
Route::post('/decaissements/update/{id}', [DecaissementController::class, 'update'])->name('admin_decaissement_update');
Route::post('/decaissements/delete/{id}', [DecaissementController::class, 'destroy'])->name('admin_decaissement_delete');


// 📂 Entrées

Route::get('/entrees/index', [EntreeController::class, 'index'])->name('admin_entree_index');
Route::post('/entrees/save', [EntreeController::class, 'store'])->name('admin_entree_store');
Route::get('/entrees/modifier/{id}', [EntreeController::class, 'show'])->name('admin_entree_edit');
Route::post('/entrees/update/{id}', [EntreeController::class, 'update'])->name('admin_entree_update');
Route::post('/entrees/delete/{id}', [EntreeController::class, 'destroy'])->name('admin_entree_delete');



});
