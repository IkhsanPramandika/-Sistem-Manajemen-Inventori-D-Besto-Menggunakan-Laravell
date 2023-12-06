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
        Schema::create('info_pengiriman_suppliers', function (Blueprint $table) {
            $table->id();
            $table->string('Nama_bahan');
            $table->enum('Status',['Selesai','Pengiriman','Gagal']);
            $table->string('Total_produk');
            $table->string('Alamat_pengiriman');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('info_pengiriman_suppliers');
    }
};
