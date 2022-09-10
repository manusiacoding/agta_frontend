<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_transaksi';

    protected $table = 'transactions';
    protected $fillable = [
        'id_transaksi',
        'id_user',
        'id_province',
        'id_city',
        'id_subdistrict',
        'alamat',
        'shipping_origin',
        'shipping_originType',
        'shipping_destination',
        'shipping_destinationType',
        'shipping_weight',
        'shipping_courier',
        'shipping_courier_name',
        'shipping_service',
        'shipping_description',
        'shipping_value',
        'shipping_etd',
        'shipping_note',
        'delivery_status',
        'no_resi',
        'total_berat',
        'total_harga',
        'bukti_transfer',
        'status',
        'status_rating',
        'catatan'
    ];

    protected $casts = [
        'id_transaksi' => 'integer',
        'id_user' => 'integer',
        'id_province' => 'integer',
        'id_city' => 'integer',
        'id_subdistrict' => 'integer',
        'shipping_origin' => 'integer',
        'shipping_destination' => 'integer',
        'shipping_weight' => 'integer',
        'shipping_value' => 'integer',
        'total_berat' => 'integer',
        'total_harga' => 'integer',
        'status' => 'integer',
        'status_rating' => 'integer',
    ];
}
