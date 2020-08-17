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
use App\Mail\NotifTest;



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
            select a.xn1, d.name, a.xn2, a.xs1, a.xs2 as lulus, a.created_at, c.xs3, c.xs2, b.xs5, b.xs6, b.xs7, a.xn3, c.xs9
            from 
                        new_pendaftares a
                        inner join sdit_nurulyaqin.new_pendaftar_details b on a.xn1 = b.pendaftar_account_id and b.pendaftar_detail_type_id =1
                        inner join sdit_nurulyaqin.new_pendaftar_details c on a.xn1 = c.pendaftar_account_id  and c.pendaftar_detail_type_id =2 
                        inner join sdit_nurulyaqin.new_pendaftar_statuses d on a.pendaftar_status_id = d.id  
            where a.pendaftar_status_id <> 6
            order by a.created_at desc
                         ");
        
        $summary = array('total' => New_pendaftar::where('pendaftar_type_id','1')->count(),
                         'terverifikasi' => New_pendaftar::where('pendaftar_type_id','2')->count(),
                         'lulus'=> New_pendaftar::where('XS2','Lulus')->count(),
                         'tidak_lulus'=> New_pendaftar::where('xs2','Tidak Lulus')->count());
        // print_r($pendaftar);die();
        return view('backend.home',['pendaftar'=>$pendaftar
                                    ,'summary'=>$summary
                                    ,'active_mn'=>'home']);
    }

    public function lookUp(Request $req){
        $result = DB::select("
            select a.xn1 as nik, d.name, a.xn4, a.xn5, a.xn6, a.xs2, a.xn2, a.xs1 as nama, a.created_at, b.xs3 as jenkel, b.xs4 as tgl_lahir, b.xs5 as tempat_lahir, b.xs6, b.xs7, c.xs9 as asal_sekolah, c.xs10 as alamat_asel, a.xs3 as enrolkey, c.xs1 as email
            from 
                        new_pendaftares a
                        left join sdit_nurulyaqin.new_pendaftar_details b on a.xn1 = b.pendaftar_account_id 
                        left join sdit_nurulyaqin.new_pendaftar_details c on a.xn1 = c.pendaftar_account_id 
                        left join sdit_nurulyaqin.new_pendaftar_statuses d on a.pendaftar_status_id = d.id  
            where 
                        b.pendaftar_detail_type_id =1
                        and c.pendaftar_detail_type_id = 2
                        
                        and a.xn1 = ".$req->nik);
        $sis = New_pendaftar::where('xn1',$req->nik)->first();

        
        $inPeriod = DataContent::where('xd1','<=',date_format($sis->created_at,'Y-m-d'))
                             ->where('xd2','>=',date_format($sis->created_at,'Y-m-d'))->first();
        
        
        $data_file = array();
        $date = date_create($result[0]->created_at);
        $path = date_format($date,'Y/m/d');
        try {
            $isFoto = Storage::get("public/".$path."/".$req->nik."/".$req->nik."_foto.jpg"); 
            $files = Storage::allFiles('public/'.$path.'/'.$req->nik);

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
            $data_file[0]= array(
                        'name' => "Failed to load file!!",
                        'size' => "0",
                        'file_url' => "Failed to load file!!" );    

        }

        return view('backend.lookup',['details'=>$result[0],
                                      'documents'=>$data_file,
                                      'biaya'=>$inPeriod->xn1]);
    }



    public function delete_data(Request $req){
        $nik = $req->nik;
        $remark = $req->remark;
        $delete_trans = New_pendaftar::where('xn1',$nik)->update(['pendaftar_status_id'=>6,'xs20'=>$remark, 'xn1'=>'-'.$nik]);
        $delet_detail = New_pendaftar_details::where('pendaftar_account_id',$nik)->update(['pendaftar_account_id'=>'-'.$nik]);
        return $nik;
    }

    public function verify_page(){
        $pendaftar = DB::select("
            select a.xn1, d.name, a.xn2, a.xs1, a.xs2 as lulus, a.created_at, c.xs3, c.xs2, b.xs5, b.xs6, b.xs7, a.xn3, c.xs9
            from 
                        new_pendaftares a
                        inner join sdit_nurulyaqin.new_pendaftar_details b on a.xn1 = b.pendaftar_account_id and b.pendaftar_detail_type_id =1
                        inner join sdit_nurulyaqin.new_pendaftar_details c on a.xn1 = c.pendaftar_account_id  and c.pendaftar_detail_type_id =2 
                        inner join sdit_nurulyaqin.new_pendaftar_statuses d on a.pendaftar_status_id = d.id  
            where a.pendaftar_status_id != 6
            order by a.created_at desc");
        $client = new Client();
        $response = $client->request('GET','http://localhost/CI-class/index.php/web/daftar_kelas#');
        $enrol_list = $client->request('GET','http://localhost/CI-class/index.php/web/enrol_list_from_kelas#');
        // print_r($response->getStatusCode());echo "<br>";
        // print_r($response->getHeaderLine('content-type'));echo "<br>";
        $kuiz = json_decode($response->getBody()->getContents());
        $get_enrol_list = json_decode($enrol_list->getBody()->getContents());

        $detail_instance = new New_pendaftar();
        $detail = $detail_instance::has('detail')->whereHas('detail',function($query){
            $query->where('pendaftar_detail_type_id','<=',1);
        })->get();
        
        return view('backend.verify',['pendaftar'=>$pendaftar,
                                      'active_mn'=>'verify',
                                      'dt_tes'=>$detail,
                                      'kuiz'=>$kuiz,
                                      'dt_enrol'=>$get_enrol_list]);
    }

    public function periode(){
        $dt_content = DataContent::where('content_type_id',6)->get();
        $client = new Client();
        
        
        return view('backend.periode',['dt_content'=>$dt_content,
                                      'active_mn'=>'periode']);
    }

    public function tambah_periode(Request $req){
        $periode = new DataContent();
        $result = array('guid'=>0,
                        'code'=>0,
                        'data'=> '' );
        try {
            $periode->content_type_id = 6;
            $periode->xs1 = 'PERIODE';
            $periode->xs2 = $req->nama;
            $periode->xn1 = $req->biaya;
            $periode->xd1 = $req->tgl_awal;
            $periode->xd2 = $req->tgl_akhir;
            $periode->create_at = now();
            if ($periode->save()) {
                $result['code']=1;
                $result['data']='berhasil';
            }

        } catch (Exception $e) {
                $result['code']=2;
                $result['data']='Gagal';
        }
        return response()->json($result);
    }

    function get_periode(){
        $periode = DataContent::where('content_type_id',6)->get();
        return response()->json(['guid'=>0,'code'=>1,'data'=>$periode]);
    }

    function delete_periode(Request $req){
        $content_id = $req->content_id;
        $periode = DataContent::find($content_id);
        $periode->delete();
        return response()->json(['guid'=>0,'code'=>1,'data'=>$periode]);
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
        // return view('backend.tgetpendaftar',['pendaftar'=>$pendaftar]);
        return response()->json($pendaftar);
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
    public function sendenrolmassal(Request $req){
        $enkey= $req->enrolKey;
        $validator = 0 ;
        $message = 'success';
        try {  
            $instanceUsers = new New_pendaftar_details();
            $users = $instanceUsers::where('pendaftar_detail_type_id',2)->get();
            $email = array();
            foreach ($users as $key => $value) {
                array_push($email, $value->xs1);
            }
            
            $param = array ('data' => ['nik'=>'-','enrol'=>$enkey,'email'=>'test']);
            Mail::to($email)->send(new NotifTest($param['data']));
            $validator = 1;
            // foreach ($users as $key => $value) {
            //     $param = array ('data' => ['nik'=>$value->pendaftar_account_id,'enrol'=>$enkey,'email'=>$value->xs1]);
            //     $peserta = new New_pendaftar();
            //     $update = $peserta::where('xn1', $value->pendaftar_account_id)
            //                             ->update(['xs3'=>$enkey]);
            //     Mail::to($value->xs1)->send(new NotifTest($param['data']));
            //     $validator = 1;
            // }
        } catch (Exception $e) {
            
            $validator = 0;
            $message = $e;
        }


        $result = array('guid' => 0,
                        'code' => $validator,
                        'data' => 'oke',
                        'message'=> $message);

        
        
        return response()->json($result);
    }

    public function updateInterview(Request $req){
        $peserta = new New_pendaftar();
        $nilai = $peserta::where('xn1',$req->nik)->first();
        $update = $peserta::where('xn1', $req->nik)
                                ->update(["xn4"=>$req->disiplin,
                                          "xn5"=>$req->motivasi,
                                          "xn6"=>$req->kerapihan,
                                          "xs2"=>$req->disiplin >= 70 && $req->motivasi >= 70 && $req->kerapihan >= 70  && $nilai->xn3 >= 70 ? "Lulus":"Tidak Lulus" ]);
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
        return response()->json(["guid"=>0,"code"=>0,"message"=>"success"]);
        
    }
    public function sendEnrol(Request $request){
        $validator = 0 ;
        $message = 'success';
        try {   
            $param = array ('data' => ['nik'=>$request->nik,'enrol'=>$request->enrolKey,'email'=>$request->email]);
            $peserta = new New_pendaftar();
            $update = $peserta::where('xn1', $request->nik)
                                    ->update(['xs3'=>$request->enrolKey]);
            Mail::to($request->email)->send(new NotifTest($param['data']));
            $validator = 1;
        } catch (Exception $e) {
            
            $validator = 0;
            $message = $e;
        }


        $result = array('guid' => 0,
                        'code' => $validator,
                        'data' => ['nik'=>$request->nik,'enrol'=>$request->enrolKey,'email'=>$request->email],
                        'message'=> $message);

        
        
        return response()->json($result);

        // return (new NotifTest($result->data))->render();
    }
    public function list_enrol($kelas_id =null){
        $client = new Client();
        $response = $client->request('GET','http://localhost/CI-class/index.php/web/enrol_list_from_kelas/'.$kelas_id);
        $hasil = json_decode($response->getBody()->getContents());
        // foreach ($hasil->hasil as $value) {
        //     $gate = new New_pendaftar();
        //     $candidat = $gate::where('xn1',$value->nim)
        //                         ->update([
        //                                   'xn3'=>($value->total_benar/$hasil->jml_soal)*100  ]);

        // }
        
        return response()->json(['enrol'=>$hasil[0]->enrol]);
    }
}
