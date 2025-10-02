<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Decaissement extends Model
{
    use HasFactory;

    protected $table = 'decaissements';

    protected $fillable = [
        'libelle',
        'fichier_justificatif',
        'motif',
        'date_decaissement',
        'montant',
        'utilisateur_id',
        'ptba_id',
        'composant_id',
        'activite_id',
        'etat',
    ];

    /**
     * 🔗 Relation avec l’utilisateur
     */
    public function utilisateur()
    {
        return $this->belongsTo(Utilisateur::class, 'utilisateur_id');
    }

    /**
     * 🔗 Relation avec le PTBA
     */
    public function ptba()
    {
        return $this->belongsTo(Ptba::class, 'ptba_id');
    }

    /**
     * 🔗 Relation avec le Composant
     */
    public function composant()
    {
        return $this->belongsTo(Composant::class, 'composant_id');
    }

    /**
     * 🔗 Relation avec l’Activité
     */
    public function activite()
    {
        return $this->belongsTo(Activite::class, 'activite_id');
    }
}
