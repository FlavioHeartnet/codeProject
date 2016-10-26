<?php

namespace codeProject\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryProvider extends ServiceProvider
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
        $this->app->bind('codeProject\Repositories\ClientRepository', 'codeProject\Repositories\ClientRepositoryEloquent');
        $this->app->bind('codeProject\Repositories\ProjectRepository', 'codeProject\Repositories\ProjectRepositoryEloquent');
        $this->app->bind('codeProject\Repositories\ProjectNoteRepository', 'codeProject\Repositories\ProjectNoteRepositoryEloquent');
    }
}
