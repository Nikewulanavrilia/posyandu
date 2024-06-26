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
        Schema::create('orang_tua', function (Blueprint $table) {
            $table->string('nik_ibu')->primary();
            $table->string('nama_ibu');
            $table->string('tempat_lahir_ibu');
            $table->string('tanggal_lahir_ibu');
            $table->string('gol_darah_ibu');
            $table->string('nik_ayah');
            $table->string('nama_ayah');
            $table->string('alamat');
            $table->integer('telepon');
            $table->string('email_orang_tua')->unique();
            $table->string('password_orang_tua');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orang_tua');
    }
};
