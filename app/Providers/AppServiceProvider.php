<?php

namespace App\Providers;

use App\Models\CertificationList;
use App\Models\DaftarPeserta;
use App\Models\User;
use App\Observers\UserObserver;
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
        User::observe(UserObserver::class);
        Gate::policy(DaftarPeserta::class, DaftarPesertaPolicy::class);
        Gate::policy(CertificationList::class, CertificationListPolicy::class);
    
}
}
