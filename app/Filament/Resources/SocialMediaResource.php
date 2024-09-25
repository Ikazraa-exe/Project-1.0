<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SocialMediaResource\Pages;
use App\Models\SocialMedia;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Tables\Columns\TextColumn;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class SocialMediaResource extends Resource
{
    protected static ?string $model = SocialMedia::class;

    protected static ?string $navigationLabel = 'Media Sosial';

    protected static ?string $pluralModelLabel = 'Daftar Media Sosial';

    protected static ?string $navigationIcon = 'heroicon-o-share';

    protected static ?int $navigationSort = 8;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('judul')
                    ->required()
                    ->placeholder('Masukkan Judul Media Sosial Disini...')
                    ->autofocus()
                    ->columnspan('full')
                    ->maxLength(255),
                Forms\Components\TextInput::make('link')
                    ->required()
                    ->columnspan('full')
                    ->url()
                    ->placeholder('Masukkan Link Media Sosial Disini...')
                    ->maxLength(555),
                Forms\Components\FileUpload::make('thumbnail')
                    ->image()
                    ->placeholder('Klik atau Seret Gambar Disini')
                    ->columnspan('full')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('thumbnail')
                    ->width(100)
                    ->placeholder('Klik atau Seret Gambar Disini')
                    ->height(100),
                TextColumn::make('judul')
                ->limit(20)
                    ->searchable()
                    ->tooltip(function (TextColumn $column): ?string {
                        $state = $column->getState();
                        if (strlen($state) <= 20) {
                            return null;
                        }
                        return $state;
                    }),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make()
                ->label('Ubah'),
                Tables\Actions\DeleteAction::make()
                ->label('Hapus'),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSocialMedia::route('/'),
            'create' => Pages\CreateSocialMedia::route('/create'),
            // 'edit' => Pages\EditSocialMedia::route('/{record}/edit'),
        ];
    }
}
