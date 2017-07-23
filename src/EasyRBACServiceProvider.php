<?php
namespace Robustit\EasyRBAC;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Robustit\EasyRBAC\Console\Commands\Migrate;
use Robustit\EasyRBAC\Console\Commands\MigrateAll;

/**
 * Class LaravelRBACServiceProvider
 */
class EasyRBACServiceProvider extends ServiceProvider
{
    protected $commands = [
        Migrate::class
    ];


    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'easy-rbac');
        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/easy-rbac'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        Route::group([
            'middleware' => ['web'],
        ], function ($router) {
            foreach (glob(base_path() . '/packages/robustit/easy-rbac/routes/*') as $file) {
                require $file;
            }
        });

        $this->app->bind('PermissionHelper', function ($app) {
            return $app->make('Robustit\EasyRBAC\Helpers\PermissionHelper');
        });

        $this->commands($this->commands);
    }
}