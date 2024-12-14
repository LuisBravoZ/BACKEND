<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * El namespace de las rutas de la aplicación.
     *
     * @var string
     */
    protected $namespace = 'App\\Http\\Controllers';

    /**
     * Realizar el registro de las rutas para la aplicación.
     *
     * @return void
     */
    public function boot()
    {
        $this->routes(function () {
            Route::prefix('api')
                 ->middleware('api')
                 ->namespace($this->namespace)
                 ->group(base_path('routes/api.php'));

            Route::middleware('web')
                 ->namespace($this->namespace)
                 ->group(base_path('routes/web.php'));
        });
    }

    /**
     * Registrar cualquier servicio de rutas de la aplicación.
     *
     * @return void
     */
    public function map()
    {
        //
    }
}
