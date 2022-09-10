<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model {

    use HasFactory;

    protected $primaryKey = 'id_produk';

    protected $fillable = [
        'nama_produk', 'slug', 'harga_produk', 'deskripsi_produk', 'jenis_produk', 'created_at', 'updated_at'
    ];
}
