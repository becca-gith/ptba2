<?php

namespace App\Services;

use App\Repositories\Interfaces\UserRepositoryInterface;
use App\Types\Role;

class SessionUserService
{
    protected UtilisateurRepositoryInterface $utilisateurRepository;

    public function __construct(UtilisateurRepositoryInterface $utilisateurRepository)
    {
        $this->utilisateurRepository = $utilisateurRepository;
    }

    /**
     * Récupère les infos utilisateur + contexte session.
     */
    public function getUserSessionData(): array
{
    // Récupération sécurisée des données de session
    $session = session('LoginUser', []);

    $compte = $session['compte'] ?? null;
    $utilisateur = null;

    if ($compte && isset($compte['id'])) {
        try {
            // Recherche de l'utilisateur en base
            $utilisateur = $this->utilisateurRepository->rechercher($compte['id']);
        } catch (\Throwable $e) {
            Log::error("Erreur lors de la récupération de l'utilisateur depuis la session", [
                'compte_id' => $compte['id'],
                'message'   => $e->getMessage(),
            ]);
        }
    } else {
        Log::warning("Aucun compte valide trouvé dans la session LoginUser", [
            'session' => $session
        ]);
    }

    return [
        'compte'     => $compte,
        'utilisateur'=> $utilisateur,
        'isLoggedIn' => !empty($utilisateur),
    ];
}
}
