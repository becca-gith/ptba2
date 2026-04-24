<?php
namespace App\Repositories;

use App\Models\Projet;
use App\Repositories\Interfaces\ProjetRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;


class ProjetRepository extends BaseRepository implements ProjetRepositoryInterface
{
    public function __construct(Projet $projet)
    {
        $this->model = $projet;
    }





}
