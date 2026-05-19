<?php

namespace App\Repositories\Interfaces;
use App\Repositories\Interfaces\BaseRepositoryInterface;

interface HorspipRepositoryInterface extends BaseRepositoryInterface  // ← corrigé
{

    /**
     * Liste des Hors PIPs avec stats et filtres
     *
     * @param array $filters (annee_id, type, utilisateur_id, etat, etc.)
     * @return array
     */
    public function listeHorspips(array $filters = []): array;  // ← corrigé

}