<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utilisateur extends Model
{
    use HasFactory;

    protected $table = 'utilisateurs';

    protected $fillable = [
        'nom_prenom',
        'login_utilisateur',
        'telephone',
        'mot_passe',
        'role',
        'etat',
    ];

    /**
     * Exemple de relation : un utilisateur peut avoir plusieurs PTBAs
     */
    public function ptbas()
    {
        return $this->hasMany(Ptba::class, 'utilisateur_id');
    }

    public static function loginUser($login)
{
    return self::where('login_utilisateur', $login)->first();
}




}
