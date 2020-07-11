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
use App\Mail\Pendaftares as Mailregis; 


// Import Model 

use App\New_pendaftares as New_pendaftar;
use App\New_pendaftar_details as New_pendaftar_details;
use App\Mail\Pendaftares;
use App\Mail\NotifTest;

use App\User;
use App\Ciclassmhs as Mhs;
use App\Ciclassmhs as Mahasiswa;
use App\Ciclassusers as CIusers;
use App\Contents as DataContent;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function do_register(Request $request)
    {
    	$param = json_decode($request->param);
      
    	$check= array();
    	$store = new New_pendaftar;
    	try {
    		
    		$store->pendaftar_type_id = 1;
    		$store->pendaftar_status_id = 1;
    		$store->xn1 = $param->keterangan->nik_Anak;
    		$store->xn2 = $param->keterangan->anak_Ke;
    		$store->xs1 = $param->keterangan->nama_lengkap;
    		

    		
    		if ($store->save()) {
                // type 1 keterangan
                $check['pendaftar'] = true;

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
                // $details->xn1       = $param->keterangan->nik_Anak;
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
                $details->xs11      = $param->pendidikan->Jurusan;
                $details->xs12      = $param->pendidikan->nem;
                $details->xs13      = $param->pendidikan->jenjang;

                if ($details->save()) {
                    $check['detail_pendaftar'] = true;
                }
                      


            }
            $send = $this->send_email($param->keterangan->nik_Anak,$param->tempat_tinggal->email);

            $send = true;
            $check['test'] = true;           
          
            if ($send && !in_array(false, $check)) {
                return response()->json([
                    'guid'=>0,
                    'code'=>1,
                    'data'=>'Registrasi telah berhasil silakan check email anda'
                ]);
            }
          
    		
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
        // print_r($pendaftar->pendaftar_status_id);die();
        $status = New_pendaftar::where('xn1',$nik)->has('status')->first();
        
        
        return view('web.detail-pendaftar',['dt_pendaftaran'=>$pendaftar,
                                            'detail'=>$detail,
                                            'detail2'=>$detail2,
                                            'status'=>$status]);
    }


    public function verify(Request $req){
        $nik = $req->nik;
        $verify = New_pendaftar::where('xn1',$nik)->update(['pendaftar_status_id'=>2]);
        $param = DB::select("
            select a.xn1 as nik, d.name, a.xn2, a.xs1 as nama, a.created_at, b.xs3 as jenkel, b.xs4 as tgl_lahir, b.xs5 as tempat_lahir, b.xs6, b.xs7, c.xs9 as asal_sekolah, c.xs10 as alamat_asel, c.xs1 as email
            from 
                        new_pendaftares a
                        left join sdit_nurulyaqin.new_pendaftar_details b on a.xn1 = b.pendaftar_account_id 
                        left join sdit_nurulyaqin.new_pendaftar_details c on a.xn1 = c.pendaftar_account_id 
                        left join sdit_nurulyaqin.new_pendaftar_statuses d on a.pendaftar_status_id = d.id  
            where 
                        b.pendaftar_detail_type_id =1
                        and c.pendaftar_detail_type_id = 2
                        
                        and a.xn1 = ".$req->nik);
        $mhs = Mhs::create([
            'nim' => $param[0]->nik,
            'nama' => $param[0]->nama,
            'ttl' => date('Y-m-d'),
            'gender'=>'laki - laki',
            'agama'=>'islam'
        ]);
        $ciusers = CIusers::create([
            'username' => $param[0]->nik,
            'email' => $param[0]->email,
            'is_dosen' => '0',
            'password' => 'default',
        ]);

        return $nik;
    }

    public function send_email($nik,$reciver)
    {
        $to = $reciver;
        return Mail::to($to)
                        ->send(new Pendaftares($nik));
    }

    public function test_email($nik, $to){
        
        $user = new Pendaftares($nik);
        // $detail_regis = new Mailregis($nik);
        $detail_regis = new NotifTest("d62fd8b6515e740353b1c60a9da");
        // $to = $reciver;
        // Mail::to($to)->send(new NotifTest($nik));
        return $detail_regis->render();
    }

}
