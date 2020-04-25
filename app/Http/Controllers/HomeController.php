<?php

namespace App\Http\Controllers;




use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Http\Request;
use Illuminate\Contracts\Filesystem\FileNotFoundException;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

// Model
use App\New_pendaftares as New_pendaftar;
use App\New_pendaftar_details as New_pendaftar_details;
use App\Mail\Pendaftares;
use App\User;
use App\Ciclassmhs as Mhs;
use App\Ciclassmhs as Mahasiswa;
use App\Ciclassusers as CIusers;
use App\Contents as DataContent;

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
                         ");
        $count = New_pendaftar::where('pendaftar_status_id','1')->count();
        // print_r($pendaftar);die();
        return view('backend.home',['pendaftar'=>$pendaftar
                                    ,'count'=>$count
                                    ,'active_mn'=>'home']);
    }

    public function lookUp(Request $req){
        $result = DB::select("
            select a.xn1 as nik, d.name, a.xn4, a.xn5, a.xn6, a.xs2, a.xn2, a.xs1 as nama, a.created_at, b.xs3 as jenkel, b.xs4 as tgl_lahir, b.xs5 as tempat_lahir, b.xs6, b.xs7, c.xs9 as asal_sekolah, c.xs10 as alamat_asel 
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



    public function delete_data(Request $req){
        $nik = $req->nik;
        $remark = $req->remark;
        $verify = New_pendaftar::where('xn1',$nik)->update(['pendaftar_status_id'=>6,'xs20'=>$remark]);
        return $nik;
    }

    public function verify_page(){
        $pendaftar = DB::select("
            select a.xn1, d.name, a.xn2, a.xs1, a.created_at, c.xs3, c.xs2, b.xs5, b.xs6, b.xs7, a.xn3, c.xs9
            from 
                        new_pendaftares a
                        inner join sdit_nurulyaqin.new_pendaftar_details b on a.xn1 = b.pendaftar_account_id 
                        inner join sdit_nurulyaqin.new_pendaftar_details c on a.xn1 = c.pendaftar_account_id 
                        inner join sdit_nurulyaqin.new_pendaftar_statuses d on a.pendaftar_status_id = d.id  
            where 
                        b.pendaftar_detail_type_id =1
                        and c.pendaftar_detail_type_id =2 ");
        $client = new Client();
        $response = $client->request('GET','http://localhost/CI-class/index.php/web/daftar_kelas#');
        // print_r($response->getStatusCode());echo "<br>";
        // print_r($response->getHeaderLine('content-type'));echo "<br>";
        $kuiz = json_decode($response->getBody()->getContents());

        $detail_instance = new New_pendaftar();
        $detail = $detail_instance::has('detail')->whereHas('detail',function($query){
            $query->where('pendaftar_detail_type_id','<=',1);
        })->get();
        
        return view('backend.verify',['pendaftar'=>$pendaftar,
                                      'active_mn'=>'verify',
                                      'dt_tes'=>$detail,
                                      'kuiz'=>$kuiz]);
    }
    public function getPendaftarbyname(Request $req){
        $name = $req->name;
        $pendaftar = DB::select("
            select a.xn1, d.name, a.xn2, a.xs1, a.created_at, c.xs3, c.xs2, b.xs5, b.xs6, b.xs7, a.xn3, c.xs9
            from 
                        new_pendaftares a
                        inner join sdit_nurulyaqin.new_pendaftar_details b on a.xn1 = b.pendaftar_account_id 
                        inner join sdit_nurulyaqin.new_pendaftar_details c on a.xn1 = c.pendaftar_account_id 
                        inner join sdit_nurulyaqin.new_pendaftar_statuses d on a.pendaftar_status_id = d.id  
            where 
                        a.xs1 like '%".$name."%'  and b.pendaftar_detail_type_id =1
                        and c.pendaftar_detail_type_id =2 ");
        // print_r($pendaftar);
        return view('backend.tgetpendaftar',['pendaftar'=>$pendaftar]);
    }

    public function interview(){
        $pendaftar = DB::select("
            select a.xn1, d.name, a.xn2, a.xs1, a.created_at, c.xs3, c.xs2, b.xs5, b.xs6, b.xs7, a.xn3, c.xs9
            from 
                        new_pendaftares a
                        inner join sdit_nurulyaqin.new_pendaftar_details b on a.xn1 = b.pendaftar_account_id 
                        inner join sdit_nurulyaqin.new_pendaftar_details c on a.xn1 = c.pendaftar_account_id 
                        inner join sdit_nurulyaqin.new_pendaftar_statuses d on a.pendaftar_status_id = d.id  
            where 
                        b.pendaftar_detail_type_id =1
                        and c.pendaftar_detail_type_id =2 ");
        $client = new Client();
        $response = $client->request('GET','http://localhost/CI-class/index.php/web/daftar_kelas#');
        // print_r($response->getStatusCode());echo "<br>";
        // print_r($response->getHeaderLine('content-type'));echo "<br>";
        $kuiz = json_decode($response->getBody()->getContents());

        $detail_instance = new New_pendaftar();
        $detail = $detail_instance::has('detail')->whereHas('detail',function($query){
            $query->where('pendaftar_detail_type_id','<=',1);
        })->get();
        
        return view('backend.verify',['pendaftar'=>$pendaftar,
                                      'active_mn'=>'interview',
                                      'dt_tes'=>$detail,
                                      'kuiz'=>$kuiz]);
    }
    public function generate(Request $req){
        $kelas_id = $req->kelas_id;
        $client = new Client();
        $response = $client->request('GET','http://localhost/CI-class/index.php/web/getJawaban/'.$kelas_id);
        $hasil = json_decode($response->getBody()->getContents());
        foreach ($hasil->hasil as $value) {
            $gate = new New_pendaftar();
            $candidat = $gate::where('xn1',$value->nim)
                                ->update([
                                          'xn3'=>($value->total_benar/$hasil->jml_soal)*100  ]);

        }
        return response()->json(["guid"=>0,"code"=>0,"message"=>"success"]);
    }
    public function updateInterview(Request $req){
        $peserta = new New_pendaftar();
        $update = $peserta::where('xn1', $req->nik)
                                ->update(["xn4"=>$req->disiplin,
                                          "xn5"=>$req->motivasi,
                                          "xn6"=>$req->kerapihan,
                                          "xs2"=>$req->disiplin >= 70 && $req->motivasi >= 70 && $req->kerapihan >= 70 ? "Lulus":"Tidak Lulus" ]);

        return response()->json(["guid"=>0,"code"=>0,"message"=>$update]);
    }

    public function frontend(){
        $kontent = new DataContent();
        $negara = DB::select(
            "SELECT * FROM Contents WHERE content_type_id = 1 and xs1='NEGARA'"
        );
        $kontak = DB::select("
            SELECT * FROM CONTENTS WHERE content_type_id = 1 AND XS1 = 'KONTAK'
            ");

        $lk_alamat = $kontent::where('content_type_id',1)
                                ->where('xs1','ALAMAT')
                                ->first();

        $profil = $kontent::where('content_type_id',1)
                                ->where('xs1','LOGO')
                                ->first();
        $lk_visimisi = $kontent::where('content_type_id',1)
                                ->where('xs1','VISI_MISI')
                                ->first();
        $ls_content = $kontent::where('content_type_id',2)->get();
        return view('backend.frontend',['dt_negara'=>$negara,
                                        'list_kontak'=> $kontak,
                                        'lk_alamat'=>$lk_alamat,
                                        'lk_visimisi'=>$lk_visimisi,
                                        'ls_content'=>$ls_content,
                                        'profil'=>$profil,
                                        'active_mn'=>'frontend']);
    }
    public function edit(Request $req){

        $kontent = new DataContent();
        $negara = DB::select(
            "SELECT * FROM Contents WHERE content_type_id = 1 and xs1='NEGARA'"
        );
        $kontak = DB::select("
            SELECT * FROM CONTENTS WHERE content_type_id = 1 AND XS1 = 'KONTAK'
            ");

        $lk_alamat = $kontent::where('content_type_id',1)
                                ->where('xs1','ALAMAT')
                                ->first();

        $lk_visimisi = $kontent::where('content_type_id',1)
                                ->where('xs1','VISI_MISI')
                                ->first();
        $dt_content = $kontent::where('id',$req->judul)->first();
        return view('backend.fm_edit',['dt_negara'=>$negara,
                                        'list_kontak'=> $kontak,
                                        'lk_alamat'=>$lk_alamat,
                                        'lk_visimisi'=>$lk_visimisi,
                                        'dt_content'=>$dt_content,
                                        'id_content'=>$req->judul,
                                        'active_mn'=>'frontend']);
    }
    public function view_list_content(){
        $kontent = new DataContent();
        $ls_content = $kontent::where('content_type_id',2)->get();
        return view("backend.view_ls_content",['ls_content'=>$ls_content]   );
    }
    public function update_address(Request $request){
        $address = new DataContent();

        $address::where('content_type_id',1)->where('xs1','ALAMAT')
                ->update(
                    ['xs2'=>$request->address,
                     'xs3'=>$request->address2,
                     'xs4'=>$request->city,
                     'xs5'=>$request->state,
                     'xs6'=>$request->zip,
                     'xs7'=>$request->kontak]
                );
        $profil = new DataContent();
        $profil::where('content_type_id',1)->where('xs1','LOGO')
                    ->update([
                              'xs2'=>$request->logo  ]);
        echo "Update DONE!";
    }

    public function update_kontak(Request $request){
        $kontak = new DataContent();
        $kontak->xs1 = 'KONTAK';
        $kontak->content_type_id= 1;
        $kontak->xs3 = $request->kontakNumber;
        $kontak->xs4 = $request->kontakName;
        $kontak->create_at = date('y-m-d');
        $kontak->save();
        // redirect('/frontend');
        echo "Update DONE!";
    }

    public function update_visi_misi(Request $request){
        
        $address = new DataContent();

        $address::where('content_type_id',1)->where('xs1','VISI_MISI')
                ->update(
                    ['xs2'=>$request->iVisi,
                     'xs3'=>$request->iMisi,
                     'create_at' => date('y-m-d')]
                );
        return redirect('/frontend');
    }

    public function create_content(Request $request){
        $content = new DataContent();
        $content->content_type_id =2;
        $content->xn1 = ($request->highlight == 1 ?  1:0);
        $content->xs1 = $request->title;
        $content->xs2 = $request->content_val;
        $content->create_at = date('y-m-d');
        
        $content->save();
        
        
        
        /*

        title: title,
        content_val : content_val,
        highlight : highlight
        */
        $param = array(
            "judul" => $request->title,
            "content_val" => $request->content_val,
            "highlight" => $request->highlight
        );
        // return json_encode($negara);
        
    }


    public function update_content(Request $request){
        $content = DataContent::find($request->id_content);
        $content->content_type_id =2;
        $content->xn1 = ($request->highlight == 1 ?  1:0);
        $content->xs1 = $request->title;
        $content->xs2 = $request->content_val;
        $content->create_at = date('y-m-d');
        
        $content->save();
        
        
        
        /*

        title: title,
        content_val : content_val,
        highlight : highlight
        */
        $param = array(
            "judul" => $request->title,
            "content_val" => $request->content_val,
            "highlight" => $request->highlight
        );
        // return json_encode($negara);
        
    }
}
