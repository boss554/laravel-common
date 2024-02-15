<?php

namespace Kody\Common;

use Illuminate\Support\ServiceProvider;

class CommonServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');
        $this->loadViewsFrom(__DIR__ . '/resources/views', 'common');
        $this->mergeConfigFrom(__DIR__ . '/config/common.php', 'common');
        $this->publishes([
            __DIR__ . '/config/common.php' => config_path('common.php'),
            __DIR__ . '/app/Models/DeviceDetail.php' => 'app/Models/DeviceDetail.php',
            __DIR__ . '/app/Models/EmailVerification.php' => 'app/Models/EmailVerification.php',
            __DIR__ . '/app/Models/Setting.php' => 'app/Models/Setting.php',
        ]);
    }

    /**
     * Register services.
     */
    public function register(): void
    {
    }
}
