<?php

namespace App\Filament\Resources\CertificationCodes\Pages;

use App\Filament\Resources\CertificationCodes\CertificationCodeResource;
use App\Models\CertificationCode;
use App\Models\daftarpeserta;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditCertificationCode extends EditRecord
{
    protected static string $resource = CertificationCodeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
    
    protected function mutateFormDataBeforeFill(array $data): array
    {
      $daftar  = $this->record->daftarpeserta;
      
      if($daftar){
        $data ['nik'] = $daftar->nik;
        $data ['gender'] = $daftar->gender;
        $data ['alamat'] = $daftar->alamat;
        $data ['surat_image'] = $daftar->surat_image;
      }
      return $data;
     
    }

}
