<?php

namespace codeProject\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(\codeProject\Repositories\ProjectRepository::class, \codeProject\Repositories\ProjectRepositoryEloquent::class);
        $this->app->bind(\codeProject\Repositories\ProjectNoteRepository::class, \codeProject\Repositories\ProjectNoteRepositoryEloquent::class);
        //:end-bindings:
    }
}
