<?php
namespace App\Repositories;

use App\Models\Horspip;  // ← modèle Horspip (à créer si pas encore fait)
use App\Repositories\Interfaces\HorspipRepositoryInterface;  // ← corrigé
use Illuminate\Database\Eloquent\Collection;
use App\Types\TypeStatus;
use Illuminate\Support\Facades\DB;

class HorspipRepository extends BaseRepository implements HorspipRepositoryInterface  // ← corrigé
{
    public function __construct(Horspip $horspip)  // ← corrigé
    {
        $this->model = $horspip;
    }

    /**
     * Récupère la liste des Hors PIPs avec stats
     *
     * @param array $filters (annee_id, type, utilisateur_id, etat, etc.)
     * @return array
     */
    public function listeHorspips(array $filters = []): array  // ← corrigé
    {
        $query = $this->model
            ->select(
                'horspips.id',       // ← nom de ta table
                'horspips.libelle',
                'horspips.type',
                'horspips.annee_id',
                'horspips.utilisateur_id',
                'annees.libelle as annee_libelle',
                'utilisateurs.nom_prenom as utilisateur'
            )
            ->withCount('composants as nombre_composants')
            ->withCount('activites as nombre_activites')
            ->leftJoin('annees', 'horspips.annee_id', '=', 'annees.id')
            ->leftJoin('utilisateurs', 'horspips.utilisateur_id', '=', 'utilisateurs.id')
            ->addSelect([
                'montant_global' => DB::table('activites')
                    ->selectRaw('COALESCE(SUM(montant),0)')
                    ->whereColumn('activites.horspip_id', 'horspips.id')  // ← corrigé
            ]);

        // Application des filtres
        if (!empty($filters['annee_id'])) {
            $query->where('horspips.annee_id', $filters['annee_id']);
        }

        if (!empty($filters['type'])) {
            $query->where('horspips.type', $filters['type']);
        }

        if (!empty($filters['utilisateur_id'])) {
            $query->where('horspips.utilisateur_id', $filters['utilisateur_id']);
        }

        if (!empty($filters['etat'])) {
            $query->where('horspips.etat', $filters['etat']);
        }

        // Récupération des Hors PIPs formatés
        $horspips = $query->orderByDesc('horspips.created_at')->get()
            ->map(function ($horspip) {
                return [
                    'id' => $horspip->id,
                    'libelle' => $horspip->libelle,
                    'annee' => $horspip->annee_libelle,
                    'type' => \App\Types\TypeHorspip::label($horspip->type) ?? null,  // ← si tu as ce Type
                    'montant_global' => $horspip->montant_global,
                    'montant_decaissement' => 0,
                    'utilisateur' => $horspip->utilisateur,
                    'nombre_composants' => $horspip->nombre_composants,
                    'nombre_activites' => $horspip->nombre_activites,
                ];
            })
            ->toArray();

        $annees = DB::table('annees')
            ->select('id', 'libelle')
            ->orderByDesc('libelle')
            ->get()
            ->toArray();

        return [
            'horspips' => $horspips,  // ← corrigé
            'annees' => $annees,
        ];
    }
}