<?php

namespace App\Filament\Resources\Pengaduans\Schemas;

use App\Models\Pengaduan;
use Dom\Text;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class PengaduanForm
{

    protected static ?string $model = Pengaduan::class;

    protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-bottom-center-text';
    protected static ?string $navigationGroup = 'Layanan Desa';
    protected static ?string $navigationLabel = 'Pengaduan Masyarakat';
    protected static ?string $modelLabel = 'Pengaduan';
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama_lengkap')
                    ->label('Nama Lengkap')
                    ->disabled(),
                TextInput::make('nik')
                    ->label('NIK')
                    ->disabled(),
                TextInput::make('email')
                    ->label('Email')
                    ->disabled(),
                TextInput::make('telepon')
                    ->label('Telepon')
                    ->disabled(),
                Select::make('kategori')
                    ->options([
                        'Infrastruktur Desa' => 'Infrastruktur Desa',
                        'Lingkungan Hidup' => 'Lingkungan Hidup',
                        'Masalah Sosial' => 'Masalah Sosial',
                        'Pendidikan Masyarakat' => 'Pendidikan Masyarakat',
                        'Keamanan Masyarakat' => 'Keamanan Masyarakat',
                        'Lainnya' => 'Lainnya',
                    ])
                    ->label('Kategori')
                    ->disabled(),
                Textarea::make('isi_pengaduan')
                    ->label('Isi Pengaduan')
                    ->disabled(),
                FileUpload::make('lampiran')
                    ->label('Lampiran')
                    ->disabled(),
                Select::make('status')
                    ->label('Status Pengaduan')
                    ->options([
                        'Pending' => 'Pending',
                        'Diproses' => 'Diproses',
                        'Selesai' => 'Selesai',
                    ])
                    ->required()
                    ->native(false),


            ]);
    }
}
