<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Operation extends Model
{
    use HasFactory;

    protected $table = 'operations';

    protected $fillable = [
        'libelle',
        'montant',
        'statut',
        'justificatif',
        'date_operation',
        'utilisateur_id',
        'utilisateur_id',
        'etat',
    ];

    /**
     * 🔗 Relation avec l’Activité
     */
    public function activite()
    {
        return $this->belongsTo(Activite::class, 'activite_id');
    }

    /**
     * 🔗 Relation avec l’Utilisateur
     */
    public function utilisateur()
    {
        return $this->belongsTo(Utilisateur::class, 'utilisateur_id');
    }
}
