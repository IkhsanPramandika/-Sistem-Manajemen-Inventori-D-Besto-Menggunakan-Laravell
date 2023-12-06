<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InfoPengirimanSupplier extends Model
{
    use HasFactory;
    protected $fillable = [ 'Nama_bahan', 'Total_Produk','Alamat_pengiriman'];
    protected $table = 'info_pengiriman_suppliers';
    protected $primaryKey = 'id';
    public $incrementing = false;
    public $timestamps = true;
}

