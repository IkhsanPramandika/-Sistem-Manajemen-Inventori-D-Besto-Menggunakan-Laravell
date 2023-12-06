<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $fillable = ['Invoice', 'Nama_kasir', 'Nama_customer', 'jenis_layanan','cabang', 'nama_menu','jenis_pembayaran','harga_menu','qty','Total_harga'];
    protected $table = 'Transaksis';
    protected $primaryKey = 'Invoice';

    public $incrementing = false;
    public $timestamps = true;
}

