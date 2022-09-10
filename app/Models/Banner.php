<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_banner';
    protected $table = 'banners';

    protected $fillable = [
        'id_banner',
        'id_produk',
        'gambar',
        'judul',
        'deskripsi'
    ];

    protected $casts = [
        'id_banner' => 'integer',
        'id_produk' => 'integer'
    ];
}
