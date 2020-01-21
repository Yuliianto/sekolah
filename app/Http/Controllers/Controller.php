<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Crypt;


// Import Model 

use App\New_pendaftares as New_pendaftar;
use App\New_pendaftar_details as New_pendaftar_details;
use App\Mail\Pendaftares;

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
                $details->xs3       = $param->keterangan->jenis_kelamin;
                $details->xs4       = $param->keterangan->tanggal_lahir;
                $details->xs5       = $param->keterangan->tempat_Lahir;
                $details->xs6       = $param->keterangan->agama;
                $details->xn1       = $param->keterangan->nik_Anak;
                $details->xn2       = $param->keterangan->anak_Ke;
                $details->xn3       = $param->keterangan->dari;
                // $details->xs5       = $param->keterangan->bahasa;
                // $details->xs6       = $param->keterangan->status_anak;
                $details->xs7       = $param->keterangan->kewarga_negaraan;
                $details->save();


                $details = new New_pendaftar_details;
                $details->pendaftar_id = $lastid;
                $details->pendaftar_detail_type_id = 2;
                $details->pendaftar_account_id = $param->keterangan->nik_Anak;

                $details->xs1       = $param->tempat_tinggal->email;
                $details->xs2       = $param->tempat_tinggal->notelp;
                $details->xs3       = $param->tempat_tinggal->alamat;
                $details->xs4       = $param->tempat_tinggal->tinggalbersama;
                $details->xn1       = $param->tempat_tinggal->jaraksekolah;


                $details->xn2       = $param->kesehatan->beratbadan;
                $details->xn3       = $param->kesehatan->tinggi;
                $details->xs5       = $param->kesehatan->golongandarah;
                $details->xs6       = $param->kesehatan->penyakit;
                $details->xs7       = $param->kesehatan->kebutuhankhusus;
                $details->xs8       = $param->kesehatan->kelainanlainnya;
                $details->xs9       = $param->pendidikan->namatk;
                $details->xs10       = $param->pendidikan->alamattk;
                $details->save();      


            }
            $send = $this->send_email($param->keterangan->nik_Anak,$param->tempat_tinggal->email);


          
            return "success";
          
    		
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

    public function send_email($nik,$reciver)
    {
        $to = $reciver;
        return Mail::to($to)
                        ->send(new Pendaftares($nik));
    }

    public function file_save(Request $req){
        $name = $req->file('file')->getClientOriginalName();
        $pendaftar = New_pendaftar::where('xn1',$req->id)->first();
        // echo date_format($pendaftar->created_at,'Y/m/d');die();
        $extension = $req->file('file')->extension();
        $path = Storage::putFileAs(date_format($pendaftar->created_at,'Y/m/d'),$req->file('file'), $req->id."_".$name);
        return $path;
    }


}
