<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activite extends Model
{
    use HasFactory;

    protected $table = 'activites';

    protected $fillable = [
        'libelle',
        'montant',
        'ptba_id',
        'composant_id',
        'utilisateur_id',
        'etat',
    ];

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
     * 🔗 Relation avec l’Utilisateur
     */
    public function utilisateur()
    {
        return $this->belongsTo(Utilisateur::class, 'utilisateur_id');
    }
}
