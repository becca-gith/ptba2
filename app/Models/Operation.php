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
        'user_id',

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
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
