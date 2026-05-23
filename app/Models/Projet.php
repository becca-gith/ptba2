<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    use HasFactory;

    protected $table = 'projets';

    protected $fillable = [
        'libelle',
        'description',
        'etat',
    ];

    // Relation avec Ptba (un projet peut avoir plusieurs PTBAs)
    public function ptbas()
    {
        return $this->hasMany(Ptba::class);
    }
}
