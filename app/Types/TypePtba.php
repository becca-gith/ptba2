<?php

namespace App\Types;

class TypePtba
{
    const SUR_PROJET  = 1;
    const HORS_PIP = 2;

    /**
     * Retourne tous les roles 
    
     */
    public static function all(): array
    {
        return [
            self::SUR_PROJET => 'Sur projet',
            self::HORS_PIP => 'Hors PIP',
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
