<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use Illuminate\Support\Facades\Crypt;
use Illuminate\Http\Request;
use App\Ciclassusers;
use App\User;
use App\Contents as DataContent;
use App\New_pendaftares;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;



Route::get('/', function () {
        $kontent = new DataContent();
	    $negara = DB::select(
            "SELECT * FROM contents WHERE content_type_id = 1 and xs1='NEGARA'"
        );
        $kontak = DB::select("
            SELECT * FROM contents WHERE content_type_id = 1 AND XS1 = 'KONTAK'
            ");
        $profil = DataContent::where('content_type_id',1)->where('xs1','LOGO')->first();
            

        $lk_alamat = $kontent::where('content_type_id',1)
                                ->where('xs1','ALAMAT')
                                ->first();

        $lk_visimisi = $kontent::where('content_type_id',1)
                                ->where('xs1','VISI_MISI')
                                ->first();
        $dt_content = new DataContent();
        $content = $dt_content::where('content_type_id',2)
                                ->get();
        $ct_sambutan = DataContent::where('content_type_id',3)->first();
        $ct_filosofi = DataContent::where('content_type_id',4)->first();
        $calon_pendaftar = App\New_pendaftares::where('pendaftar_type_id',1)->count();
        $user_verify = App\New_pendaftares::where('pendaftar_status_id',2)->count();
        $mhs = App\New_pendaftares::where('XS2','Lulus')->count();
        $tidak_lulus = App\New_pendaftares::where('xs2','Tidak Lulus')->count();
	$meta_data = array('page_name' => 'home',
						'title'		=> 'Home :: SDIT Nurul Yaqin',
						'dt_negara'=>$negara,
                        'list_kontak'=> $kontak,
                        'lk_alamat'=>$lk_alamat,
                        'lk_visimisi'=>$lk_visimisi,
                        'contents'=>$content,
                        'ct_sambutan'=>$ct_sambutan,
                        'ct_filosofi'=> $ct_filosofi,
                        'calon_pendaftar'=>$calon_pendaftar,
                        'user_verify'=>$user_verify,
                        'mhs'=>$mhs,
                        'tidak_lulus'=>$tidak_lulus,
                        'profil'=> $profil );
    return view('web.index',$meta_data);
});
Route::get('/visimisi', function () {
         $kontent = new DataContent();
        $negara = DB::select(
            "SELECT * FROM Contents WHERE content_type_id = 1 and xs1='NEGARA'"
        );
        $kontak = DB::select("
            SELECT * FROM CONTENTS WHERE content_type_id = 1 AND XS1 = 'KONTAK'
            ");
        $profil = DataContent::where('content_type_id',1)->where('xs1','LOGO')->first();
            

        $lk_alamat = $kontent::where('content_type_id',1)
                                ->where('xs1','ALAMAT')
                                ->first();

        $lk_visimisi = $kontent::where('content_type_id',1)
                                ->where('xs1','VISI_MISI')
                                ->first();
        $dt_content = new DataContent();
        $content = $dt_content::where('content_type_id',2)
                                ->get();
        $ct_sambutan = DataContent::where('content_type_id',3)->first();
        $ct_filosofi = DataContent::where('content_type_id',4)->first();
        $ct_pelaksanaan = DataContent::where('content_type_id',5)->first();
        $calon_pendaftar = App\New_pendaftares::where('pendaftar_status_id',1)->count();
        $user_verify = App\New_pendaftares::where('pendaftar_status_id',2)->count();
        $mhs = App\New_pendaftares::where('pendaftar_status_id',3)->count();
        $tidak_lulus = App\New_pendaftares::where('pendaftar_status_id',4)->count();
    $meta_data = array('page_name' => 'visimisi',
                        'title'     => 'visimisi :: SDIT Nurul Yaqin',
                        'dt_negara'=>$negara,
                        'list_kontak'=> $kontak,
                        'lk_alamat'=>$lk_alamat,
                        'lk_visimisi'=>$lk_visimisi,
                        'contents'=>$content,
                        'ct_sambutan'=>$ct_sambutan,
                        'ct_filosofi'=> $ct_filosofi,
                        'calon_pendaftar'=>$calon_pendaftar,
                        'user_verify'=>$user_verify,
                        'mhs'=>$mhs,
                        'tidak_lulus'=>$tidak_lulus,
                        'ct_pelaksanaan'=> $ct_pelaksanaan,
                        'profil'=> $profil );
    return view('web.visimisi',$meta_data);
});
Route::get('/profiles', function () {
          $kontent = new DataContent();
        $negara = DB::select(
            "SELECT * FROM Contents WHERE content_type_id = 1 and xs1='NEGARA'"
        );
        $kontak = DB::select("
            SELECT * FROM CONTENTS WHERE content_type_id = 1 AND XS1 = 'KONTAK'
            ");
        $profil = DataContent::where('content_type_id',1)->where('xs1','LOGO')->first();
            

        $lk_alamat = $kontent::where('content_type_id',1)
                                ->where('xs1','ALAMAT')
                                ->first();

        $lk_visimisi = $kontent::where('content_type_id',1)
                                ->where('xs1','VISI_MISI')
                                ->first();
        $dt_content = new DataContent();
        $content = $dt_content::where('content_type_id',2)
                                ->get();
        $ct_sambutan = DataContent::where('content_type_id',3)->first();
        $ct_filosofi = DataContent::where('content_type_id',4)->first();
        $calon_pendaftar = App\New_pendaftares::where('pendaftar_status_id',1)->count();
        $user_verify = App\New_pendaftares::where('pendaftar_status_id',2)->count();
        $mhs = App\New_pendaftares::where('pendaftar_status_id',3)->count();
        $tidak_lulus = App\New_pendaftares::where('pendaftar_status_id',4)->count();
    $meta_data = array('page_name' => 'profiles',
                        'title'     => 'profiles :: SDIT Nurul Yaqin',
                        'dt_negara'=>$negara,
                        'list_kontak'=> $kontak,
                        'lk_alamat'=>$lk_alamat,
                        'lk_visimisi'=>$lk_visimisi,
                        'contents'=>$content,
                        'ct_sambutan'=>$ct_sambutan,
                        'ct_filosofi'=> $ct_filosofi,
                        'calon_pendaftar'=>$calon_pendaftar,
                        'user_verify'=>$user_verify,
                        'mhs'=>$mhs,
                        'tidak_lulus'=>$tidak_lulus,
                        'profil'=> $profil );
    return view('web.profiles',$meta_data);
});
Route::get('/contact', function () {
         $kontent = new DataContent();
        $negara = DB::select(
            "SELECT * FROM Contents WHERE content_type_id = 1 and xs1='NEGARA'"
        );
        $kontak = DB::select("
            SELECT * FROM CONTENTS WHERE content_type_id = 1 AND XS1 = 'KONTAK'
            ");
        $profil = DataContent::where('content_type_id',1)->where('xs1','LOGO')->first();
            

        $lk_alamat = $kontent::where('content_type_id',1)
                                ->where('xs1','ALAMAT')
                                ->first();

        $lk_visimisi = $kontent::where('content_type_id',1)
                                ->where('xs1','VISI_MISI')
                                ->first();
        $dt_content = new DataContent();
        $content = $dt_content::where('content_type_id',2)
                                ->get();
        $ct_sambutan = DataContent::where('content_type_id',3)->first();
        $ct_filosofi = DataContent::where('content_type_id',4)->first();
        $calon_pendaftar = App\New_pendaftares::where('pendaftar_status_id',1)->count();
        $user_verify = App\New_pendaftares::where('pendaftar_status_id',2)->count();
        $mhs = App\New_pendaftares::where('pendaftar_status_id',3)->count();
        $tidak_lulus = App\New_pendaftares::where('pendaftar_status_id',4)->count();
    $meta_data = array('page_name' => 'contact',
                        'title'     => 'Contact :: SDIT Nurul Yaqin',
                        'dt_negara'=>$negara,
                        'list_kontak'=> $kontak,
                        'lk_alamat'=>$lk_alamat,
                        'lk_visimisi'=>$lk_visimisi,
                        'contents'=>$content,
                        'ct_sambutan'=>$ct_sambutan,
                        'ct_filosofi'=> $ct_filosofi,
                        'calon_pendaftar'=>$calon_pendaftar,
                        'user_verify'=>$user_verify,
                        'mhs'=>$mhs,
                        'tidak_lulus'=>$tidak_lulus,
                        'profil'=> $profil );
    return view('web.contact',$meta_data);
});
Route::get('/gallery', function () {
         $kontent = new DataContent();
        $negara = DB::select(
            "SELECT * FROM Contents WHERE content_type_id = 1 and xs1='NEGARA'"
        );
        $kontak = DB::select("
            SELECT * FROM CONTENTS WHERE content_type_id = 1 AND XS1 = 'KONTAK'
            ");
        $profil = DataContent::where('content_type_id',1)->where('xs1','LOGO')->first();
            

        $lk_alamat = $kontent::where('content_type_id',1)
                                ->where('xs1','ALAMAT')
                                ->first();

        $lk_visimisi = $kontent::where('content_type_id',1)
                                ->where('xs1','VISI_MISI')
                                ->first();
        $dt_content = new DataContent();
        $content = $dt_content::where('content_type_id',2)
                                ->get();
        $ct_sambutan = DataContent::where('content_type_id',3)->first();
        $ct_filosofi = DataContent::where('content_type_id',4)->first();
        $calon_pendaftar = App\New_pendaftares::where('pendaftar_status_id',1)->count();
        $user_verify = App\New_pendaftares::where('pendaftar_status_id',2)->count();
        $mhs = App\New_pendaftares::where('pendaftar_status_id',3)->count();
        $tidak_lulus = App\New_pendaftares::where('pendaftar_status_id',4)->count();
    $meta_data = array('page_name' => 'gallery',
                        'title'     => 'Gallery :: SDIT Nurul Yaqin',
                        'dt_negara'=>$negara,
                        'list_kontak'=> $kontak,
                        'lk_alamat'=>$lk_alamat,
                        'lk_visimisi'=>$lk_visimisi,
                        'contents'=>$content,
                        'ct_sambutan'=>$ct_sambutan,
                        'ct_filosofi'=> $ct_filosofi,
                        'calon_pendaftar'=>$calon_pendaftar,
                        'user_verify'=>$user_verify,
                        'mhs'=>$mhs,
                        'tidak_lulus'=>$tidak_lulus,
                        'profil'=> $profil );
    return view('web.gallery',$meta_data);
});
Route::get('/register', function () {
         $kontent = new DataContent();
        $negara = DB::select(
            "SELECT * FROM Contents WHERE content_type_id = 1 and xs1='NEGARA'"
        );
        $kontak = DB::select("
            SELECT * FROM CONTENTS WHERE content_type_id = 1 AND XS1 = 'KONTAK'
            ");
        $profil = DataContent::where('content_type_id',1)->where('xs1','LOGO')->first();
            

        $lk_alamat = $kontent::where('content_type_id',1)
                                ->where('xs1','ALAMAT')
                                ->first();

        $lk_visimisi = $kontent::where('content_type_id',1)
                                ->where('xs1','VISI_MISI')
                                ->first();
        $dt_content = new DataContent();
        $content = $dt_content::where('content_type_id',2)
                                ->get();
        $ct_sambutan = DataContent::where('content_type_id',3)->first();
        $ct_filosofi = DataContent::where('content_type_id',4)->first();
        $calon_pendaftar = App\New_pendaftares::where('pendaftar_status_id',1)->count();
        $user_verify = App\New_pendaftares::where('pendaftar_status_id',2)->count();
        $mhs = App\New_pendaftares::where('pendaftar_status_id',3)->count();
        $tidak_lulus = App\New_pendaftares::where('pendaftar_status_id',4)->count();
    $meta_data = array('page_name' => 'register',
                        'title'     => 'Home :: SDIT Nurul Yaqin',
                        'dt_negara'=>$negara,
                        'list_kontak'=> $kontak,
                        'lk_alamat'=>$lk_alamat,
                        'lk_visimisi'=>$lk_visimisi,
                        'contents'=>$content,
                        'ct_sambutan'=>$ct_sambutan,
                        'ct_filosofi'=> $ct_filosofi,
                        'calon_pendaftar'=>$calon_pendaftar,
                        'user_verify'=>$user_verify,
                        'mhs'=>$mhs,
                        'tidak_lulus'=>$tidak_lulus,
                        'profil'=> $profil );
    return view('layout.guest',$meta_data);
});
Route::get('/ujian',function(){
    return view('web.ujian');
});
// Route::get('/gallery', function () {
// 	$meta_data = array('page_name' => 'gallery',
// 						'title'		=> 'Gallery :: SDIT Nurul Yaqin' );
//     return view('web.gallery',$meta_data);
// });




// Guest data input
Route::get('/student-register',function(){
    $currentdate = date('Y-m-d');
    try {
        $periode = DataContent::where('xd1','<=',$currentdate)
                             ->where('xd2','>=',$currentdate)->first();      
    } catch (Exception $e) {
        
    }
    if (isset($periode)) {
        // echo "$periode->xn1";
    }
	return view('web.form-register');
});
Route::post('/do_register','Controller@do_register');
Route::get('/check-nomor','Controller@check_nomor');
Route::post('/get_detail','Controller@get_detail');

Route::get('/cek-pendaftaran',function(){
    return view('web.check-nopendaftaran'); 
});
Route::post("/verify","Controller@verify");

Route::get('/cek-pendaftaran/{id}',function(Request $req, $id){
    $plainTxtId = Crypt::decryptString($id);
    return view('web.check-nopendaftaran',['id'=>$plainTxtId]); 
});

Route::post('/update-visi-misi','HomeController@update_visi_misi');


Route::get('/backend',function(){
    return view('backend.home');
});
Route::post('get-calon','HomeController@lookUp');
Route::get('/exam-dashboard',function(){
    $user = Auth::user();
    // echo "<pre>";
    // print_r($user);
    // echo "</pre>";die();
    $users = App\Ciclassusers::find(1);
    return view('backend.exam',[
                                'active_mn'=>'exam']);
});
Route::post('/updateInterview','HomeController@updateInterview');
Route::get('frontend','HomeController@frontend');
Route::post('/update-address','HomeController@update_address');
Route::post('/update-kontak','HomeController@update_kontak');
Route::get('/hapus-kontak/{id}',function($id){
    $kontak = new DataContent();
    $detele = $kontak::where('content_type_id',1)
						->where('xs1','KONTAK')
						->where('xs3',"$id")->delete();

	return redirect('frontend');
});
Route::post('/create-content','HomeController@create_content');
Route::post('/update-content','HomeController@update_content');
Route::get('/get-tbody-content','HomeController@view_list_content');
Route::get('/del_content/{id}',function($_id){
    $content = new DataContent();
    $del = $content::destroy($_id);
    if ($del) {
        return "done";
    }else{
        return "not working";
    }
});

Route::get('/edit_content/{id}',function($_id){
    $content = new DataContent();
    $find = $content::find($_id);
    if ($find) {
        return json_encode($find);
    }else{
        return "not working";
    }
});
Route::post('/generate','HomeController@generate');
Route::post('/send-enrol-masal','HomeController@sendenrolmassal');
Route::post('/tambah-periode','HomeController@tambah_periode');
Route::post('/delete-periode','HomeController@delete_periode');
Route::get('/get-periode','HomeController@get_periode');
Route::get('/edit_fm/{judul}','HomeController@edit');

// Route::get('/login',function(){
// 	return view('auth.login');
// });
// Route::get('/register',function(){
// 	return view('auth.register');
// });
// Route::get('/verify',function(){
// 	return view('auth.verify');
// });
// Navigation group bar 
// Route::middleware(['first','second','third','fourth','fifth','sixth'])->group(function(){
	
// 	Route::get('/', function () { //first
// 	    return view('web.index');
// 	});

// 	Route::get('/about', function () { //second
// 	    return view('web.about');
// 	});

// 	Route::get('/services', function () { //third
// 	    return view('web.contact');
// 	});

// 	Route::get('/gallery', function () { //fourth
// 	    return view('web.gallery');
// 	});
// 	Route::get('/contact', function () { //fifth
// 	    return view('web.contact');
// 	});
// });
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/verify-page', 'HomeController@verify_page');
Route::get('/periode', 'HomeController@periode');
Route::get('/interview', 'HomeController@interview');
Route::post('/do_delete', 'HomeController@delete_data');
Route::post('/getPendaftarbyname','HomeController@getPendaftarbyname');
//Upload
Route::get('/list-file/{id}','Upload@list_file');
Route::post('/file-upload',"Upload@file_save");
Route::post('/remove','Upload@remove_file');

Route::get('/admin',function(){
	return redirect('/login');
});


Route::post('sendEnrol','HomeController@sendEnrol');
Route::get('test_email/{nik}/{email}/{enrol}/','Controller@test_email');

Route::get('/testpdf',function(){
    $test ='tes';
    $pdf = App::make('dompdf.wrapper');
    $pdf->loadHTML('<h1>Test</h1>');
    return $pdf->stream();
});


