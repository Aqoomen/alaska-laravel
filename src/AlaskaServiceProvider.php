<?php
namespace iPremium\Alaska;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class AlaskaServiceProvider extends ServiceProvider
{
    public function register()
    {

    }

    public function boot()
	{

        $this->loadViewsFrom(__DIR__.'/views/public', 'alaska-public');
        $this->loadViewsFrom(__DIR__.'/views/admin', 'alaska-admin');

        /*
        $this->publishes([
            __DIR__.'/views/public' => base_path('resources/views/vendor/alaska-public'),
        ]);
        */
        
        $this->loadRoutesFrom(__DIR__.'/routes/routes.php');
        $this->loadMigrationsFrom(__DIR__.'/migrations');




        /*
        $this->publishes([
            __DIR__.'/components' => base_path('resources/assets/js/components/laravel-cms'),
        ], 'laravel-cms-components');
        $this->publishes([
            __DIR__.'/assets/admin.js' => base_path('resources/assets/js/admin.js'),
            __DIR__.'/assets/admin.scss' => base_path('resources/assets/sass/admin.scss'),
            __DIR__.'/assets/tinymce.scss' => base_path('resources/assets/sass/tinymce.scss'),
        ], 'laravel-cms-assets');*/
	}
}
