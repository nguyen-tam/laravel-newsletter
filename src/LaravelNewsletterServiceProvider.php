<?php

namespace Kungfunguyen\Laravelnewsletter;

use Illuminate\Support\ServiceProvider;

class LaravelNewsletterServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        include __DIR__.'/routes.php';
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Kungfunguyen\Laravelnewsletter\NewsletterController');
        $this->loadViewsFrom(__DIR__.'/views', 'newsletter');
    }
}
