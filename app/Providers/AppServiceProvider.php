<?php

namespace App\Providers;

use App\Repositories\BailleurRepository;
use App\Repositories\HistoriqueRepository;
use App\Repositories\Interfaces\BailleurRepositoryInterface;
use App\Repositories\Interfaces\HistoriqueRepositoryInterface;
use App\Repositories\Interfaces\ProjetRepositoryInterface;
use App\Repositories\ProjetRepository;
use App\Repositories\UtilisateurRepository;
use App\Repositories\ActiviteRepository;
use App\Repositories\ComposantRepository;
use App\Repositories\OperationRepository;
use App\Repositories\PtbaRepository;
use App\Repositories\HorspipRepository;          // ← ajouter
use App\Repositories\AnneeRepository;

use App\Repositories\Interfaces\UtilisateurRepositoryInterface;
use App\Repositories\Interfaces\ActiviteRepositoryInterface;
use App\Repositories\Interfaces\ComposantRepositoryInterface;
use App\Repositories\Interfaces\OperationRepositoryInterface;
use App\Repositories\Interfaces\PtbaRepositoryInterface;
use App\Repositories\Interfaces\HorspipRepositoryInterface;  // ← ajouter
use App\Repositories\Interfaces\AnneeRepositoryInterface;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(UtilisateurRepositoryInterface::class, UtilisateurRepository::class);
        $this->app->bind(ActiviteRepositoryInterface::class, ActiviteRepository::class);
        $this->app->bind(ComposantRepositoryInterface::class, ComposantRepository::class);
        $this->app->bind(BailleurRepositoryInterface::class, BailleurRepository::class);
        $this->app->bind(OperationRepositoryInterface::class, OperationRepository::class);
        $this->app->bind(PtbaRepositoryInterface::class, PtbaRepository::class);
        $this->app->bind(AnneeRepositoryInterface::class, AnneeRepository::class);
        $this->app->bind(ProjetRepositoryInterface::class, ProjetRepository::class);
        $this->app->bind(HistoriqueRepositoryInterface::class, HistoriqueRepository::class);
        $this->app->bind(HorspipRepositoryInterface::class, HorspipRepository::class);  // ← ajouter
    }

    public function boot()
    {
        //
    }
}