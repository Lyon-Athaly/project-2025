<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\KlinikResource\Pages;
use App\Filament\Admin\Resources\KlinikResource\RelationManagers;
use App\Models\Klinik;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\TextArea;
use Filament\TextInput;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;


class KlinikResource extends Resource
{
    protected static ?string $model = Klinik::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form->schema([
           Forms\Components\TextInput::make('kode_klinik')
                ->label('Kode Klinik')
                ->rule('regex:/^[A-Z]{1,3}$/') // Maksimal 3 huruf kapital
                ->maxLength(3)
                ->required(),

            Forms\Components\TextInput::make('nama')
                ->label('Nama Klinik')
                ->required()
                ->maxLength(255),

            Forms\Components\TextInput::make('telepon')
                ->label('Nomor Telepon')
                ->tel()
                ->maxLength(15),

            Forms\Components\TextInput::make('jumlah_pasien')
                ->label('Jumlah Pasien')
                ->disabled()
                ->dehydrated(),
                    ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('kode_klinik')
                    ->label('Kode')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('nama')
                    ->label('Nama Klinik')
                    ->searchable(),

                Tables\Columns\TextColumn::make('telepon')
                    ->label('Telepon')
                    ->toggleable(),

                Tables\Columns\TextColumn::make('jumlah_pasien')
                    ->label('Jumlah Pasien')
                    ->badge()
                    ->color(fn($state) => $state > 50 ? 'danger' : ($state > 20 ? 'warning' : 'success')),
            ])
            ->defaultSort('kode_klinik')

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
