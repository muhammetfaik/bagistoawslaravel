<?php

namespace WebkulIyzicoPayment\Providers;

use Illuminate\Support\ServiceProvider;

class WebkulIyzicoPaymentServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__ . '/../Http/routes.php';
        $this->loadViewsFrom(__DIR__ . '/../Resources/views', 'iyzico');
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerConfig();
    }
    
    /**
     * Register package config.
     *
     * @return void
     */
    protected function registerConfig()
    {
        $this->mergeConfigFrom(
            dirname(__DIR__) . '/Config/paymentmethods.php', 'paymentmethods'
        );

        $this->mergeConfigFrom(
            dirname(__DIR__) . '/Config/system.php', 'core'
        );
    }
}
