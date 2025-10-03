<?php

namespace App\Repositories;

use App\Repositories\Interfaces\BaseRepositoryInterface;
use App\Types\TypeStatus;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Support\Facades\Schema;



abstract class BaseRepository implements BaseRepositoryInterface
{
    protected Model $model;

    public function liste()
    {
        return $this->model->where('etat', TypeStatus::ACTIF)->get();
    }



    public function rechercher(?int $id)
    {
        if (is_null($id)) {
            return null; // ou throw new \InvalidArgumentException("ID manquant");
        }

        return $this->model
            ->where('id', $id)
            ->where('etat', TypeStatus::ACTIF)
            ->first();
    }

    public function ajouter(array $data)
    {
        $data['created_at'] = Carbon::now();
        $data['updated_at'] = Carbon::now();
        
        // Vérifier si le modèle possède la colonne "utilisateur_id"
        if (Schema::hasColumn($this->model->getTable(), 'utilisateur_id')) {
            // Récupérer l'année en cours depuis la session
            $session = session()->get('LoginUser');
            $utilisateur_id = $session['compte']['id'] ?? null;

            if ($utilisateur_id) {
                $data['utilisateur_id'] = $utilisateur_id;
            }
        }

        return $this->model->create($data);
    }

    public function modifier(int $id, array $data)
    {
        $data['updated_at'] = Carbon::now();

        $instance = $this->model->findOrFail($id);
        $instance->update($data);
        return $instance;
    }

    public function supprimer(int $id): bool
{
    $instance = $this->model->findOrFail($id);

    return $instance->update([
        'etat' => TypeStatus::SUPPRIME,
        'updated_at' => Carbon::now(),
    ]);
}
}
