<?php

namespace App\Filament\Widgets;

use App\Models\CertificationCode;
use App\Models\CertificationList;
use App\Models\daftarpeserta;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Hamcrest\Description;
use NunoMaduro\Collision\Adapters\Phpunit\State;

class Peserta extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        return [

            Stat::make('Total Peserta Terdaftar', daftarpeserta::count())
            ->description('Jumlah seluruh peserta sertifikasi aktif')
            ->descriptionIcon('heroicon-m-user-group') 
            ->color('success') 
            ->chart([7, 3, 5, 2, 10, 4, daftarpeserta::count()]), 

            stat::make('Total Certification List', CertificationList::count())
            ->description('Total sertifikasi profesi')
            ->descriptionIcon('heroicon-m-clipboard-document-list')
            ->color('success')
            ->chart([1,2,3,4,5,10, CertificationList::count()]),

            Stat::make('Total Peserta terverifikasi', CertificationCode::count())
            ->description('Jumlah Seluruh Peserta yang Terverifikasi')
            ->descriptionIcon('heroicon-m-check')
            ->color('success')
            ->chart([0,1,4,2, CertificationCode::count()])
            
           
        ];
    }
}
