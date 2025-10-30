<?php

namespace App\Services;

use App\Models\Ptba;
use App\Models\Operation;
use App\Models\Decaissement;
use App\Models\Entree;
use App\Types\TypeStatus;

class DashboardService
{
    /**
     * Récupère les données pour le tableau de bord
     *
     * @return array
     */
    public function getDashboardData(): array
    {
        // PTBA actifs
        $ptbaCount = Ptba::where('etat', TypeStatus::ACTIF)->count();

        // Opérations totales
        $operationCount = Operation::where('etat', TypeStatus::ACTIF)->count();

        // Décaissements
        $decaissements = Decaissement::where('etat', TypeStatus::ACTIF);
        $decaissementCount = $decaissements->count();
        $decaissementTotal = $decaissements->sum('montant');

        // Entrées
        $entrees = Entree::where('etat', TypeStatus::ACTIF);
        $entreeCount = $entrees->count();
        $entreeTotal = $entrees->sum('montant');

        // Dernières entrées
        $lastEntrees = $entrees->latest('date_entree')->take(5)->get();

        // Derniers décaissements
        $lastDecaissements = $decaissements->latest('date_decaissement')->take(5)->get();

        return [
            'ptbaCount' => $ptbaCount,
            'operationCount' => $operationCount,
            'decaissementCount' => $decaissementCount,
            'decaissementTotal' => $decaissementTotal,
            'entreeCount' => $entreeCount,
            'entreeTotal' => $entreeTotal,
            'lastEntrees' => $lastEntrees,
            'lastDecaissements' => $lastDecaissements,
        ];
    }
}

