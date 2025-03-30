<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PenginapanResource\Pages;
use App\Filament\Resources\PenginapanResource\RelationManagers;
use App\Models\Penginapan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PenginapanResource extends Resource
{
    protected static ?string $model = Penginapan::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
            Forms\Components\TextInput::make('nama_penginapan')
                ->required(),
            Forms\Components\Textarea::make('deskripsi_penginapan')
                ->required(),
            Forms\Components\FileUpload::make('foto_penginapan')
                ->label('Foto Penginapan')
                ->image()
                ->disk('public')
                ->directory('Penginapan')
                ->required(),
            Forms\Components\TextInput::make('wa_penginapan')
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
                Tables\Columns\TextColumn::make('nama_penginapan')
                    ->label('Nama Penginapan')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('deskripsi_penginapan')
                    ->label('Deskripsi Penginapan'),
                Tables\Columns\ImageColumn::make('foto_penginapan')
                    ->label('Foto Penginapan'),
                Tables\Columns\TextColumn::make('wa_penginapan')
                    ->label('WhatsApp Penginapan')
                    ->url(fn (Penginapan $record): string => 'https://wa.me/' . preg_replace('/^0/', '+62', $record->wa_penginapan))
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
            'index' => Pages\ListPenginapans::route('/'),
            'create' => Pages\CreatePenginapan::route('/create'),
            'edit' => Pages\EditPenginapan::route('/{record}/edit'),
        ];
    }
}