<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Depense extends Model
{
    use HasFactory;

    protected $table = 'depenses';

    protected $fillable = [
        'motif',
        'montant',
        'date_depense',
        'annee_id',
        'ligne_id',
        'piece_justificatif',
        'user_id',
        'etat',
    ];

    // Relations (optionnelles mais utiles)
    public function annee()
    {
        return $this->belongsTo(Annee::class);
    }

    public function ligne()
    {
        return $this->belongsTo(Ligne::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
