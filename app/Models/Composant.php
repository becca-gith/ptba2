<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Composant extends Model
{
    use HasFactory;

    protected $table = 'composants';

    protected $fillable = [
        'libelle',
        'ptba_id',
        'montant',
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
     * 🔗 Relation avec l’utilisateur
     */
    public function utilisateur()
    {
        return $this->belongsTo(Utilisateur::class, 'utilisateur_id');
    }
}
