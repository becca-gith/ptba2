<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ptba extends Model
{
    use HasFactory;

    protected $table = 'ptbas';

    protected $fillable = [
        'annee_id',
        'projet_id',
        'cout',
        'user_id',
        'etat',
    ];

    // Relation avec l'année
    public function annee()
    {
        return $this->belongsTo(Annee::class);
    }

    // Relation avec le projet
    public function projet()
    {
        return $this->belongsTo(Projet::class);
    }

    // Relation avec l'utilisateur (créateur/responsable)
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Un PTBA peut avoir plusieurs composants
    public function composants()
    {
        return $this->hasMany(Composant::class);
    }

    // Un PTBA peut avoir plusieurs activités
    public function activites()
    {
        return $this->hasMany(Activite::class);
    }
}
