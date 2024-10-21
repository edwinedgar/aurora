<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\URL;
use Illuminate\Http\Request;
use App\Models\modellayanan;
use App\Models\dbdaftar;
use App\Models\dbpasien;
use App\Models\dbpetugas;
use Session;



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
    public function minputpetugas(){
        $petugas=dbpetugas::get();
        return view('minputpetugas',['petugas'=>$petugas]);

    }
    public function simpanpetugas(Request $request){
        $petugas=dbpetugas::create([ 
            'id_petugas'=>$request->id_petugas,
            'nama_petugas'=>$request->nama_petugas,
            'nik_petugas'=>$request->nik_petugas,
            'tanggallahir_petugas'=>$request->tanggallahir_petugas,
            'jeniskelamin_petugas'=>$request->jeniskelamin_petugas,
            'str_petugas'=>$request->str_petugas,
            'kategori_petugas'=>$request->kategori_petugas,
            'status_petugas'=>$request->status_petugas,

           
        ]);
        return redirect('/minputpetugas');      
    }
    public function hapuspetugas(Request $request,$id){
  
        dbpetugas::where('id',$id)->delete();
        return redirect('/minputpetugas'); 
    }

    public function hapuspasien(Request $request,$id){
  
        dbpasien::where('id',$id)->delete();
        return redirect('/minputpasien'); 
    }
    public function simpanpasien(Request $request){
        $pasien=dbpasien::create([ 
            'id_user'=>$request->id_user,
            'nama_pasien'=>$request->nama_pasien,
            'nik_pasien'=>$request->nik_pasien,
            'tanggal_lahir'=>$request->tanggal_lahir,
            'nomor_hp'=>$request->nomor_hp,
            'jenis_kelamin'=>$request->jenis_kelamin,
        ]);
        return redirect('/minputpasien');      
    }
    

    public function minputpasien(){
        $inputpasien=dbpasien::get();
        return view('viewinputpasien',['inputpasien'=>$inputpasien]);
    }

    public function hapuspasien1(Request $request,$id){
  
        dbpasien::where('id',$id)->delete();
        return redirect('/mpasien'); 
    }
    public function simpanpasien1(Request $request){
       
        $pasien=dbpasien::create([ 
            'id_user'=>$request->id_user,
            'nama_pasien'=>$request->nama_pasien,
            'nik_pasien'=>$request->nik_pasien,
            'tanggal_lahir'=>$request->tanggal_lahir,
            'nomor_hp'=>$request->nomor_hp,
            'jenis_kelamin'=>$request->jenis_kelamin,
        ]);
      
        return redirect(session('previous-url'));
        
    }
    

    public function minputpasien1(){
        $inputpasien=dbpasien::get();
        // $link=URL::current();
        // dd($link);
        // dd(session::get('previous-url'));
        return view('viewinputpasien1',['inputpasien'=>$inputpasien]);
    }
    

    public function daftar(Request $request,$daftarpasien){
        $product = $request->Session()->get('product');
        
        $datapasien=dbpasien::where('id',$daftarpasien)->get();
        foreach ($datapasien as $data){
            $nik=$data->nik_pasien;
            $nama=$data->nama_pasien;
            $tanggal=$data->tanggal_lahir;
            $hp=$data->nomor_hp;
            $jenis=$data->jenis_kelamin;
        }; 
        $product->fill(['nik_pasien' => $nik,'nama_pasien' => $nama,'tanggallahir_pasien' => $tanggal,'nomorhp_pasien' => $hp,'jeniskelamin_pasien' => $jenis]);
        $request->Session()->put('product',$product);

    // dd(Session::get('product'));
        $detail=Session::get('product');
       
        // dd($detail);
        return view('viewdaftar',['detail'=>$detail]);
    }
    public function pasien(Request $request,$jenislayanan){
        
        $product = $request->session()->get('product');
        if(empty($request->Session()->get('product'))){
            $product=new dbdaftar();
            $datalayanan=modellayanan::where('id',$jenislayanan)->get();
                foreach ($datalayanan as $data){
                    $jenis1=$data->jenis_layanan;
                    $jenis2=$data->tarif_layanan;
                };   
                $product->fill(['layanan_pasien' => $jenis1,'tarif_pasien' => $jenis2]);
                $request->Session()->put('product',$product);
        //    dd(Session::get('product'));
        }else{
            $datalayanan=modellayanan::where('id',$jenislayanan)->get();
            
            foreach ($datalayanan as $data){
                $jenis1=$data->jenis_layanan;
                $jenis2=$data->tarif_layanan;
            };   
            $product->fill(['jenis_layanan' => $jenis1,'tarif_layanan' => $jenis2]);
            $request->Session()->put('product',$product);
        //    dd(Session::get('product'));
            // $request->Session()->put('product', ['layanan_pasien' => $jenis1,'tarif_pasien' => $jenis2]);

        }  
        
        $pilihpasien=dbpasien::get();
        session(['previous-url' => request()->url()]);
        
      
    // dd(Session::get('product'));
    // $request->Session()->forget('product');
        return view('viewpasien',['pilihpasien'=>$pilihpasien]);
    }

    public function layanan(Request $request,$layanan){
        $layanankategori=modellayanan::where('kategori_layanan',$layanan)->get();
        if ($layanan=='perawat') {
            $request->Session()->put('kategori','perawat');
        }
        if ($layanan=='bidan'){
            $request->Session()->put('kategori','bidan');
        }
        // $request->Session()->forget('product');
        // $request->Session()->forget('nama');
        // dd(Session::get('kategori'));
        return view('viewlayananpasien',['layanankategori'=>$layanankategori]);
       
    }
    public function postlayanan(Request $request,$jenislayanan){
    dd($jenislayanan);


      

        return redirect('/mpasien');
    }
    public function rekap(){


        return view('viewrekap');
    }
    public function postrekap(Request $request){
        
        $product = $request->Session()->get('product');
       
            $keluhan=$request->keluhan_pasien;
            $alamat=$request->alamat_pasien;
            
            $product->fill(['keluhan_pasien' => $keluhan,'alamat_pasien' => $alamat,'statuspembayaran_pasien'=>'unpair']);
           
           
        $request->Session()->put('product',$product);
    
        // dd(Session::get('product'));

    return redirect()->route('pilihpetugas');
       
    }
    public function hasilrekap(Request $request){
        $product = $request->Session()->get('product');
        // dd(Session::get('product'));
        $product->save();

        $request->session()->forget('product');
        $request->session()->forget('kategori');
        $request->session()->forget('previous-url');

        return redirect('/');      
    }
    
    public function meditpasien (Request $request,$id){
        $pasienedit=dbpasien::where('id',$id)->first();
// dd($pasienedit);

        return view('vieweditpasien',['pasienedit'=>$pasienedit]);

    }
    public function meditpasien1 (Request $request,$id){
        $pasienedit=dbpasien::where('id',$id)->first();
        $pasienedit=dbpasien::find($id);
      $pasienedit->nama_pasien = $request->input('nama_pasien');
      $pasienedit->nik_pasien = $request->input('nik_pasien');
      $pasienedit->tanggal_lahir = $request->input('tanggal_lahir');
      $pasienedit->jenis_kelamin = $request->input('jenis_kelamin');
      $pasienedit->nomor_hp = $request->input('nomor_hp');
     
      $pasienedit->update();
// dd($pasienedit);

return redirect(session('previous-url'));

    }
    public function pilihpetugas(){
        $kategori=Session::get('kategori');
        $petugas=dbpetugas::where('kategori_petugas',$kategori)->get();

        return view('pilihpetugas',['petugas'=>$petugas]);
    }
    public function pilihpetugas1 (Request $request,$petugas){
        // $idpetugas=dbpetugas::where('id_petugas',$petugas)->first();
        // $idpetugas1=$idpetugas->id_petugas;
        $product = $request->Session()->get('product');
          
        $product->fill(['id_petugas' => $petugas]);
        $request->Session()->put('product',$product);
    //    dd(Session::all());
        return redirect()->route('rekap');
    }
    
    public function meditpetugas(){
        return view('meditpetugas');
    }
    public function mhistorypasien(){
        $history=dbdaftar::get();


        return view('mhistorypasien',['history'=>$history]);
    }
    public function mlaporanpetugas(){
        return view('mlaporanpetugas');
    }
    
}
