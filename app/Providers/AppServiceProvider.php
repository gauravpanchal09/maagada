<?php

namespace App\Providers;

use App\Models\AncTest;
use App\Models\InTest;
use App\Models\Patient;
use App\Models\PlTest;
use App\Observers\AncTestObserver;
use App\Observers\InTestObserver;
use App\Observers\PlTestObserver;
use App\Observers\PatientObserver;
use Illuminate\Support\ServiceProvider;

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
        AncTest::observe(AncTestObserver::class);
        InTest::observe(InTestObserver::class);
        PlTest::observe(PlTestObserver::class);
        Patient::observe(PatientObserver::class);
    }
}
