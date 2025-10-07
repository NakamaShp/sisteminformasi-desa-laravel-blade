<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pengaduans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->string('nik', 16)->unique();
            $table->string('email');
            $table->string('telepon');
            $table->string('kategori');
            $table->text('isi_pengaduan');
            $table->string('lampiran')->nullable();
            $table->string('nomor_tiket')->unique();
            $table->enum('status', ['Pending', 'Diproses', 'Selesai'])->default('Pending');
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengaduans');
    }
};
