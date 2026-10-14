<?php

namespace App\Filament\Resources\DaftarPesertas;

use App\Filament\Resources\DaftarPesertas\Pages\CreateDaftarPeserta;
use App\Filament\Resources\DaftarPesertas\Pages\EditDaftarPeserta;
use App\Filament\Resources\DaftarPesertas\Pages\ListDaftarPesertas;
use App\Filament\Resources\DaftarPesertas\Pages\ViewDaftarPeserta;
use App\Filament\Resources\DaftarPesertas\Schemas\DaftarPesertaForm;
use App\Filament\Resources\DaftarPesertas\Schemas\DaftarPesertaInfolist;
use App\Filament\Resources\DaftarPesertas\Tables\DaftarPesertasTable;
use App\Models\DaftarPeserta;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;
use UnitEnum;

class DaftarPesertaResource extends Resource
{
    protected static ?string $model = DaftarPeserta::class;
    protected static ?string $navigationLabel = "Daftar Peserta";

    protected static ?string $pluralModelLabel = "Daftar Peserta"; 

    protected static string|UnitEnum| null $navigationGroup = "Certification Management";
    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-identification';
    protected static string|BackedEnum|null $activeNavigationIcon = 'heroicon-s-identification';

    protected static ?string $recordTitleAttribute = 'id';

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery();
    }

    public static function form(Schema $schema): Schema
    {
        return DaftarPesertaForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return DaftarPesertaInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return DaftarPesertasTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListDaftarPesertas::route('/'),
            'create' => CreateDaftarPeserta::route('/create'),
            'view' => ViewDaftarPeserta::route('/{record}'),
            'edit' => EditDaftarPeserta::route('/{record}/edit'),
        ];
    }
}
