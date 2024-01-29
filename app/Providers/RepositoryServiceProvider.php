<?php

namespace App\Providers;

use App\Repositories\Interfaces\Doctor\DoctorRepositoryInterface;
use App\Repositories\Interfaces\Section\SectionRepositoryInterface;
use App\Repositories\Doctor\DoctorRepository;
use App\Repositories\Interfaces\Services\SingleServiceRepositoryInterface;
use App\Repositories\Section\SectionRepository;
use App\Repositories\Services\SingleServiceRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(SectionRepositoryInterface::class, SectionRepository::class);
        $this->app->bind(DoctorRepositoryInterface::class, DoctorRepository::class);
        $this->app->bind(SingleServiceRepositoryInterface::class, SingleServiceRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
