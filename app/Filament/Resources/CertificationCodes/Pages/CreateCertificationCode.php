<?php

namespace App\Filament\Resources\CertificationCodes\Pages;

use App\Filament\Resources\CertificationCodes\CertificationCodeResource;
use Filament\Resources\Pages\CreateRecord;

class CreateCertificationCode extends CreateRecord
{
    protected static string $resource = CertificationCodeResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        
        $data['certification_code'] = 'BNSP-' . now()->format('Ymd') . '-' . strtoupper(str()->random(2));

        return $data;
    }




    
}

