<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bailleur extends Model
{
    use HasFactory;

    protected $table = 'bailleurs';

    protected $fillable = [
        'code',
        'logo',
        'sigle',
        'nom',
        'email',
        'user_id',


        'etat',
    ];


     /**
     * 🔗 Relation avec l’Utilisateur
     */
    public function utilisateur()
    {
        return $this->belongsTo(Utilisateur::class, 'user_id');
    }


}
