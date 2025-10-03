<?php
namespace App\Repositories;

use App\Models\Ptba;
use App\Repositories\Interfaces\PtbaRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;
use App\Types\TypeStatus;
use Illuminate\Support\Facades\DB; 

class PtbaRepository extends BaseRepository implements PtbaRepositoryInterface
{
    public function __construct(Ptba $ptba)
    {
        $this->model = $ptba;
    }

/**
     * Récupère la liste des PTBA avec stats
     *
     * @param array $filters (annee_id, type, utilisateur_id, etat, etc.)
     * @return \Illuminate\Support\Collection
     */
    public function listePtbas(array $filters = []): array
    {
        $query = $this->model
            ->select(
                'ptbas.id',
                'ptbas.libelle',
                'ptbas.type',
                'ptbas.annee_id',
                'ptbas.utilisateur_id',
                'annees.libelle as annee_libelle',
                'utilisateurs.nom_prenom as utilisateur'
            )
            ->withCount('composants as nombre_composants')
            ->withCount('activites as nombre_activites')
            ->leftJoin('annees', 'ptbas.annee_id', '=', 'annees.id')
            ->leftJoin('utilisateurs', 'ptbas.utilisateur_id', '=', 'utilisateurs.id')
            ->addSelect([
                // Somme des montants des activités liées
                'montant_global' => DB::table('activites')
                    ->selectRaw('COALESCE(SUM(montant),0)')
                    ->whereColumn('activites.ptba_id', 'ptbas.id')
            ]);

        // Application des filtres dynamiques
        if (!empty($filters['annee_id'])) {
            $query->where('ptbas.annee_id', $filters['annee_id']);
        }

        if (!empty($filters['type'])) {
            $query->where('ptbas.type', $filters['type']);
        }

        if (!empty($filters['utilisateur_id'])) {
            $query->where('ptbas.utilisateur_id', $filters['utilisateur_id']);
        }

        if (!empty($filters['etat'])) {
            $query->where('ptbas.etat', $filters['etat']);
        }

        return $query->orderByDesc('ptbas.created_at')->get()
                ->map(function ($ptba) {
            return [
                'id' => $ptba->id,
                'libelle' => $ptba->libelle,
                'annee' => $ptba->annee_libelle,
                'type' => \App\Types\TypePtba::label($ptba->type) ?? null, // mapping enum
                'montant_global' => $ptba->montant_global,
                'montant_decaissement' => 0,
                'utilisateur' => $ptba->utilisateur,
                'nombre_composants' => $ptba->nombre_composants,
                'nombre_activites' => $ptba->nombre_activites,
            ];
        })
        
         ->toArray(); // <-- conversion ici
        
    }



}
