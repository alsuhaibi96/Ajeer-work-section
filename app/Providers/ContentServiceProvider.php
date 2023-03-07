<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Models\footerAbout;
use App\Models\footerAddress;
use App\Models\footerPolicy;
use App\Models\footerServices;
class ContentServiceProvider extends ServiceProvider
{
    public $footer;

    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {

        $this->footer=footerServices::select('label','link')->get();
        view()->composer('partials.footer',function($view){
            $view->with(['footer'=>$this->footer]);
        });
    }
}
