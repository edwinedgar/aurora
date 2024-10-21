<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controllermain;
use App\Http\Controllers\controllerinput;

Route::middleware('auth','Pengguna')->group(function(){

});
Route::middleware('auth','admin,pengguna')->group(function(){

});
Route::middleware('auth','Petugas')->group(function(){

});




Route::middleware('auth')->group(function () {
    Route::get('/', function () {return view('index');})->name('index');
    Route::get('//dashboard', function () {return view('dashboard');})->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/tes', [ProfileController::class,'tes']);
    Route::get('/menu-main', [controllermain::class,'menumain']);
    Route::get('/index-components', [controllermain::class,'indexcomponents']);
    Route::get('/index-media', [controllermain::class,'indexmedia']);
    Route::get('/index-pages', [controllermain::class,'indexpages']);
    Route::get('/index-settings', [controllermain::class,'indexsettings']);
    Route::get('/minputlayanan', [controllerinput::class,'inputlayanan'])->name('inputlayanan');
    Route::get('/mhapuslayanan/{id}',[controllerinput::class,'layananhapus']);
    Route::post('/simpanlayanan', [controllerinput::class,'simpanlayanan'])->name('simpanlayanan');
    Route::get('/mdaftarlayanan', [controllerinput::class,'daftarlayanan'])->name('daftarlayanan');
    Route::get('/mpasien/{jenislayanan}', [controllerinput::class,'pasien'])->name('pasien');
    Route::get('/mdaftar/{daftarpasien}', [controllerinput::class,'daftar'])->name('daftar');
    Route::get('/mlayanan/{layanan}', [controllerinput::class,'layanan'])->name('layanan');
    Route::post('/mpasien/{jenislayanan}', [controllerinput::class,'postlayanan'])->name('postlayanan');
    Route::get('/mrekap', [controllerinput::class,'rekap'])->name('rekap');
    Route::post('/postmrekap', [controllerinput::class,'postrekap'])->name('postrekap');
    Route::get('/hasilrekap', [controllerinput::class,'hasilrekap'])->name('hasilrekap');
    Route::get('/mpilihpetugas', [controllerinput::class,'pilihpetugas'])->name('pilihpetugas');
    Route::get('/mpilihpetugas1/{petugas}', [controllerinput::class,'pilihpetugas1'])->name('pilihpetugas1');
    Route::get('/minputpetugas', [controllerinput::class,'minputpetugas'])->name('minputpetugas');
    Route::post('/simpanpetugas', [controllerinput::class,'simpanpetugas'])->name('simpanpetugas');
    Route::get('/hapuspetugas/{id}', [controllerinput::class,'hapuspetugas'])->name('hapuspetugas');
    Route::get('/meditpetugas', [controllerinput::class,'meditpetugas'])->name('meditpetugas');
    Route::get('/mlaporanpetugas', [controllerinput::class,'mlaporanpetugas'])->name('mlaporanpetugas');
    Route::get('/mhistorypasien', [controllerinput::class,'mhistorypasien'])->name('mhistorypasien');
    Route::get('/minputpasien', [controllerinput::class,'minputpasien'])->name('minputpasien');
    Route::post('/simpanpasien', [controllerinput::class,'simpanpasien'])->name('simpanpasien');
    Route::get('/hapuspasien/{id}', [controllerinput::class,'hapuspasien'])->name('hapuspasien');
    Route::get('/minputpasien1', [controllerinput::class,'minputpasien1'])->name('minputpasien1');
    Route::post('/simpanpasien1', [controllerinput::class,'simpanpasien1'])->name('simpanpasien1');
    Route::get('/hapuspasien1/{id}', [controllerinput::class,'hapuspasien1'])->name('hapuspasien1');
    Route::get('/meditpasien/{id}', [controllerinput::class,'meditpasien'])->name('meditpasien');
    Route::put('/meditpasien1/{id}', [controllerinput::class,'meditpasien1'])->name('meditpasien1');
    Route::get('/logout', [controllerinput::class, 'logout'])->name('logout');


    



    
});
Route::middleware('auth','pengguna')->group(function () {

});





require __DIR__.'/auth.php';
