<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    protected $fillable = [ 'Nama_supplier', 'Harga_menu', 'Deskripsi','GambarMenu'];
    protected $table = 'Produks';
    protected $primaryKey = 'id';

    public $incrementing = false;
    public $timestamps = true;
}
