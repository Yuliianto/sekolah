<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
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
    	try {
    		
    		$store->pendaftar_type_id = 1;
    		$store->pendaftar_status_id = 1;
    		$store->xn1 = $param->keterangan->nik_Anak;
    		$store->xn2 = $param->keterangan->anak_Ke;
    		$store->xs1 = $param->keterangan->nama_lengkap;
    		

    		
    		if ($store->save()) {
                // type 1 keterangan

                $details = new New_pendaftar_details; 
                $lastid = DB::getPDO()->lastInsertID();
                $details->pendaftar_id = $lastid;
                $details->pendaftar_detail_type_id = 1;
                $details->pendaftar_account_id  = $param->keterangan->nik_Anak;
                $details->xs1       = $param->keterangan->nama_lengkap;
                $details->xs2       = $param->keterangan->nama_Panggilan;
                $details->xs2       = $param->keterangan->tempat_Lahir;
                $details->xs3       = $param->keterangan->tanggal_lahir;
                $details->xs4       = $param->keterangan->agama;
                $details->xn1       = $param->keterangan->anak_Ke;
                $details->xn2       = $param->keterangan->dari;
                $details->xn3       = $param->keterangan->nik_Anak;
                // $details->xs5       = $param->keterangan->bahasa;
                // $details->xs6       = $param->keterangan->status_anak;
                $details->xs7       = $param->keterangan->kewarga_negaraan;
                $details->save();


                $details = new New_pendaftar_details;
                $details->pendaftar_id = $lastid;
                $details->pendaftar_detail_type_id = 2;
                $details->pendaftar_account_id = $param->keterangan->nik_Anak;

                $details->xs5       = $param->tempat_tinggal->email;
                $details->xs6       = $param->tempat_tinggal->notelp;
                $details->xs8       = $param->tempat_tinggal->alamat;
                $details->xs9       = $param->tempat_tinggal->tinggalbersama;
                $details->xn4       = $param->tempat_tinggal->jaraksekolah;

                $details->xn5       = $param->kesehatan->beratbadan;
                $details->xn6       = $param->kesehatan->tinggi;
                $details->xs10      = $param->kesehatan->golongandarah;
                $details->xs11      = $param->kesehatan->penyakit;
                $details->xs1       = $param->kesehatan->kebutuhankhusus;
                $details->xs4       = $param->kesehatan->kelainanlainnya;
                $details->xs2       = $param->pendidikan->namatk;
                $details->xs3       = $param->pendidikan->alamattk;
                $details->save();      

            }

    		return "sukses";
    	} catch (Exception $e) {
    		return "Gagal store data!";
    	}
    	// return json_encode($param->keterangan);
    }

    public function check_nomor()
    {
        return view('web.check-nopendaftaran');
    }
    public function get_detail(Request $request)
    {
        $nik = $request->nik;
        $pendaftar = New_pendaftar::where('xn1',$nik)->first();
        $detail = New_pendaftar_details::where('pendaftar_account_id',$nik)
                                            ->where('pendaftar_detail_type_id',1)->first();
        $detail2 = New_pendaftar_details::where('pendaftar_account_id',$nik)
                                            ->where('pendaftar_detail_type_id',2)->first();
        
        return view('web.detail-pendaftar',['dt_pendaftaran'=>$pendaftar,
                                            'detail'=>$detail,
                                            'detail2'=>$detail2]);
    }
}
