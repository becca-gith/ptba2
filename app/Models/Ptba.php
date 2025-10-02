<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ptba extends Model
{
    use HasFactory;

    protected $table = 'ptbas';

    protected $fillable = [
        'libelle',
        'annee_id',
        'type',
        'utilisateur_id',
        'etat',
    ];

    /**
     * 🔗 Relation avec l'année
     */
    public function annee()
    {
        return $this->belongsTo(Annee::class, 'annee_id');
    }

    /**
     * 🔗 Relation avec l’utilisateur
     */
    public function utilisateur()
    {
        return $this->belongsTo(IUtilisateur::class, 'utilisateur_id');
        // ⚠️ Si ton modèle utilisateur s’appelle User → change IUtilisateur par User
    }
}
