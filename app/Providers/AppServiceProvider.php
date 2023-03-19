<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Models\Categoria;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
      $CategoriasMenu = Categoria::all();
      view()->share('Categorias', $CategoriasMenu);
    }
}