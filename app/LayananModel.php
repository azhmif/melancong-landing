<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LayananModel extends Model
{
    protected $table = "layanan";
    protected $fillable = [
        'id_layanan',
        'nama_layanan',
        'jenis_layanan',
        'keterangan',
        'harga',
        'diskon',
    ];

    public $incrementing = false;
}
