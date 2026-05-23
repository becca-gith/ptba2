<?php
// app/Services/AuthService.php

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthService
{
    /**
     * Tenter de connecter un utilisateur.
     *
     * @param string $login
     * @param string $password
     * @param int|null $projetId
     * @return User|null
     */
    public function attempt($login, $password, $projetId = null)
    {
        $user = User::where('login', $login)->first();

        if (!$user) {
            return null;
        }

        // Vérifier le mot de passe (hashé)
        if (!Hash::check($password, $user->mot_passe)) {
            return null;
        }

        // Vérifier que l'utilisateur est actif (etat = 1)
        if ($user->etat != 1) {
            return null;
        }

        // Enregistrer en session
        Session::put('user', $user);
        Session::put('user_id', $user->id);
        Session::put('user_role', $user->role);
        if ($projetId) {
            Session::put('current_projet_id', $projetId);
        }

        return $user;
    }

    /**
     * Déconnecter l'utilisateur.
     */
    public function logout()
    {
        Session::flush();
    }

    /**
     * Vérifier si un utilisateur est connecté.
     */
    public function check()
    {
        return Session::has('user');
    }

    /**
     * Récupérer l'utilisateur connecté.
     */
    public function user()
    {
        return Session::get('user');
    }
}
