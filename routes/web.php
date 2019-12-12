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
Route::get('/', function () {
	$meta_data = array('page_name' => 'home',
						'title'		=> 'Home :: SDIT Nurul Yaqin' );
    return view('web.index',$meta_data);
});
Route::get('/about', function () {
	$meta_data = array('page_name' => 'about',
						'title'		=> 'About :: SDIT Nurul Yaqin' );
    return view('web.about',$meta_data);
});
Route::get('/services', function () {
	$meta_data = array('page_name' => 'Services',
						'title'		=> 'Services :: SDIT Nurul Yaqin' );
    return view('web.services',$meta_data);
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




// Guest data input
Route::get('/student-register',function(){
	return view('web.form-register');
});
Route::post('/do_register','Controller@do_register');




Route::get('/backend',function(){
	return view('backend.home');
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
