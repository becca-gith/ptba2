<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entree extends Model
{
    use HasFactory;

    protected $table = 'entrees';

    protected $fillable = [
        'libelle',
        'montant',
        'motif',
        'date_entre',
        'utilisateur_id',
        'etat',
    ];

    /**
     * 🔗 Relation avec l’utilisateur
     */
    public function utilisateur()
    {
        return $this->belongsTo(Utilisateur::class, 'utilisateur_id');
    }
}
