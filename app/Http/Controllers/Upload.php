<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Crypt;


// Import Model 

use App\New_pendaftares as New_pendaftar;
use App\New_pendaftar_details as New_pendaftar_details;
use App\Mail\Pendaftares;

class Upload extends Controller
{
    //


    public function file_save(Request $req){
        $name = $req->file('file')->getClientOriginalName();
        $pendaftar = New_pendaftar::where('xn1',$req->id)->first();
        // echo date_format($pendaftar->created_at,'Y/m/d');die();
        $extension = $req->file('file')->extension();
        $path = Storage::putFileAs('public/'.date_format($pendaftar->created_at,'Y/m/d'),$req->file('file'), $req->id."_".$name);
        return $path;
    }

    public function list_file(Request $req){
        // print_r($req->id);die();

        $pendaftar = New_pendaftar::where('xn1',$req->id)->first();
        $path = date_format($pendaftar->created_at,'Y/m/d');
        
        // $files = Storage::allFiles('public/'.$path);

        // print_r($files);die();
        // $data_file = array();
        // we need name and size for dropzone mockfile
        $data_file = array();
        try {
            $isFoto = Storage::get("public/".$path."/".$req->id."_foto.jpg");    
            $files = Storage::allFiles('public/'.$path);
            
            foreach ($files as $key => $file) {
                if (substr($file, 18,16)==$req->id) {
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

        // header("Content-type: text/json");
        // header("Content-type: application/json");
        echo json_encode($data_file);
    }
    public function remove_file(Request $req){
        $file_path = "./".$req->file;
        $user_id = $req->id;
        $del = Storage::delete($file_path);
        if ($del) {
            return $file_path." Success Delete File!!";
        }else{
            return $file_path;
        }
    }
}
