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
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id('Invoice');
            $table->string('Nama_kasir',25);
            $table->string('Nama_customer',25);
            $table->enum('jenis_layanan',['Take Away','Delivery']);
            $table->enum('cabang',['Panam','Rumbai','Sudirman','KH Ahmad Dahlan']);
            $table->enum('nama_menu',['Kentang Goreng','Burger','Ayam','Spaghetii']);
            $table->enum('jenis_pembayaran',['Shopepay','QRIS','Cash']);
            $table->enum('harga_menu',['8000','9000','10000','11000']);
            $table->int('qty');
            $table->string('Total_harga',225);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksis');
    }
};
