<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BahanBaku extends Model
{
    use HasFactory;
    
    protected $fillable = ['Kode_bahan', 'Nama_bahan', 'Status', 'Total_Produk'];
    protected $table = 'bahan_bakus';
    protected $primaryKey = 'Kode_bahan';

    public $incrementing = false;
    public $timestamps = true;
}
