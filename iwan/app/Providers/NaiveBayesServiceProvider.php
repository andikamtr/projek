<?php

namespace App\Providers;

use Phpml\Classification\NaiveBayes;
use Illuminate\Support\ServiceProvider;

class NaiveBayesServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind('naivebayes', function () {
            return new NaiveBayes();
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
