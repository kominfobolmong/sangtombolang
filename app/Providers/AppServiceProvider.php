<?php

namespace App\Providers;

use App\Models\Contact;
use Illuminate\Support\ServiceProvider;

use App\Models\Profile;


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
        $kontak = Contact::first();
        $namakecamatan = Profile::latest()->get();
        View()->share('namakecamatan', $namakecamatan);
        View()->share('kontak', $kontak);
    }
}
