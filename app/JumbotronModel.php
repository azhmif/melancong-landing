<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JumbotronModel extends Model
{
    protected $table = "jumbotron";
    protected $fillable = [
        'id_jumbotron',
        'judul',
        'kata',
        'foto',
        'link1',
        'link2',
    ];

    public $incrementing = false;
}
