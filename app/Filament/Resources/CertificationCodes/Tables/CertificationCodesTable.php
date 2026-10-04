<?php

namespace App\Filament\Resources\CertificationCodes\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Model;

class CertificationCodesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('daftarpeserta.nama_peserta')
                    ->label('Nama Peserta')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('certification_code')
                    ->searchable(),
                TextColumn::make('status')
                    ->formatStateUsing(fn(string $state): string =>match($state)
                    {
                        'Antrian' => 'Data Dalam Antrian',
                        'Verifikasi' => 'Data Dalam Verifikasi petugas ',
                        'DataTerverifikasi' => 'Berhasil verifikasi',                    
                    })
                    ->color(fn(string $state): string  =>match ($state){
                        'Antrian' => 'info',
                        'Verifikasi' => '#FFCB56',
                        'DataTerverifikasi' => 'success'
                    })
                                
                     ->badge(),
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
                ->modalHeading(fn(Model $record) => "Apakah Anda yakin ingin menghapus Code data: {$record->daftarpeserta->nama_peserta}")
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
