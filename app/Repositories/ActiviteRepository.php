<?php
namespace App\Repositories;

use App\Models\Activite;
use App\Repositories\Interfaces\ActiviteRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;


class ActiviteRepository extends BaseRepository implements ActiviteRepositoryInterface
{
    public function __construct(Activite $activite)
    {
        $this->model = $activite;
    }





}
