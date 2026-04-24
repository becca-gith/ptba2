<?php
namespace App\Repositories;

use App\Models\Bailleur;
use App\Repositories\Interfaces\BailleurRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;


class BailleurRepository extends BaseRepository implements BailleurRepositoryInterface
{
    public function __construct(Bailleur $bailleur)
    {
        $this->model = $bailleur;
    }





}
