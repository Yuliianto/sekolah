<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ciclassusers extends Model
{
    //
    protected $table= 'users';
    protected $connection = 'CI-class';
    protected $fillable = [
            'username',
            'email',
            'password',
            'is_dosen'
        ];
}
