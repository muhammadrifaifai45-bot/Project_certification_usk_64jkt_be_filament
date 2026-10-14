<?php

namespace App\Providers;

use App\Models\CertificationList;
use App\Models\DaftarPeserta;
use App\Policies\CertificationListPolicy;
use App\Policies\DaftarPesertaPolicy;
use Filament\Forms\Components\TextInput;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

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
        Gate::policy(DaftarPeserta::class, DaftarPesertaPolicy::class);
        Gate::policy(CertificationList::class, CertificationListPolicy::class);
    
}
}
