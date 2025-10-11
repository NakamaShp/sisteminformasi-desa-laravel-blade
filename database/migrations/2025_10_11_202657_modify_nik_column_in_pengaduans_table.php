<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('pengaduans', function (Blueprint $table) {
            // ubah kolom nik jadi string 16 karakter (bisa menampung NIK lengkap)
            $table->string('nik', 16)->change();
        });
    }

    public function down(): void
    {
        Schema::table('pengaduans', function (Blueprint $table) {
            // rollback ke tipe sebelumnya (bigInteger misalnya)
            $table->bigInteger('nik')->change();
        });
    }
};
