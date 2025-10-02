<?php
namespace App\Repositories;

use App\Models\Composant;
use App\Repositories\Interfaces\ComposantRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;
use App\Types\TypeStatus;


class ComposantRepository extends BaseRepository implements ComposantRepositoryInterface
{
    public function __construct(Composant $composant)
    {
        $this->model = $composant;
    }





}
