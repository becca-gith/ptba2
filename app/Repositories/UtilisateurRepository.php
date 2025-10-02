<?php
namespace App\Repositories;

use App\Models\Utilisateur;
use App\Repositories\Interfaces\UtilisateurRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Hash;
use App\Types\TypeStatus;
class UtilisateurRepository extends BaseRepository implements UtilisateurRepositoryInterface
{
    public function __construct(Utilisateur $utilisateur)
    {
        $this->model = $utilisateur;
    }



    public function authenticate(array $credentials): array
{
    try {
        // ✅ Vérification des champs obligatoires
        if (!isset($credentials['login_utilisateur']) || !isset($credentials['mot_passe'])) {
            return [
                'success' => false,
                'message' => 'Les champs login_utilisateur et mot_passe sont requis.',
                'code'    => 'MISSING_FIELDS',
                'compte'  => null,
            ];
        }

        $login = trim($credentials['login_utilisateur']);
        $motPasse = trim($credentials['mot_passe']);

        if ($login === '' || $motPasse === '') {
            return [
                'success' => false,
                'message' => 'Les champs login_utilisateur et mot_passe ne peuvent pas être vides.',
                'code'    => 'EMPTY_FIELDS',
                'compte'  => null,
            ];
        }

        // ✅ Récupération de l’utilisateur
        $compte = Utilisateur::loginUser($login);

        if (!$compte) {
            return [
                'success' => false,
                'message' => 'Aucun utilisateur ne correspond à ce login.',
                'code'    => 'USER_NOT_FOUND',
                'compte'  => null,
            ];
        }

        // ✅ Vérification du mot de passe
        if (!Hash::check($motPasse, $compte->mot_passe)) {
            return [
                'success' => false,
                'message' => 'Le mot de passe est incorrect.',
                'code'    => 'INVALID_PASSWORD',
                'compte'  => null,
            ];
        }

        // ✅ Vérification de l’état du compte
        if ($compte->etat == TypeStatus::SUPPRIME) {
            return [
                'success' => false,
                'message' => 'Votre compte a été supprimé.',
                'code'    => 'ACCOUNT_DELETED',
                'compte'  => null,
            ];
        }

       

        // ✅ Authentification réussie
        return [
            'success' => true,
            'message' => 'Connexion réussie.',
            'code'    => 'LOGIN_SUCCESS',
            'compte'  => [
                'id'         => $compte->id,
                'role'       => (int) $compte->role,
                'nom_prenom' => $compte->nom_prenom,
            ],
        ];
    } catch (\Throwable $e) {
        // ✅ Log complet côté serveur pour debug
        \Log::error('Erreur authenticate : ' . $e->getMessage(), [
            'trace' => $e->getTraceAsString()
        ]);

        return [
            'success' => false,
            'message' => 'Une erreur interne est survenue. Veuillez réessayer plus tard.',
            'code'    => 'SERVER_ERROR',
            'compte'  => null,
        ];
    }
}





}
