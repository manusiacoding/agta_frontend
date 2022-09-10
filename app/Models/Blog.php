<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_blog';
    protected $table = 'blogs';

    protected $fillable = [
        'id_blog',
        'gambar',
        'deskripsi',
    ];

    protected $casts = [
        'id_blog' => 'integer',
    ];
}
