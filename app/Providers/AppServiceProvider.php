<?php

namespace App\Providers;

use App\Contracts\WidgetRepositoryInterface;
use App\WidgetRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(WidgetRepositoryInterface::class, WidgetRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
