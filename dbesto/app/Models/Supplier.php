<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;
    protected $fillable = [ 'Nama_menu', 'Nomor_telepon', 'Alamat','Nama_produk'];
    protected $table = 'suppliers';
    protected $primaryKey = 'id';

    public $incrementing = false;
    public $timestamps = true;
}
