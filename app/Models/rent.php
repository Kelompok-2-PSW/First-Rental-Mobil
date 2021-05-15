<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rent extends Model
{

    protected $table = 'rent';

    protected $fillable = [
        'nama_pemesanan', 'kode_mobil', 'nama_mobil', 'tanggal_pemesanan', 'alamat', 'no_telephone',
        ];
}
