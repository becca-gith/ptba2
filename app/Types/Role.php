<?php

namespace App\Types;

class Role
{
    const UTILISATEUR  = 1;
    const ADMIN = 2;
    const DIRECTEUR = 3;

    /**
     * Retourne tous les roles 
    
     */
    public static function all(): array
    {
        return [
            self::COMPTABLE => 'Comptable',
            self::ADMIN => 'Admin',
            self::DIRECTEUR => 'Directeur',
        ];
    }

    /**
     * Retourne le libellé d’un statut à partir de son id
     */
    public static function label(?int $statutId): ?string
    {
        return self::all()[$statutId] ?? null;
    }
}
