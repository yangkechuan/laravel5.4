<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')
        //          ->hourly();

        $schedule->exec('sh /data/ngx_openresty/nginx/html/ApiTest/start.sh')->hourly()->withoutOverlapping();
        $schedule->exec('cd /data/ngx_openresty/nginx/html/laravel && envoy run web')->everyTenMinutes()->withoutOverlapping();
        $schedule->exec('cd /data/ngx_openresty/nginx/html/laravel && envoy run api')->everyTenMinutes()->withoutOverlapping();
    }

    /**
     * Register the Closure based commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        require base_path('routes/console.php');
    }
}
