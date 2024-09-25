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
        Schema::create('pegawais', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nrp');
            $table->string('jabatan');
            $table->string('posisi');
            $table->string('pangkat_dan_golongan');
            $table->string('tempat_tanggal_lahir');
            $table->string('agama');
            $table->string('lhkpn_asn')->nullable();
            $table->string('kategori_pegawai');
            $table->string('foto');
            $table->json('pendidikan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pegawais');
    }
};