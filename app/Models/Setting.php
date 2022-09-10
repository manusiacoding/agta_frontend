<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_setting';
    protected $table = 'settings';

    protected $fillable = [
        'id_setting',
        'service_kurir_agta_sameday',
        'harga_kurir_agta_sameday',
        'estimasi_kurir_agta_sameday',
        'service_kurir_agta_cargo',
        'harga_kurir_agta_cargo',
        'estimasi_kurir_agta_cargo',
        'link_shopee',
        'link_tentang_kami',
        'link_whatsapp',
    ];

    protected $casts = [
        'id_setting' => 'integer',
        'harga_kurir_agta_sameday' => 'integer',
        'harga_kurir_agta_cargo' => 'integer',
    ];
}
