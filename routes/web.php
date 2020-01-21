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

Route::get('/', function () {
	$meta_data = array('page_name' => 'home',
						'title'		=> 'Home :: SDIT Nurul Yaqin' );
    return view('web.index',$meta_data);
});
Route::get('/visimisi', function () {
	$meta_data = array('page_name' => 'visimisi',
						'title'		=> 'Visi dan misi :: SDIT Nurul Yaqin' );
    return view('web.visimisi',$meta_data);
});
Route::get('/profiles', function () {
	$meta_data = array('page_name' => 'profiles',
						'title'		=> 'Profiles :: SDIT Nurul Yaqin' );
    return view('web.profiles',$meta_data);
});
Route::get('/contact', function () {
	$meta_data = array('page_name' => 'Contact',
						'title'		=> 'Contact :: SDIT Nurul Yaqin' );
    return view('web.contact',$meta_data);
});
Route::get('/gallery', function () {
	$meta_data = array('page_name' => 'gallery',
						'title'		=> 'Gallery :: SDIT Nurul Yaqin' );
    return view('web.gallery',$meta_data);
});
Route::get('/register', function () {
	$meta_data = array('page_name' => 'register',
						'title'		=> 'Register :: SDIT Nurul Yaqin' );
    return view('layout.guest',$meta_data);
});
// Route::get('/gallery', function () {
// 	$meta_data = array('page_name' => 'gallery',
// 						'title'		=> 'Gallery :: SDIT Nurul Yaqin' );
//     return view('web.gallery',$meta_data);
// });




// Guest data input
Route::get('/student-register',function(){
	return view('web.form-register');
});
Route::post('/do_register','Controller@do_register');
Route::get('/check-nomor','Controller@check_nomor');
Route::post('/get_detail','Controller@get_detail');

Route::get('/cek-pendaftaran',function(){
	return view('web.check-nopendaftaran');	
});
Route::post("/verify","HomeController@verify");

Route::get('/cek-pendaftaran/{id}',function(Request $req, $id){
	$plainTxtId = Crypt::decryptString($id);
	return view('web.check-nopendaftaran',['id'=>$plainTxtId]);	
});

Route::post('/file-upload',"Controller@file_save");


Route::get('/backend',function(){
	return view('backend.home');
});

Route::post('/test_req',function(Request $req)
{	
	$param = json_decode($req);
	print_r($param);
});

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
Route::post('/do_delete', 'HomeController@delete_data');