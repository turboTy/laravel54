<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength('191');

        /*Blade::directive('datetime', function($expression) {
            return "<?php echo ($expression)->format('Y-m-d H:i');?>";
        });*/

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
    
}
