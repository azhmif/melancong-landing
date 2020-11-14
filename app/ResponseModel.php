<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResponseModel extends Model
{
    protected $table = "response";
    protected $fillable = [
        'id_response',
        'nama',
        'pekerjaan',
        'komentar',
        'bintang',
        'foto',
    ];

    public $incrementing = false;
}
