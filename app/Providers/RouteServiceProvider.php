<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to the "home" route for your application.
     *
     * This is used by Laravel authentication to redirect users after login.
     *
     * @var string
     */
    public const HOME = '/home';

    /**
     * The controller namespace for the application.
     *
     * When present, controller route declarations will automatically be prefixed with this namespace.
     *
     * @var string|null
     */
    // protected $namespace = 'App\\Http\\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        $this->configureRateLimiting();

        $this->routes(function () {
            // rutas globales
            $this->mapApiRoutes();
            $this->mapWebRoutes();

            // rutas modulos public/user
            $this->mapModulesPublicRoutes();
            $this->mapModulesUsersRoutes();

            // rutas admin
            $this->mapAdminWebRoutes();
            $this->mapAdminModulesRoutes();
        });
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     */
    protected function mapApiRoutes()
    {
        Route::prefix('api')
                ->middleware('api')
                ->group(base_path('routes/api.php'));
    }

    /**
     * Define the "web" routes  for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     */
    protected function mapWebRoutes()
    {
        Route::middleware('web')
            ->namespace($this->namespace)
            ->group(base_path('routes/web.php'));
    }

    /**
     * Define the "web" routes modules public for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     */
    protected function mapModulesPublicRoutes()
    {
        collect(glob(base_path('routes/modules/public/').'*.php'))
            ->each(function ($route) {
                $name = explode('/', $route);

                Route::middleware('web')
                    ->group(base_path('routes/modules/public/'.$name[3]));
            });
    }

    /**
     * Define the "web" routes modules users for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     */
    protected function mapModulesUsersRoutes()
    {
        collect(glob(base_path('routes/modules/users/').'*.php'))
            ->each(function ($route) {
                $name = explode('/', $route);

                Route::middleware('web')
                    ->group(base_path('routes/modules/users/'.$name[3]));
            });
    }

    /**
     * Define the "web" routes admin for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     */
    protected function mapAdminWebRoutes()
    {
        Route::middleware('web')
            ->group(base_path('routes/admin/web.php'));
    }

    /**
     * Define the "web" routes modules admin for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     */
    protected function mapAdminModulesRoutes()
    {
        collect(glob(base_path('routes/admin/modules/').'*.php'))
            ->each(function ($route) {
                $name = explode('/', $route);

                Route::middleware('web')
                    ->group(base_path('routes/admin/modules/'.$name[3]));
            });
    }

    /**
     * Configure the rate limiters for the application.
     *
     * @return void
     */
    protected function configureRateLimiting()
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by(optional($request->user())->id ?: $request->ip());
        });
    }
}
