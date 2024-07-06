<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\SystemInfo;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    
        $app_name = SystemInfo::where('meta_name', 'app_name')->first()->meta_value;
        $app_version = SystemInfo::where('meta_name', 'app_version')->first()->meta_value;
        $app_logo = SystemInfo::where('meta_name', 'app_logo')->first()->meta_value;

        $data = [
            'app_name' =>  $app_name,
            'app_version' => $app_version,
            'app_logo' => $app_logo
        ];
    
        view()->share('appData', $data);
    }
}
