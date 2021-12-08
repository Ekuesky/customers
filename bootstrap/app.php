<?php

require_once __DIR__ . '/../vendor/autoload.php';


if (!defined('APP_VERSION')) {
    define('APP_VERSION', '1.0.0');
}


(new Laravel\Lumen\Bootstrap\LoadEnvironmentVariables(
    dirname(__DIR__)
))->bootstrap();

/*
|--------------------------------------------------------------------------
| Load packages configurations
|--------------------------------------------------------------------------
|
| Here we will load configuration values for various packages included in
| in the project that provide additional functionality
|
*/

\Drewlabs\Support\PackagesConfigurationManifest::load([
    \Drewlabs\Packages\Http\ConfigurationManager::class => __DIR__ . '/../config/drewlabshttphandlers.php',
    \Drewlabs\ServerAuthorizedClient\ConfigurationManager::class => __DIR__ . '/../config/authorizedclients.php',
    \Drewlabs\Filesystem\Helpers\ConfigurationManager::class => __DIR__ . '/../config/filesystems.php',
    \Drewlabs\Packages\UploadedFile\ConfigurationManager::class => __DIR__ . '/../config/drewlabsuploadedfiles.php',
    \Drewlabs\Packages\Form\ConfigurationManager::class => __DIR__ . '/../config/drewlabsforms.php'
]);

/*
|--------------------------------------------------------------------------
| Create The Application
|--------------------------------------------------------------------------
|
| Here we will load the environment and create the application instance
| that serves as the central piece of this framework. We'll use this
| application as an "IoC" container and router for this framework.
|
*/
$app = new Laravel\Lumen\Application(
    dirname(__DIR__)
);

$app->withFacades();

$app->withEloquent();

/*
|--------------------------------------------------------------------------
| Configure application
|--------------------------------------------------------------------------
|
| This call will load configurations from config/ directory into application
|
*/
$app = \App\Helpers\LumenKernelHelpers::configure($app);

/*
|--------------------------------------------------------------------------
| Register Container Bindings
|--------------------------------------------------------------------------
|
| Now we will register a few bindings in the service container. We will
| register the exception handler and the console kernel. You may add
| your own bindings here if you like or you can make another file.
|
*/

$app->singleton(
    Illuminate\Contracts\Debug\ExceptionHandler::class,
    \App\Exceptions\Handler::class
);

$app->singleton(
    Illuminate\Contracts\Console\Kernel::class,
    \App\Console\Kernel::class
);
/*
|--------------------------------------------------------------------------
| Register Middleware
|--------------------------------------------------------------------------
|
| Next, we will register the middleware with the application. These can
| be global middleware that run before and after each request into a
| route or middleware that'll be assigned to some specific routes.
|
 */

$app->middleware([
    \Drewlabs\Packages\Http\Middleware\Cors\Middleware::class,
]);

$app->routeMiddleware([
    'clients' => \Drewlabs\ServerAuthorizedClient\Http\Middleware\AuthorizedClientsMiddleware::class,
    'file.type' => \Drewlabs\Packages\UploadedFile\Http\Middleware\ApplyUploadedFileTypeRules::class,
]);

/*
|--------------------------------------------------------------------------
| Register Service Providers
|--------------------------------------------------------------------------
|
| Here we will register all of the application's service providers which
| are used to bind services into the container. Service providers are
| totally optional, so you are not required to uncomment this line.
|
 */
$app = \App\Helpers\LumenKernelHelpers::registerProviders()($app);

/*
|--------------------------------------------------------------------------
| Load The Application Routes
|--------------------------------------------------------------------------
|
| Next we will include the routes file so that they can all be added to
| the application. This will provide all of the URLs the application
| can respond to, as well as the controllers that may handle them.
|
*/
return $app;
