<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Financement extends Model
{
    use HasFactory;

    protected $table = 'financements';

    protected $fillable = [
        'montant',
        'bailleur_id',
        'activite_id',



        'etat',
    ];


     /**
     * 🔗 Relation avec le bailleur
     */
    public function bailleur()
    {
        return $this->belongsTo(Bailleur::class, 'bailleur_id');
    }



     /**
     * 🔗 Relation avec l' activité
     */
    public function activite()
    {
        return $this->belongsTo(Activite::class, 'activite_id');
    }


}
