<?php

namespace App\Filament\Resources;

use App\Models\Berita;
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
use App\Filament\Resources\BeritaResource\Pages;

class BeritaResource extends Resource
{
    protected static ?string $model = Berita::class;
    protected static ?string $navigationIcon = 'heroicon-o-newspaper';

    // Mengubah label navigasi di sidebar
    protected static ?string $navigationLabel = 'Berita Dilmil';

    protected static ?string $pluralModelLabel = 'Daftar Berita Dilmil';

    // Mengubah urutan navigasi
    protected static ?int $navigationSort = 5;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('judul')
                    ->label('Judul Berita')
                    ->autofocus()
                    ->columnspan('full')
                    ->Placeholder('Masukkan Judul Berita')
                    ->required()
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
                    ->imageResizeMode('cover')
                    ->imageCropAspectRatio('16:9')
                    ->imageResizeTargetWidth('1920')
                    ->imageResizeTargetHeight('1080')
                    ->columnspan('full')
                    ->placeholder('Klik atau Seret Gambar Disini')
                    ->directory('berita-thumbnails'),
                Forms\Components\RichEditor::make('konten')
                    ->placeholder('Masukkan Konten Berita Disini...')
                    ->columnspan('full')
                    ->label('Konten Berita')
                    ->disableToolbarButtons([
                        'codeblock'
                    ])
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
                    ->limit(20)
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
            'index' => Pages\ListBeritas::route('/'),
            'create' => Pages\CreateBerita::route('/create'),
            // 'edit' => Pages\EditBerita::route('/{record}/edit'),
        ];
    }
}
