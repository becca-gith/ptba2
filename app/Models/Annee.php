<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Annee extends Model
{
    use HasFactory;

    protected $table = 'annees';

    protected $fillable = [
        'libelle',
        'etat',
    ];

    /**
     * Exemple de relation si tu relies les années à d’autres entités
     * (par ex. Ptba, Inscription, etc.)
     */
    public function ptbas()
    {
        return $this->hasMany(Ptba::class, 'annee_id');
    }
}
