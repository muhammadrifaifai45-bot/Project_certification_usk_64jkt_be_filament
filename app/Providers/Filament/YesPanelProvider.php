<?php

namespace App\Providers\Filament;

use App\Filament\Widgets\Peserta;
use BezhanSalleh\FilamentShield\FilamentShieldPlugin;
use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\AuthenticateSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Pages\Dashboard;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\Widgets\AccountWidget;
use Filament\Widgets\FilamentInfoWidget;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Filament\Forms\Components\TextInput; // Tambahkan import ini
use Illuminate\Validation\Rules\Password;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;

use function Laravel\Prompts\password;

class YesPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('yes')
            ->path('yes')
            ->brandlogo(asset('bnsp.png'))
            ->brandLogoHeight('5.5rem')
            ->registration()
            ->login()
            ->registration()
            ->spa(hasPrefetching:true)
            ->colors([
                'primary' => '#790D16',
            ])
            ->bootUsing(function () {
                TextInput::configureUsing(function (TextInput $component) {
                    
                    if ($component->getName() === 'password') {                                              
                        $isRegisterPage = str_contains(request()->url(), 'register') || 
                                          str_contains(request()->header('referer', ''), 'register');
            
                        if ($isRegisterPage) {
                            $component
                                ->minLength(8)
                                ->regex('/^(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).+$/')
                                ->validationMessages([
                                    'min' => 'Password tidak boleh kurang dari 8 karakter.',
                                    'regex' => 'Password harus mengandung minimal 1 huruf kapital, 1 angka, dan 1 karakter( @, #, $, !, _).'
                                ]);
                        }
                    }
                });
            })
            
                        
                
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\Filament\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\Filament\Pages')
            ->pages([
                Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\Filament\Widgets')
            ->widgets([
                Peserta::class,
                AccountWidget::class,
                // FilamentInfoWidget::class,
            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->plugins([
                FilamentShieldPlugin::make(),
            ])
            ->authMiddleware([
                Authenticate::class,
            ]);
    }
}
