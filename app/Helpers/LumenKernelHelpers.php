<?php

namespace App\Helpers;

use Illuminate\Support\ServiceProvider;
use Laravel\Lumen\Application;

class LumenKernelHelpers
{
    public static function configure(Application $app)
    {
        if (is_dir($app->basePath('config'))) {
            $files = array_diff(
                scandir(
                    $app->basePath('config')
                ),
                [
                    '..',
                    '.',
                    'drewlabshttphandlers.php',
                    'authorizedclients.php',
                    'filesystems.php',
                    'drewlabsuploadedfiles.php',
                    'drewlabsauth.php'
                ]
            );
            $configs = array_map(
                function ($name) {
                    return str_replace('.php', '', $name);
                },
                array_filter(
                    $files,
                    function ($filename) {
                        return drewlabs_core_strings_ends_with($filename, '.php');
                    }
                )
            );
            foreach ($configs as $value) {
                $app->configure($value);
            }
        }
        return $app;
    }

    public static function registerProviders($providers = [])
    {
        return function (Application $app) use ($providers) {
            $providers_ = is_array($providers_ = $app->make('config')->get('app.providers', [])) ?
                $providers_ :
                [];
            $providers = array_filter(
                array_merge(
                    $providers,
                    $providers_
                ),
                function ($provider) {
                    return is_string($provider) ||
                        (is_object($provider) && ($provider instanceof ServiceProvider));
                }
            );
            foreach ($providers as $value) {
                $app->register($value);
            }
            return $app;
        };
    }
}
