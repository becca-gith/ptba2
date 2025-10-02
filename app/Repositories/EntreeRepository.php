<?php
namespace App\Repositories;

use App\Models\Entree;
use App\Repositories\Interfaces\EntreeRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;
use App\Types\TypeStatus;
class EntreeRepository extends BaseRepository implements EntreeRepositoryInterface
{
    public function __construct(Entree $entree)
    {
        $this->model = $entree;
    }





}
