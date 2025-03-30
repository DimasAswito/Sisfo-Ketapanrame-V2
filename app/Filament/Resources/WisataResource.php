<?php

namespace App\Filament\Resources;

use App\Filament\Resources\WisataResource\Pages;
use App\Filament\Resources\WisataResource\RelationManagers;
use App\Models\Wisata;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class WisataResource extends Resource
{
    protected static ?string $model = Wisata::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama_wisata')
                    ->required(),
                Forms\Components\Textarea::make('deskripsi_wisata')
                    ->required(),
                Forms\Components\FileUpload::make('foto_wisata')
                    ->label('Foto Wisata')
                    ->image()
                    ->disk('public')
                    ->directory('wisata')
                    ->required(),
                    Forms\Components\TextInput::make('wa_wisata')
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
                Tables\Columns\TextColumn::make('nama_wisata')
                    ->label('Nama Wisata')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('deskripsi_wisata')
                    ->label('Deskripsi Wisata'),
                Tables\Columns\ImageColumn::make('foto_wisata')
                    ->label('Foto Wisata'),
                Tables\Columns\TextColumn::make('wa_wisata')
                    ->label('WhatsApp Wisata')
                    ->url(fn (Wisata $record): string => 'https://wa.me/' . preg_replace('/^0/', '+62', $record->wa_wisata))
                    ->openUrlInNewTab()
                    ->formatStateUsing(fn ($state) => preg_replace('/^0/', '+62', $state)),
                
                    
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListWisatas::route('/'),
            'create' => Pages\CreateWisata::route('/create'),
            'edit' => Pages\EditWisata::route('/{record}/edit'),
        ];
    }
}