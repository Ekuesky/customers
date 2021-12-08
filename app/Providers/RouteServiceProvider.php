<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * Note: Uncomment the declaration to use App\Http\Controller as the default namespace
     * for controllers resolution
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';


    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        $this->mapApiRoutes();
    }

    protected function mapApiRoutes()
    {
        $this->map('api');
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map(string $prefix = 'api')
    {
        $this->app->router
            ->group([
                'prefix' => $prefix,
                'namespace' => property_exists($this, 'namespace') ? $this->namespace : null
            ], function ($router) {
                require base_path('routes/web.php');
            });
    }
}
