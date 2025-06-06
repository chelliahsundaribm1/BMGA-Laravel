<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Company;
use App\Services\TravClanAuthService;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
            $this->app->bind(TravClanAuthService::class);

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $locale = session('locale', config('app.locale'));  
        app()->setLocale($locale);
        View::composer('*', function ($view) {
            $view->with('company', Company::first());
        });
        // dd($locale);
    }
    

    
}
