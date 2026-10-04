<?php

namespace App\Filament\Resources\CertificationLists\Tables;

use Filament\Actions\ActionGroup;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Model;

class CertificationListsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('daftar_sertifikasi')
                    ->searchable(),
                TextColumn::make('code')
                    ->searchable(),
                IconColumn::make('is_active')
                    ->boolean(),
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
                ActionGroup::make([
                ViewAction::make(),
                EditAction::make(),
                DeleteAction::make()
                ->requiresConfirmation()
                ->modalHeading(fn(Model $record) => "Hapus data {$record->daftar_sertifikasi}")
                ->modalDescription(fn(Model $record) => "Apakah anda Yakin ingin menghapus data {$record->daftar_sertifikasi}")
                ->modalSubmitActionLabel('Hapus Data')
                ->modalCancelActionLabel('Batal Menghapus Data')
                
                ])
                
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
