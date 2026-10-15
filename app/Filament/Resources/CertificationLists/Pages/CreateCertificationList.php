<?php

namespace App\Filament\Resources\CertificationLists\Pages;

use App\Filament\Resources\CertificationLists\CertificationListResource;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;
use GrahamCampbell\ResultType\Success;
use Override;

class CreateCertificationList extends CreateRecord
{
    protected static string $resource = CertificationListResource::class;

    #[Override]
    protected function getCreatedNotification(): ?Notification
    {
        return Notification::make()
        ->Success()
        ->icon('heroicon-o-check-circle')
        ->iconColor('succes')
        ->title('Sukses Menambahkan Certification List baru')
        ->body('Data berhasil di tambahkan')
        ->persistent();

    }

}
