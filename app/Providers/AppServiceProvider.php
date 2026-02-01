<?php

namespace App\Providers;

use Illuminate\Support\Facades\URL;
use Illuminate\Pagination\Paginator;
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
<<<<<<< HEAD
        //
    	\URL::forceScheme('https');
=======
        // if (config('app.env') === 'production') {
        //     URL::forceScheme('https');
        // }

        // Menambahkan paginator dengan Bootstrap
        // Paginator::useBootstrap();
>>>>>>> e7b2badd4a9d2e9429f950c30349dd84a75f08b3
    }
}
