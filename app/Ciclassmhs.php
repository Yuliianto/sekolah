<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ciclassmhs extends Model
{
    //
    protected $table= 'mahasiswa';
    protected $connection = 'CI-class';

    protected $fillable = ['nim',
				            'nama',
				            'ttl',
				            'gender',
				            'agama'];
}
