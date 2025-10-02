<?php
namespace App\Repositories;

use App\Models\Decaissement;
use App\Repositories\Interfaces\DecaissementRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;
use App\Types\TypeStatus;


class DecaissementRepository extends BaseRepository implements DecaissementRepositoryInterface
{
    public function __construct(Decaissement $decaissement)
    {
        $this->model = $decaissement;
    }





}
