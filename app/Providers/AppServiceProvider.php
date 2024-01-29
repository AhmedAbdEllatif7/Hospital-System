<?php

namespace App\Providers;

use App\Models\Doctor;
use App\Models\User;
use App\Observers\DoctorObserver;
use App\Observers\UserObserver;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Doctor::observe(DoctorObserver::class);
        User::observe(UserObserver::class);

    }
}
