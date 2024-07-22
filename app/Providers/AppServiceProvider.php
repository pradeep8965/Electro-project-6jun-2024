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
        $customer_care_no1 = SystemInfo::where('meta_name', 'customer_care_no1')->first()->meta_value;
        $customer_care_no2 = SystemInfo::where('meta_name', 'customer_care_no2')->first()->meta_value;
        $store_contact_info = SystemInfo::where('meta_name', 'store_contact_info')->first()->meta_value;
        
        $social_fb_url = SystemInfo::where('meta_name', 'social_fb_url')->first()->meta_value;
        $social_google_url = SystemInfo::where('meta_name', 'social_google_url')->first()->meta_value;
        $social_x_url = SystemInfo::where('meta_name', 'social_x_url')->first()->meta_value;
        $social_github_url = SystemInfo::where('meta_name', 'social_github_url')->first()->meta_value;

        $data = [
            'app_name' => $app_name,
            'app_version' => $app_version,
            'app_logo' => $app_logo,
            'customer_care_no1' => $customer_care_no1,
            'customer_care_no2' => $customer_care_no2,
            'store_contact_info' => $store_contact_info,
            'social_fb_url' => $social_fb_url,
            'social_google_url' => $social_google_url,
            'social_x_url' => $social_x_url,
            'social_github_url' => $social_github_url
        ]; 
    
        view()->share('appData', $data);
    }
}
