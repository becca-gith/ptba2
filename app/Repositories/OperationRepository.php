<?php
namespace App\Repositories;

use App\Models\Operation;
use App\Repositories\Interfaces\OperationRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;
use App\Types\TypeStatus;
class OperationRepository extends BaseRepository implements OperationRepositoryInterface
{
    public function __construct(Operation $operation)
    {
        $this->model = $operation;
    }





}
