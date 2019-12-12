<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;


// Import Model 

use App\New_pendaftares as New_pendaftar;
use App\New_pendaftar_details as New_pendaftar_details;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function do_register(Request $request)
    {
    	$param = json_decode($request->param);
    	
    	$store = new New_pendaftar;
    	$details = new New_pendaftar_details;
    	try {
    		
    		$store->pendaftar_type_id = 1;
    		$store->pendaftar_status_id = 1;
    		$store->xn1 = $param->keterangan->nik;
    		$store->xn2 = $param->keterangan->
    		$store->xs1 = $param->keterangan->nama_lengkap;
    		$store->save();

    		// type 1 keterangan 
    		

    		return "sukses";
    	} catch (Exception $e) {
    		return "Gagal store data!";
    	}
    	// return json_encode($param->keterangan);
    }
}
