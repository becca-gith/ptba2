<?php

namespace App\Providers;

use App\Repositories\UtilisateurRepository;
use App\Repositories\ActiviteRepository;
use App\Repositories\ComposantRepository;
use App\Repositories\DecaissementRepository;
use App\Repositories\EntreeRepository;
use App\Repositories\OperationRepository;
use App\Repositories\PtbaRepository;
use App\Repositories\AnneeRepository;


use App\Repositories\Interfaces\UtilisateurRepositoryInterface;
use App\Repositories\Interfaces\ActiviteRepositoryInterface;
use App\Repositories\Interfaces\ComposantRepositoryInterface;
use App\Repositories\Interfaces\DecaissementRepositoryInterface;
use App\Repositories\Interfaces\EntreeRepositoryInterface;
use App\Repositories\Interfaces\OperationRepositoryInterface;
use App\Repositories\Interfaces\PtbaRepositoryInterface;
use App\Repositories\Interfaces\AnneeRepositoryInterface;



use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
        
        $this->app->bind(UtilisateurRepositoryInterface::class, UtilisateurRepository::class);
         $this->app->bind(ActiviteRepositoryInterface::class, ActiviteRepository::class);
          $this->app->bind(ComposantRepositoryInterface::class, ComposantRepository::class);
           $this->app->bind(DecaissementRepositoryInterface::class, DecaissementRepository::class);
            $this->app->bind(EntreeRepositoryInterface::class, EntreeRepository::class);
             $this->app->bind(OperationRepositoryInterface::class, OperationRepository::class);
              $this->app->bind(PtbaRepositoryInterface::class, PtbaRepository::class);
               $this->app->bind(AnneeRepositoryInterface::class, AnneeRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
