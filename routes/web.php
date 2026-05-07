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

Route::post('/login','frontendController@login');
Route::get('/logout','frontendController@logout');
Route::get('/', 'frontendController@welcome');
Route::get('/pendaftar-login', 'frontendController@masuk');

Route::group(["middleware" => "main"], function() {

Route::get('/konfirmasi/{idkat}', 'frontendController@konfirmasi');

Route::get('/soal-disc', 'frontendController@show2');
Route::get('/disc','disccontroller@show');
Route::get('/tpa/{idkat}','tpacontroller@show');
Route::post('/storetpa','tpacontroller@tambah');

Route::get('/english/{idkat}','disccontroller@english');
Route::get('/kata/{idkat}','disccontroller@kata');
Route::get('/hitung/{idkat}','disccontroller@hitung');
Route::get('/konsen/{idkat}','disccontroller@konsen');
Route::get('/nalar/{idkat}','disccontroller@nalar');
Route::get('/mekanis/{idkat}','disccontroller@mekanis');
Route::post('/storedisc','disccontroller@tambah');
Route::post('/ferinPost','disccontroller@loveFerin');

Route::post('/storeJawaban', 'frontendController@tambahJawab');
Route::get('/soal-disc/{Idsoal}', 'frontendController@next2');
Route::post('/soal', 'frontendController@cobasoal')->name('frontend.cobasoal');

Route::get('/pilihsoal',function() {
	return view('frontend/pilihsoal');
});
Route::get('/selesai', function() {
	return view('frontend/tpa/selesai');
});
Route::get('/selesaiTpa', function() {
	return view('frontend/tpa/selesai');
});

Route::get("/setsession/{m}/{s}", "frontendController@setsession");
Route::get("/setyoga/{cintah}","frontendController@ferin");




//english
Route::get('/englishtest/{idkat}', 'frontendController@konfiramsiE');
Route::get('/katatest/{idkat}', 'frontendController@konfirmasikata');
Route::get('/hitungtest/{idkat}', 'frontendController@konfirmasihitung');
Route::get('/konsentest/{idkat}', 'frontendController@konfirmasikonsen');
Route::get('/nalartest/{idkat}', 'frontendController@konfirmasinalar');
Route::get('/mekanistest/{idkat}', 'frontendController@konfirmasimekanis');
Route::post('/save', 'etoCtrl@simpan');
Route::post('/ajaxcek', 'etoCtrl@go');
Route::get('/finish', function() {
	return view('frontend/finish');
});

// hasil
Route::get('/datahasil','frontendController@Halhasil');
Route::get("/ceknpm", "frontendController@ceknpm");
//end

//tpa
Route::get('/peserta/{idkat}', 'PesertaController@index')->name('peserta');
Route::get('peserta/soal', 'PesertaController@soal')->name('soal');
Route::get('peserta/selesai', 'PesertaController@selesai')->name('selesai');
Route::resource('peserta','PesertaController');
Route::get("/setsessiontpa/{m}/{s}", "PesertaController@setsession");

});


//endfrontend


//loginbackend
Route::group(["middleware" => "admin"], function(){
	Route::get('admin/dashboard','AdminController@index');
	Route::get('admin/waktu','AdminController@waktu');
	Route::post('/setwaktu','AdminController@setwaktu');
	Route::post('/updatewaktu/{Id}','AdminController@updatewaktu');
	Route::post('/deletewaktu/{Id}','AdminController@deletewaktu');

    Route::get('admin/hasilseluruh','HasilsController@test');
	Route::post('admin/hasilsemua','HasilController@hasilsemua');
	Route::get("/admin/cetak-hasil-tpa", "HasilsController@cetakhasiltpa");
	Route::get("/admin/cetak-hasil-ing", "HasilsController@cetakhasiling");

	//soal
	Route::get('admin/soal','SoalController@HalSoal');
	Route::get('admin/soal/show','SoalController@show');
	Route::post('admin/soal/save', 'SoalController@save');
	Route::get('admin/soal/{id}/edit','SoalController@edit');
	Route::post('admin/soal/{id}/update','SoalController@update');
	Route::get('admin/soal/{id}/delete','SoalController@delete');

	// pendaftar
	Route::get('admin/pendaftar','AdminController@Halpendaftar');
	Route::get('admin/pendaftar/tambah','PendaftarController@tambah');
	Route::post('/admin/pendaftar/tambah', 'PendaftarController@simpanpendaftar');
	Route::get('/admin/pendaftar/update-{ID}', 'PendaftarController@perUpdate');
	Route::post('/admin/pendaftar/update1', 'PendaftarController@update1');
	Route::get('/admin/pendaftar/hapus-{ID}', 'PendaftarController@hapus');
	Route::get('/admin/pendaftar/detailp-{ID}', 'PendaftarController@detail');
	Route::post('/admin/pendaftar/upload','PendaftarController@excel');

	// Admin
	Route::get('admin/dataadmin','AdminController@Haladmin');
	Route::get('admin/dataadmin/tambah','dataadminController@tambah');
	Route::post('/admin/dataadmin/tambah', 'dataadminController@simpanadmin');
	Route::get('/admin/dataadmin/update-{ID}', 'dataadminController@perUpdate');
	Route::post('/admin/dataadmin/update1', 'dataadminController@update1');
	Route::get('/admin/dataadmin/hapus-{ID}', 'dataadminController@hapus');

	// hasil
	Route::get('admin/datahasil','AdminController@Halhasil');
	Route::post("/admin/ceknpm/", "HasilController@ceknpm");
	Route::get("admin/cetak_hasil/{npm}", "HasilController@cetak_pdf");

	//bahasa inggris
	Route::get('admin/soal/eng','AdminEnglishController@soal');
	Route::get('admin/cerita/eng','AdminEnglishController@cerita');
	Route::get('admin/petunjuk/eng','AdminEnglishController@petunjuk');
	Route::get('admin/sound/eng','AdminEnglishController@sound');

	Route::get('admin/petunjuk/eng/show/{id?}','AdminEnglishAddController@petunjuk');
	Route::get('admin/sound/eng/show/{id?}','AdminEnglishAddController@sound');
	Route::get('admin/cerita/eng/show/{id?}','AdminEnglishAddController@cerita');
	Route::get('admin/soal/eng/reading/show/{id?}','AdminEnglishAddController@reading');
	Route::get('admin/soal/eng/we/show/{id?}','AdminEnglishAddController@we');
	Route::get('admin/soal/eng/vocabulary/show/{id?}','AdminEnglishAddController@vocabulary');
	Route::get('admin/soal/eng/listening/show/{id?}','AdminEnglishAddController@listening');

	Route::post('admin/petunjuk/eng/save','AdminEnglishSaveController@petunjuk');
	Route::post('admin/sound/eng/save','AdminEnglishSaveController@sound');
	Route::post('admin/cerita/eng/save','AdminEnglishSaveController@cerita');
	Route::post('admin/reading/eng/save','AdminEnglishSaveController@reading');
	Route::post('admin/we/eng/save','AdminEnglishSaveController@we');
	Route::post('admin/vocabulary/eng/save','AdminEnglishSaveController@vocabulary');
	Route::post('admin/listening/eng/save','AdminEnglishSaveController@listening');

	Route::get('admin/petunjuk/eng/petunjuk/{id}/delete','AdminEnglishDeleteController@petunjuk');
	Route::get('admin/cerita/eng/cerita/{id}/delete','AdminEnglishDeleteController@cerita');
	Route::get('admin/sound/eng/sound/{id}/delete','AdminEnglishDeleteController@sound');
	Route::get('admin/soal/eng/reading/{id}/delete','AdminEnglishDeleteController@reading');
	Route::get('admin/soal/eng/we/{id}/delete','AdminEnglishDeleteController@we');
	Route::get('admin/soal/eng/vocabulary/{id}/delete','AdminEnglishDeleteController@vocabulary');
	Route::get('admin/soal/eng/listening/{id}/delete','AdminEnglishDeleteController@listening');

	Route::get('admin/eng/hasil','AdminEnglishController@hasil');
	Route::post('admin/eng/hasil/ceknpm','AdminEnglishController@ceknpm');
	Route::get("admin/eng/cetak_hasil/{npm}", "AdminEnglishController@cetak_pdf");

	//end bahasa inggris

	//soalTpa
	Route::get('admin/soal-tpa','SoalTpaController@index');
	Route::get('admin/soal-tpa/show','SoalTpaController@create');
	Route::post('admin/save', 'SoalTpaController@store')->name('tambahsoal');
	Route::get('admin/soal-tpa/{id}/edit','SoalTpaController@show');
	Route::post('admin/soal-tpa','SoalTpaController@update')->name('updatesoal');
	Route::post('admin/soal-tpa/delete/{id_soal}','SoalTpaController@destroy');
    Route::post('/admin/soal-tpa/import','SoalTpaController@importSoal');

	//hasiltpa
	Route::get('admin/datahasiltpa','SoalTpaController@tampilhasiltpa');
	Route::get("/admin/detail-hasil-tpa/{id}", "SoalTpaController@tampildetailhasiltpa");
	Route::get("/admin/cetak-hasil-tpa/{id}", "SoalTpaController@cetakhasiltpa");
	//endTpa
});
Route::get('/admin', 'LoginController@index');
Route::get('/admin/login', 'LoginController@loginadmin');
Route::post('/postlogin', 'LoginController@postlogin');
Route::get('/admin/logout', 'LoginController@logout');
Route::get('daftarsiswa','siswaController@siswaDaftar');
Route::post('tambahsiswa', 'siswaController@simpanpendaftar');


// Route::get("/admin/tot/{npm}", "HasilController@total");
