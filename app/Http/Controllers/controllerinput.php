<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\modellayanan;

class controllerinput extends Controller
{
    public function inputlayanan(){
        $layanan=modellayanan::get();
        
        return view ('viewlayanan',['layanan'=>$layanan]);  
    }
    public function simpanlayanan(Request $request){
        $layanan=modellayanan::create([ 
            'kode_layanan'=>$request->kodelayanan,
            'kategori_layanan'=>$request->kategorilayanan,
            'jenis_layanan'=>$request->jenislayanan,
            'tarif_layanan'=>$request->tariflayanan,
        ]);
        return redirect('/minputlayanan');      
    }
    public function layananhapus(Request $request,$id){
  
        modellayanan::where('id',$id)->delete();
        return redirect('/minputlayanan'); 
    }
}
