<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class New_pendaftares extends Model
{
    //
    protected $primaryKey = 'id';


    public function status(){
    	return $this->hasOne('App\New_pendaftar_statuses','id','pendaftar_status_id');
    }

    public function detail(){
    	return $this->hasMany('App\New_pendaftar_details','pendaftar_account_id','xn1');
    }
}
