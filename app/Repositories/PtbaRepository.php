<?php
namespace App\Repositories;

use App\Models\Ptba;
use App\Repositories\Interfaces\PtbaRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;
use App\Types\TypeStatus;
class PtbaRepository extends BaseRepository implements PtbaRepositoryInterface
{
    public function __construct(Ptba $ptba)
    {
        $this->model = $ptba;
    }





}
