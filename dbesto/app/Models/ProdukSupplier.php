<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProdukSupplier extends Model
{
    use HasFactory;
    protected $fillable = [ 'Nama_bahan', 'Total_bahan','Harga_bahan'];
    protected $table = 'produk_suppliers';
    protected $primaryKey = 'id';
    public $incrementing = false;
    public $timestamps = true;
}


