<?php

namespace App\Filament\Resources\Pengaduans\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class PengaduansTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nomor_tiket')
                    ->label('Kode Tiket')
                    ->searchable(),

                TextColumn::make('nama_lengkap')
                    ->label('Nama Lengkap')
                    ->searchable(),
                TextColumn::make('nik')
                    ->label('NIK')
                    ->searchable(),
                TextColumn::make('kategori')
                    ->label('Kategori'),
                TextColumn::make('isi_pengaduan')
                    ->label('Isi Pengaduan'),
                BadgeColumn::make('status')
                    ->label('Status')
                    ->colors([
                        'warning' => 'Pending',
                        'primary' => 'Diproses',
                        'success' => 'Selesai',
                    ]),
                TextColumn::make('created_at')
                    ->label('Tanggal Pengaduan')
                    ->dateTime('d M Y H:i')

            ])
            ->filters([
                //
            ])
            ->recordActions([

                ViewAction::make(),
                EditAction::make(),
                DeleteAction::make(),

            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
