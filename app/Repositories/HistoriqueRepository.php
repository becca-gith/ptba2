<?php
namespace App\Repositories;

use App\Models\Historique;
use App\Repositories\Interfaces\HistoriqueRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;


class HistoriqueRepository extends BaseRepository implements HistoriqueRepositoryInterface
{
    public function __construct(Historique $historique)
    {
        $this->model = $historique;
    }





}
