<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horspip extends Model
{
    use HasFactory;

    protected $table = 'horspips';  // ← ta table

    protected $fillable = [
        'annee_id',
        'projet_id',
        'cout',
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
     * 🔗 Relation avec l'utilisateur
     */
    public function utilisateur()
    {
        return $this->belongsTo(IUtilisateur::class, 'utilisateur_id');
    }

    // ✅ Relation : un Hors PIP a plusieurs composants
    public function composants()
    {
        return $this->hasMany(Composant::class, 'horspip_id');  // ← corrigé
    }

    // ✅ Relation : un Hors PIP a plusieurs activités
    public function activites()
    {
        return $this->hasMany(Activite::class, 'horspip_id');  // ← corrigé
    }
}