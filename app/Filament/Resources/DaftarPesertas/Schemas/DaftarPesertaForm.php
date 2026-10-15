<?php

namespace App\Filament\Resources\DaftarPesertas\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class DaftarPesertaForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('certification_list_id')
                    ->label('List Certification')
                    ->relationship('CertificationList','daftar_sertifikasi')
                    ->required(),
                TextInput::make('nama_peserta')
                    ->required(),
                TextInput::make('nik')
                    ->label('NIK')
                    ->maxLength(16)
                    ->minLength(16)
                    ->validationMessages([
                        'min' => 'Harus  16 digit'
                    ])
                    ->required(),
                Select::make('gender')
                    ->label('jenis Kelamin')
                    ->options(['perempuan' => 'Perempuan', 'pria' => 'Pria'])
                    ->required(),
                Textarea::make('alamat')
                    ->required()
                    ->columnSpanFull(),
                FileUpload::make('surat_image')
                    ->label('Dokumen Pendukung (KTP/KK)')
                    ->image()
                    ->required(),
                    FileUpload::make('fotosertifikasi')
                    ->label('Dokumen Sertifikasi')
                    ->image()
                    ->required(),
                    FileUpload::make('fotoktp')
                    ->label('Dokumen Ktp')
                    ->image()
                    ->required(),
            ]);
    }
}
