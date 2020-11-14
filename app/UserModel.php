<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    use Authenticatable;
    protected $table = "users";
    protected $fillable = [
        'id',
        'username',
        'email',
        'password',
        'remember_token',
    ];

    public $incrementing = false;
    public $timestamps = false;
    protected $guarded = [];
    protected $hidden = [
        'password',
    ];
}
