<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controllermain;
use App\Http\Controllers\controllerinput;




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/', function () {
    return view('index');
})->middleware(['auth', 'verified'])->name('index');

Route::middleware('auth')->group(function () {
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
    
});
Route::middleware('auth','pengguna')->group(function () {

});





require __DIR__.'/auth.php';
