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
        Schema::create('bahan_bakus', function (Blueprint $table) {
            //$table->id();
            $table->string('Kode_bahan',7);
            $table->string('Nama_bahan',25);
            $table->enum('Status',['Banyak','Sedikit','Kurang']);
            $table->string('Total_Produk');
            $table->primary('Kode_bahan'); // INI JADI PRIMARY KEY
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bahan_bakus');
    }
};
