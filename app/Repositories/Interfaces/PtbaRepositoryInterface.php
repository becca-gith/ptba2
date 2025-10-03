<?php

namespace App\Repositories\Interfaces;
use App\Repositories\Interfaces\BaseRepositoryInterface;

interface PtbaRepositoryInterface extends BaseRepositoryInterface
{


/**
     * Liste des PTBA avec stats et filtres
     *
     * @param array $filters (annee_id, type, utilisateur_id, etat, etc.)
     * @return array
     */
    public function listePtbas(array $filters = []): array;

}
