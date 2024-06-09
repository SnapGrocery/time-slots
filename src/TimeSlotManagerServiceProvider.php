
<?php

namespace YourNamespace\TimeSlotManager;

use Illuminate\Support\ServiceProvider;

class TimeSlotManagerServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadRoutesFrom(__DIR__ . '/routes/api.php');
        $this->loadViewsFrom(__DIR__ . '/resources/views', 'timeslotmanager');
        
        // Publishing config file
        $this->publishes([
            __DIR__ . '/config/timeslotmanager.php' => config_path('timeslotmanager.php'),
        ], 'config');
        
        // Publishing migrations
        $this->publishes([
            __DIR__ . '/database/migrations/' => database_path('migrations')
        ], 'migrations');
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/config/timeslotmanager.php', 'timeslotmanager');
    }
}
