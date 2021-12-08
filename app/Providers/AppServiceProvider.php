<?php

namespace App\Providers;

use Drewlabs\Packages\Http\JsonApiResponseHandler;
use Drewlabs\Packages\Http\Contracts\IActionResponseHandler;
use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Routing\UrlGenerator;
use Laravel\Lumen\Routing\UrlGenerator as RoutingUrlGenerator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(UrlGenerator::class, function ($app) {
            return new RoutingUrlGenerator($app);
        });
        $this->app->bind(IActionResponseHandler::class, JsonApiResponseHandler::class);
    }

    public function boot()
    {
    }
}
