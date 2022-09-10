<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_chat';
    protected $table = 'chats';

    protected $fillable = [
        'id_chat',
        'id_pengirim',
        'id_penerima',
        'tipe',
        'pesan'
    ];

    protected $casts = [
        'id_chat' => 'integer',
        'id_pengirim' => 'integer',
        'id_penerima' => 'integer',
        'tipe' => 'integer',
    ];
}
