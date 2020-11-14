<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PortofolioModel extends Model
{
    protected $table = "portofolio";
    protected $fillable = [
        'id_portofolio',
        'judul',
        'subjudul',
        'penjelasan',
        'foto',
    ];

    public $incrementing = false;
}
