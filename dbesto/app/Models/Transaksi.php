<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $fillable = ['Invoice', 'Nama_kasir', 'Nama_customer', 'Status', 'Total_harga'];
    protected $table = 'Transaksis';
    protected $primaryKey = 'Invoice';

    public $incrementing = false;
    public $timestamps = true;
}

