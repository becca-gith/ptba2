<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ligne extends Model
{
    use HasFactory;

    protected $fillable = ['libelle', 'prevision', 'taux_autorisation', 'annee_id', 'user_id', 'etat'];

    public function annee()
    {
        return $this->belongsTo(Annee::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function depenses()
    {
        return $this->hasMany(Depense::class);
    }
}
