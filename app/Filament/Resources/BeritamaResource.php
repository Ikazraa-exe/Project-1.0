<?php

namespace App\Filament\Resources;

use App\Models\Beritama;
use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Hidden;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\ImageColumn;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\BeritamaResource\Pages;

class BeritamaResource extends Resource
{
    protected static ?string $model = Beritama::class;

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';

    // Mengubah label navigasi di sidebar
    protected static ?string $navigationLabel = 'Berita Mahkamah Agung';

    protected static ?string $pluralModelLabel = 'Daftar Berita Mahkamah Agung';

    // Mengubah urutan navigasi
    protected static ?int $navigationSort = 6;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('judul')
                    ->label('Judul Berita Mahkamah Agung')
                    ->autofocus()
                    ->Placeholder('Masukkan Judul Berita')
                    ->required()
                    ->columnspan('full')
                    ->maxLength(255),
                TextInput::make('penulis')
                    ->default(fn () => auth()->user()->name)
                    ->disabled()
                    ->dehydrated(),
                DatePicker::make('tanggal')
                    ->required(),
                Hidden::make('user_id')
                    ->default(fn () => auth()->id()),
                FileUpload::make('thumbnail')
                    ->image()
                    ->placeholder('Klik atau Seret Gambar Disini')
                    ->columnspan('full')
                    ->directory('berita-ma-thumbnails'),
                Forms\Components\RichEditor::make('konten')
                    ->Placeholder('Masukkan Konten Berita Disini...')
                    ->label('Konten Berita')
                    ->columnspan('full')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('thumbnail')
                    ->height(100),
                TextColumn::make('judul')
                    ->limit(20)  // Batasi judul hingga 50 karakter
                    ->searchable()
                    ->tooltip(function (TextColumn $column): ?string {
                        $state = $column->getState();
                        if (strlen($state) <= 20) {
                            return null;
                        }
                        return $state;
                    }),
                TextColumn::make('tanggal')->date(),
                TextColumn::make('penulis')
                    ->getStateUsing(fn ($record) => $record->user->name),
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

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBeritamas::route('/'),
            'create' => Pages\CreateBeritama::route('/create'),
            'edit' => Pages\EditBeritama::route('/{record}/edit'),
        ];
    }
}
