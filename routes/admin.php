<?php

use App\Http\Controllers\HorspipController;  // ← ajouter cette ligne
use App\Http\Controllers\AnneeController;
use App\Http\Controllers\BailleurController;
use App\Http\Controllers\PtbaController;
use App\Http\Controllers\UtilisateurController;
use App\Http\Controllers\ActiviteController;
use App\Http\Controllers\ProjetController;
use App\Http\Controllers\OperationController;
use App\Http\Controllers\TableauController;
use App\Http\Controllers\ComposantController;





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

// 📂 Hors PIP - corrigé
Route::get('/horspips/index', [HorspipController::class, 'index'])->name('admin_pip_index');
Route::get('/horspips/create', [HorspipController::class, 'create'])->name('admin_pip_create');
Route::post('/horspips/save', [HorspipController::class, 'store'])->name('admin_pip_store');
Route::get('/horspips/modifier/{id}', [HorspipController::class, 'show'])->name('admin_pip_edit');
Route::post('/horspips/update/{id}', [HorspipController::class, 'update'])->name('admin_pip_update');
Route::post('/horspips/delete/{id}', [HorspipController::class, 'destroy'])->name('admin_pip_delete');

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


// 📂 Bailleurs

    Route::get('/bailleurs/index', [BailleurController::class, 'index'])->name('admin_bailleur_index');
    Route::post('/bailleurs/save', [BailleurController::class, 'store'])->name('admin_bailleur_store');
    Route::get('/bailleurs/modifier/{id}', [BailleurController::class, 'show'])->name('admin_bailleur_edit');
    Route::post('/bailleurs/update/{id}', [BailleurController::class, 'update'])->name('admin_bailleur_update');
    Route::post('/bailleurs/delete/{id}', [BailleurController::class, 'destroy'])->name('admin_bailleur_delete');


// 📂 Projets


    Route::get('/projets/index', [ProjetController::class, 'index'])->name('admin_projet_index');
    Route::post('/projets/save', [ProjetController::class, 'store'])->name('admin_projet_store');
    Route::get('/projets/modifier/{id}', [ProjetController::class, 'show'])->name('admin_projet_edit');
    Route::post('/projets/update/{id}', [ProjetController::class, 'update'])->name('admin_projet_update');
    Route::post('/projets/delete/{id}', [ProjetController::class, 'destroy'])->name('admin_projet_delete');


// 📂 Historiques

    Route::get('/historiques/index', [HistoriqueController::class, 'index'])->name('admin_historique_index');
    Route::post('/historiques/save', [HistoriqueController::class, 'store'])->name('admin_historique_store');
    Route::get('/historiques/modifier/{id}', [HistoriqueController::class, 'show'])->name('admin_historique_edit');
    Route::post('/historiques/update/{id}', [HistoriqueController::class, 'update'])->name('admin_historique_update');
    Route::post('/historiques/delete/{id}', [HistoriqueController::class, 'destroy'])->name('admin_historique_delete');


});
