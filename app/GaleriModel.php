<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GaleriModel extends Model
{
    protected $table = "galeri";
    protected $fillable = [
        'id_galeri',
        'foto',
        'keterangan',
        'tipe'
    ];

    public $incrementing = false;
}
