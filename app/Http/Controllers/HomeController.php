<?php

namespace App\Http\Controllers;




use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Http\Request;
use Illuminate\Contracts\Filesystem\FileNotFoundException;

// Model
use App\New_pendaftares as New_pendaftar;
use App\New_pendaftar_details as New_pendaftar_details;
use App\Mail\Pendaftares;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $pendaftar = DB::select("
            select a.xn1, d.name, a.xn2, a.xs1, a.created_at, b.xs3, b.xs4, b.xs5, b.xs6, b.xs7 
            from 
                        new_pendaftares a
                        inner join sdit_nurulyaqin.new_pendaftar_details b on a.xn1 = b.pendaftar_account_id 
                        inner join sdit_nurulyaqin.new_pendaftar_details c on a.xn1 = c.pendaftar_account_id 
                        inner join sdit_nurulyaqin.new_pendaftar_statuses d on a.pendaftar_status_id = d.id  
            where 
                        b.pendaftar_detail_type_id =1
                        and c.pendaftar_detail_type_id =2
                        and a.pendaftar_status_id =1 ");
        $count = New_pendaftar::where('pendaftar_status_id','1')->count();
        // print_r($pendaftar);die();
        return view('backend.home',['pendaftar'=>$pendaftar
                                    ,'count'=>$count]);
    }

    public function lookUp(Request $req){
        $result = DB::select("
            select a.xn1 as nik, d.name, a.xn2, a.xs1 as nama, a.created_at, b.xs3 as jenkel, b.xs4 as tgl_lahir, b.xs5 as tempat_lahir, b.xs6, b.xs7, c.xs9 as asal_sekolah, c.xs10 as alamat_asel 
            from 
                        new_pendaftares a
                        left join sdit_nurulyaqin.new_pendaftar_details b on a.xn1 = b.pendaftar_account_id 
                        left join sdit_nurulyaqin.new_pendaftar_details c on a.xn1 = c.pendaftar_account_id 
                        left join sdit_nurulyaqin.new_pendaftar_statuses d on a.pendaftar_status_id = d.id  
            where 
                        b.pendaftar_detail_type_id =1
                        and c.pendaftar_detail_type_id = 2
                        
                        and a.xn1 = ".$req->nik);
        // print_r($result);die();
        
        // if ($isFoto) {
        //     echo "available";
        //  }else{
        //      echo "nok";
        //  } die();
        $data_file = array();
        $date = date_create($result[0]->created_at);
        $path = date_format($date,'Y/m/d');
        try {
            $isFoto = Storage::get("public/".$path."/".$req->nik."_foto.jpg");    
            $files = Storage::allFiles('public/'.$path);
            
            foreach ($files as $key => $file) {
                if (substr($file, 18,16)==$req->nik) {
                    $data_file[$key] = array(
                        'name' => $file,
                        'size' => Storage::size($file),
                        'file_url' => Storage::url($file) 
                    );
                }
            }
        } catch (FileNotFoundException $e) {
            $data_file= array();
        }
        
        return view('backend.lookup',['details'=>$result[0],
                                      'documents'=>$data_file]);
    }

    public function verify(Request $req){
        $nik = $req->nik;
        $verify = New_pendaftar::where('xn1',$nik)->update(['pendaftar_status_id'=>2]);
        return $nik;
    }


    public function delete_data(Request $req){
        $nik = $req->nik;
        $remark = $req->remark;
        $verify = New_pendaftar::where('xn1',$nik)->update(['pendaftar_status_id'=>6,'xs20'=>$remark]);
        return $nik;
    }

    public function verify_page(){
        $pendaftar = DB::select("
            select a.xn1, d.name, a.xn2, a.xs1, a.created_at, b.xs3, b.xs4, b.xs5, b.xs6, b.xs7 
            from 
                        new_pendaftares a
                        inner join sdit_nurulyaqin.new_pendaftar_details b on a.xn1 = b.pendaftar_account_id 
                        inner join sdit_nurulyaqin.new_pendaftar_details c on a.xn1 = c.pendaftar_account_id 
                        inner join sdit_nurulyaqin.new_pendaftar_statuses d on a.pendaftar_status_id = d.id  
            where 
                        b.pendaftar_detail_type_id =1
                        and c.pendaftar_detail_type_id =2
                        and a.pendaftar_status_id =2 ");
        // print_r($pendaftar);die();
        return view('backend.verify',['pendaftar'=>$pendaftar]);
    }
}
