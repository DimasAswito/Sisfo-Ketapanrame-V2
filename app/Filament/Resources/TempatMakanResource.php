<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TempatMakanResource\Pages;
use App\Filament\Resources\TempatMakanResource\RelationManagers;
use App\Models\TempatMakan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TempatMakanResource extends Resource
{
    protected static ?string $model = TempatMakan::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama_tempatMakan')
                ->required(),
            Forms\Components\Textarea::make('deskripsi_tempatMakan')
                ->required(),
            Forms\Components\FileUpload::make('foto_tempatMakan')
                ->label('Foto Tempat Makan')
                ->image()
                ->disk('public')
                ->directory('tempatMakan')
                ->required(),
            Forms\Components\TextInput::make('wa_tempatMakan')
                ->label('Nomor WhatsApp')
                ->required()
                ->numeric()
                ->prefixIcon('heroicon-o-phone')
                ->rule('regex:/^0\d{9,12}$/') // Hanya menerima nomor yang diawali '0' dengan panjang 10-13 digit
                ->hint('Masukkan nomor tanpa +62, cukup awali dengan 0'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama_tempatMakan')
                    ->label('Nama Tempat Makan')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('deskripsi_tempatMakan')
                    ->label('Deskripsi Tempat Makan'),
                Tables\Columns\ImageColumn::make('foto_tempatMakan')
                    ->label('Foto Tempat Makan'),
                Tables\Columns\TextColumn::make('wa_tempatMakan')
                ->label('WhatsApp Tempat Makan')
                ->url(fn (TempatMakan $record): string => 'https://wa.me/' . preg_replace('/^0/', '+62', $record->wa_tempatMakan))
                ->openUrlInNewTab()
                ->formatStateUsing(fn ($state) => preg_replace('/^0/', '+62', $state)),
                
            ])
            ->filters([
                //
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
            'index' => Pages\ListTempatMakans::route('/'),
            'create' => Pages\CreateTempatMakan::route('/create'),
            'edit' => Pages\EditTempatMakan::route('/{record}/edit'),
        ];
    }
}