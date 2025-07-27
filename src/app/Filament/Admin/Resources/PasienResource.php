<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\PasienResource\Pages;
use App\Filament\Admin\Resources\PasienResource\RelationManagers;
use App\Models\Pasien;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Form\Components\TextColumn;
use Form\Components\BadgeColumn;
use Form\Components\Select;

class PasienResource extends Resource
{
    protected static ?string $model = Pasien::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('kode_pasien')
                ->label('Kode Pasien')
                ->rule('regex:/^[A-Z]{1,3}[0-9]{2,4}$/')
                ->maxLength(7)
                ->required(),

            Forms\Components\TextInput::make('nama')
                ->label('Nama Lengkap')
                ->required()
                ->maxLength(255),

            Forms\Components\TextInput::make('no_ktp')
                ->label('Nomor KTP')
                ->rule('regex:/^[0-9]{16}$/')
                ->maxLength(16)
                ->required(),

            Forms\Components\TextInput::make('jenis_kelamin')
                ->label('Jenis Kelamin')
                ->rule('regex:/^(L|P)$/')
                ->maxLength(1)
                ->required(),

            Forms\Components\TextInput::make('klinik_id')
                ->label('ID Klinik')
                ->disabled()
                ->dehydrated(),
                    ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('kode_pasien')
                ->label('Kode')
                ->searchable()
                ->sortable(),

            Tables\Columns\TextColumn::make('nama')
                ->label('Nama')
                ->searchable(),

            Tables\Columns\TextColumn::make('no_ktp')
                ->label('No KTP')
                ->copyable(),

            Tables\Columns\TextColumn::make('jenis_kelamin')
                ->label('J.K.')
                ->badge()
                ->color(fn($state) => $state === 'L' ? 'info' : 'pink'),

            Tables\Columns\TextColumn::make('klinik.nama')
                ->label('Klinik')
                ->searchable()
                ->sortable(),
            ])
            ->defaultSort('kode_pasien')
            ->filters([

            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
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
            
        ];
    }
}
