<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Mt\Contact\Contact;

class ContactServiceProvider extends ServiceProvider{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // Contact::ignoreRoutes();
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

    }
}
