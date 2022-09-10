<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_transaksi_detail';

    protected $table = 'transaction_detail';
    protected $fillable = [
        'id_transaksi_detail',
        'id_transaksi',
        'id_user',
        'id_produk',
        'id_model_produk',
        // 'nama_produk',
        'nama_model',
        'ukuran_produk',
        'berat_produk',
        'total_berat_produk',
        'gambar_produk',
        'harga_produk',
        'jumlah_produk',
        'total_harga',
        'status_rating',
        'bintang_rating',
        'deskripsi_rating'
    ];

    protected $casts = [
        'id_transaksi_detail' => 'integer',
        'id_transaksi' => 'integer',
        'id_user' => 'integer',
        'id_produk' => 'integer',
        'id_model_produk' => 'integer',
        'berat_produk' => 'integer',
        'total_berat_produk' => 'integer',
        'harga_produk' => 'integer',
        'jumlah_produk' => 'integer',
        'total_harga' => 'integer',
        'status_rating' => 'integer',
        'bintang_rating' => 'integer',
    ];
}
