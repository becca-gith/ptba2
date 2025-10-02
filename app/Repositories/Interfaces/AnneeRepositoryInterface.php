<?php

namespace App\Repositories\Interfaces;
use App\Repositories\Interfaces\BaseRepositoryInterface;

interface AnneeRepositoryInterface extends BaseRepositoryInterface
{


   public function listeAnnee(): array; 

}
