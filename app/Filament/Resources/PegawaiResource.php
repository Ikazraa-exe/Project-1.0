<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PegawaiResource\Pages;
use App\Filament\Resources\PegawaiResource\RelationManagers;
use App\Models\Pegawai;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PegawaiResource extends Resource
{
    protected static ?string $model = Pegawai::class;

    protected static ?string $navigationIcon = 'heroicon-s-user-group';

    // Mengubah label navigasi di sidebar
    protected static ?string $navigationLabel = 'Data Pegawai';

    protected static ?string $pluralModelLabel = 'Daftar Data Pegawai';

    // Mengubah urutan navigasi
    protected static ?int $navigationSort = 4;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama')
                    ->placeholder('Masukkan nama pegawai...')
                    ->required(),
                Forms\Components\TextInput::make('pangkat_dan_golongan')
                    ->label('Pangkat')
                    ->placeholder('Masukkan pangkat dan golongan pegawai...')
                    ->required(),
                Forms\Components\TextInput::make('nrp')
                    ->placeholder('Masukkan NRP pegawai...')
                    ->label('NRP')
                    ->required(),
                Forms\Components\TextInput::make('jabatan')
                    ->placeholder('Masukkan jabatan pegawai...')
                    ->required(),
                Forms\Components\TextInput::make('tempat_tanggal_lahir')
                    ->placeholder('Masukkan tempat dan tanggal lahir pegawai...')
                    ->required(),
                Forms\Components\TextInput::make('agama')
                    ->placeholder('Masukkan Agama pegawai...')
                    ->required(),
                Forms\Components\Select::make('posisi')
                    ->placeholder('Pilih posisi pegawai')
                    ->options([
                        'KEPALA PENGADILAN MILITER I-05 PONTIANAK' => 'KEPALA PENGADILAN MILITER I-05 PONTIANAK',
                        'WAKIL KEPALA PENGADILAN MILITER I-05 PONTIANAK' => 'WAKIL KEPALA PENGADILAN MILITER I-05 PONTIANAK',
                        'POKKIMMIL' => 'POKKIMMIL',
                        'HAKIM MILITER' => 'HAKIM MILITER',
                        'Pejabat Kesekretariatan' => 'Pejabat Kesekretariatan',
                        'Pejabat Kepaniteraan' => 'Pejabat Kepaniteraan',
                        'PANITERA MUDA HUKUM' => 'PANITERA MUDA HUKUM',
                        'Staff' => 'Staff',
                        'PPNPN' => 'PPNPN',
                    ])
                    ->required(),
                Forms\Components\Select::make('kategori_pegawai')
                    ->placeholder('Pilih kategori pegawai')
                    ->label(' Kategori')
                    ->options([
                        'Pimpinan' => 'Pimpinan',
                        'Hakim Militer' => 'Hakim Militer',
                        'Personil Militer' => 'Personil Militer',
                        'Pejabat Kesekretariatan' => 'Pejabat Kesekretariatan',
                        'Pejabat Kepaniteraan' => 'Pejabat Kepaniteraan',
                        'Staff' => 'Staff',
                        'PPNPN' => 'PPNPN',
                    ])
                    ->required(),
                Forms\Components\TextInput::make('lhkpn_asn')
                    ->placeholder('Masukkan LHKPN/ASN pegawai...')
                    ->label('LHKPN/ASN')
                    ->url()
                    ->columnspan('full')
                    ->placeholder('Masukkan Link PDF...'),
                Forms\Components\FileUpload::make('foto')
                    ->columnspan('full')
                    ->placeholder('Klik atau Seret gambar disini')
                    ->directory('pegawai-thumbnails'),
                Forms\Components\Repeater::make('pendidikan')
                    ->columnspan('full')
                    ->schema([
                        Forms\Components\TextInput::make('jenjang')->required()
                            ->placeholder('Masukkan jenjang... (Contoh, SD, SMP, dst)'),
                        Forms\Components\TextInput::make('institusi')
                            ->placeholder('Masukkan nama institusi...'),
                        Forms\Components\TextInput::make('tahun')
                            ->placeholder('Masukkan tahun kelulusan...'),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('foto')
                    ->label('Foto')
                    ->width(80)
                    ->height(110),
                Tables\Columns\TextColumn::make('nama'),
                Tables\Columns\TextColumn::make('pangkat_dan_golongan')
                ->label('Pangkat'),
                // Tables\Columns\TextColumn::make('nrp')
                // ->label('NRP'),
                Tables\Columns\TextColumn::make('kategori_pegawai')
                ->label('Kategori'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\DeleteAction::make()
                ->label('Hapus'),
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
            'index' => Pages\ListPegawais::route('/'),
            'create' => Pages\CreatePegawai::route('/create'),
            // 'edit' => Pages\EditPegawai::route('/{record}/edit'),
        ];
    }
}
