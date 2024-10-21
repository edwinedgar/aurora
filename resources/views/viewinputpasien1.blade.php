@extends('welcome')
@section('content')
<form action="{{ route('simpanpasien1') }}" method="POST" enctype="multipart/form-data">
@csrf
<div class="card card-style">
            <div class="content mb-0">        
                <h3>Data Pasien</h3>
                <p>
                    Tambahkan atau Edit Pasien
                </p>
                
                      
     

                <div class="input-style input-style-2 input-required">
                    <span class="color-highlight">ID Pasien</span>
                    <em>(required)</em>
                    <input class="form-control" type="text" placeholder=""  name="id_user">
                </div>  

                <div class="input-style input-style-2 input-required">
                    <span class="color-highlight">Nama</span>
                    <em>(required)</em>
                    <input class="form-control" type="text" placeholder=""  name="nama_pasien">
                </div>  
                <div class="input-style input-style-2 input-required">
                    <span class="color-highlight">NIK</span>
                    <em>(required)</em>
                    <input class="form-control" type="text" placeholder=""  name="nik_pasien">
                </div>  
                <div class="input-style input-style-2 input-required">
                    <span class="color-highlight">Tanggal Lahir</span>
                    <em>(required)</em>
                    <input class="form-control" type="date" placeholder=""  name="tanggal_lahir">
                </div>  
                <div class="input-style input-style-2 input-required">
                    <span class="color-highlight">Jenis Kelamin</span>
                    <em>(required)</em>
                    <input class="form-control" type="text" placeholder=""  name="jenis_kelamin">
                </div> 
                <div class="input-style input-style-2 input-required">
                    <span class="color-highlight">Nomor HP</span>
                    <em>(required)</em>
                    <input class="form-control" type="text" placeholder=""  name="nomor_hp">
                </div>  
                 
               

               
              

              
               

                <button href="#" class="btn btn-m mt-2 mb-4 btn-full bg-green1-dark rounded-sm text-uppercase font-900 btn-block">simpan</button>
                
            </div>
        </div>
</from>



@endsection