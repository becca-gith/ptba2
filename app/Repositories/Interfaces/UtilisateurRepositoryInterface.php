<?php

namespace App\Repositories\Interfaces;
use App\Repositories\Interfaces\BaseRepositoryInterface;

interface UtilisateurRepositoryInterface extends BaseRepositoryInterface
{
    
    /**
     * Authentifie un utilisateur avec ses identifiants.
     *
     * @param array $credentials ['login_utilisateur' => ..., 'mot_passe' => ...]
     * @return array ['success' => bool, 'message' => string, 'compte' => array|null]
     */
    public function authenticate(array $credentials): array;
    public function listeUtilisateurs(): array; 

}
