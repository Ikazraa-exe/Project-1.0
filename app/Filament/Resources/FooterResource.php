<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FooterResource\Pages;
use App\Filament\Resources\FooterResource\RelationManagers;
use App\Models\Footer;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FooterResource extends Resource
{
    protected static ?string $model = Footer::class;

    protected static ?string $navigationIcon = 'heroicon-s-cog-6-tooth';

    protected static ?string $navigationLabel = 'Pengaturan Web';

    protected static ?string $pluralModelLabel = 'Pengaturan Web';

    // Mengubah urutan navigasi
    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('email')
                    ->required()
                    ->email(),
                Forms\Components\TextInput::make('facebook')
                    ->required()
                    ->url(),
                Forms\Components\TextInput::make('instagram')
                    ->required()
                    ->url(),
                Forms\Components\TextInput::make('youtube')
                    ->required()
                    ->url(),
                Forms\Components\TextInput::make('phone_fax')
                    ->label('Telepon')
                    ->required(),
                Forms\Components\TextInput::make('whatsapp')
                    ->required(),
                Forms\Components\Textarea::make('address')
                    ->label('Alamat Kantor')
                    ->columnspan('full')
                    ->required(),
                Forms\Components\Textarea::make('google_maps_embed')
                    ->label('Google Maps')
                    ->columnspan('full')
                    ->required()
                    ->placeholder('Tempelkan Link Iframe Google Mapsnya Disini!')
                    ->rows(5)
                    ->maxlength(555),
                Forms\Components\Textarea::make('working_hours')
                    ->label('Jam Kerja Kantor')
                    ->columnspan('full')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('address')
                ->label('Alamat Kantor'),
                Tables\Columns\TextColumn::make('phone_fax')
                ->label('Telepon'),
                Tables\Columns\TextColumn::make('whatsapp'),
                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Diperbarui pada')
                    ->dateTime(),
            ])
            ->filters([
                //F
            ])
            ->actions([
                Tables\Actions\EditAction::make()
                ->label('Ubah'),
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
            'index' => Pages\ListFooters::route('/'),
            // 'create' => Pages\CreateFooter::route('/create'),
            // 'edit' => Pages\EditFooter::route('/{record}/edit'),
        ];
    }
}
