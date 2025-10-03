<?php

namespace App\Types;

class Role
{
    const UTILISATEUR  = 1;
    const ADMIN = 2;

    /**
     * Retourne tous les roles 
    
     */
    public static function all(): array
    {
        return [
            self::UTILISATEUR => 'Utilisateur',
            self::ADMIN => 'Admin',
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
