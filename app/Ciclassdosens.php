<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ciclassdosens extends Model
{
    //
    protected $connection = 'CI-class';
    protected $table= 'dosen';
    protected $fillable = ['nik',
				            'nama',
				            'ttl',
				            'gender',
				            'agama'];
}
