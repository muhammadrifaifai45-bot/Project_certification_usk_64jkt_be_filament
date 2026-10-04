<?php

namespace App\Filament\Resources\DaftarPesertas\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Model;

class DaftarPesertasTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('CertificationList.code')
                    ->label("sertifikasi yang di pilih")
                    ->numeric()
                    ->sortable(),
                TextColumn::make('nama_peserta')
                    ->searchable(),
                TextColumn::make('nik')
                    ->searchable(),
                TextColumn::make('gender')
                    ->badge(),
                ImageColumn::make('surat_image')
                     ->label('Surat Persetujuan'),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
                DeleteAction::make()
                ->requiresConfirmation()
                ->modalHeading(fn(Model $record) => "Apakah Anda yakin ingin menghapus Data peserta: {$record->nama_peserta}")
                ->modalDescription("Data yang telah di hapus tidak dapat di pulihkan")
                ->modalSubmitActionLabel("Hapus Data")
                ->modalCancelActionLabel("Batal Menghapus Data")
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
