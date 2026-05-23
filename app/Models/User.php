<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'users';

    protected $fillable = [
        'nom_prenom',
        'login',
        'telephone',
        'mot_passe',
        'role',
        'etat',
    ];

    protected $hidden = [
        'mot_passe',
    ];

    // Si vous utilisez l'authentification native Laravel, indiquez le champ mot de passe personnalisé
    public function getAuthPassword()
    {
        return $this->mot_passe;
    }

    // Relations : un utilisateur peut créer/avoir plusieurs...
    public function lignes()
    {
        return $this->hasMany(Ligne::class);
    }

    public function depenses()
    {
        return $this->hasMany(Depense::class);
    }

    public function ptbas()
    {
        return $this->hasMany(Ptba::class);
    }

    public function composants()
    {
        return $this->hasMany(Composant::class);
    }

    public function activites()
    {
        return $this->hasMany(Activite::class);
    }

    public function operations()
    {
        return $this->hasMany(Operation::class);
    }

    public function bailleurs()
    {
        return $this->hasMany(Bailleur::class);
    }
}
