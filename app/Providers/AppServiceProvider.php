<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::directive('rupiah' , function ($expression) {
            return "Rp.<?php echo number_format($expression,2,',','.'); ?>";
        });
        Blade::directive('persen' , function ($expression) {
            return "<?php echo number_format($expression,2,',','.'); ?>";
        });
        Blade::directive('tanggal' , function ($expression) {
            return "<?php echo date_format($expression,'d/m/Y'); ?>";
        });
    }
}
