<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfilModel extends Model
{
    protected $table = "profil";
    protected $fillable = [
        'id',
        'email',
        'telepon',
        'facebook',
        'twitter',
        'instagram',
        'youtube',
        'whatsapp',
        'about_us',
        'foto'
    ];

    public $incrementing = false;
}
