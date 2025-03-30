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
                ->tel()
                ->required(),
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
                    ->url(fn (TempatMakan $record): string => 'https://wa.me/' . $record->wa_wisata)
                    ->openUrlInNewTab()
                    ->formatStateUsing(fn ($state) => 'https://wa.me/' . $state),
                
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