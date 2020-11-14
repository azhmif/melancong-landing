<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JumbotronModel extends Model
{
    protected $table = "jumbotron";
    protected $fillable = [
        'id_layanan',
        'judul',
        'kata',
        'foto',
    ];

    public $incrementing = false;
}
