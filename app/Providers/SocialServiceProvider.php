<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\Twiter;
class SocialServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(Twiter::class,function(){
            return new Twiter(config('services.twiter.secret'));
        });
    }
}
