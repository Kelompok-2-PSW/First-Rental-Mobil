<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class car extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_mobil',
        'no_mobil',
        'merk',
        'gambar',
        'harga',
        'STATUS',
    ];

    protected $primaryKey = 'id_mobil';

    public $timestamps = false;

    protected $table = 'mobil';
}
