<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    protected $fillable = [ 'Nama_menu', 'Harga_menu','stok','Deskripsi'];
    protected $table = 'Produks';
    protected $primaryKey = 'id';
    public $incrementing = false;
    public $timestamps = true;
}
