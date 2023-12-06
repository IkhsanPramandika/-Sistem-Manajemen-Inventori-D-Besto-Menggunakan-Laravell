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
        Schema::create('produk_suppliers', function (Blueprint $table) {
            $table->id();
            $table->string('Nama_bahan');
            $table->enum('Status',['Banyak','Sedikit','Kurang']);
            $table->string('Total_bahan');
            $table->string('Harga_bahan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produk_suppliers');
    }
};
