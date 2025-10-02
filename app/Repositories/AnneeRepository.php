<?php
namespace App\Repositories;

use App\Models\Annee;
use App\Repositories\Interfaces\AnneeRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;
use App\Types\TypeStatus;

class AnneeRepository extends BaseRepository implements AnneeRepositoryInterface
{
    public function __construct(Annee $annee)
    {
        $this->model = $annee;
    }

    public function listeAnnee(): array
    {
        return $this->model
           
            ->where('etat', TypeStatus::ACTIF)
            ->orderBy('created_at')
            ->get()
            ->map(function ($annee) {
                return [
                    'libelle' => $annee->libelle ,
                   
                    'id'   => $annee->id,
                ];
            })
            ->toArray();
    }




}
