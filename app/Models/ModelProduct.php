<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ModelProduct extends Model {

    use HasFactory;

    protected $primaryKey = 'id_model';

    protected $table = 'modelproducts';
    protected $fillable = [
        'id',
        'id_model',
        'id_produk',
        'nama_model',
        'stok_produk',
        'ukuran_produk',
        'berat_produk',
        'gambar_produk',
    ];

    protected $casts = [
        'id' => 'integer',
        'id_model' => 'integer',
        'id_produk' => 'integer',
        'stok_produk' => 'integer',
        'ukuran_produk' => 'integer',
        'berat_produk' => 'integer',
    ];
}
