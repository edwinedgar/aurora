@extends('welcome1')
@section('content')
<form action="{{ url('meditpasien1/'.$pasienedit->id) }}" method="POST" enctype="multipart/form-data">
{{ csrf_field() }}
{{ method_field('put') }}
<div class="page-title page-title-small">
            <h2><a href="#" data-back-button><i class="fa fa-arrow-left"></i></a>Kembali</h2>
           
        </div>
        
<div class="card card-style">
            <div class="content mb-0">        
                <h3>Data Pasien</h3>
                <p>
                 Edit Pasien
                </p>
                
                      
     

                <div class="input-style input-style-2 input-required">
                   
                    <input class="form-control" type="text" placeholder=""  name="id_user" value="{{$pasienedit->id_user}}" disabled>
                </div>  
                <label for="">Nama</label>
                <div class="input-style input-style-2 input-required">
               
                    <em>(required)</em>
                    <input class="form-control" type="text" placeholder=""  name="nama_pasien" value="{{$pasienedit->nama_pasien}}">
                </div>  
                <label for="">NIK</label>
                <div class="input-style input-style-2 input-required">
                    <em>(required)</em>
                    <input class="form-control" type="text" placeholder=""  name="nik_pasien" value="{{$pasienedit->nik_pasien}}">
                </div>  
                <label for="">Tanggal Lahir</label>
                <div class="input-style input-style-2 input-required">
                    <em>(required)</em>
                    <input class="form-control" type="date" placeholder=""  name="tanggal_lahir" value="{{$pasienedit->tanggal_lahir}}">
                </div>  
                <label for="">Jenis Kelamin</label>
                <div class="input-style input-style-2 input-required">
                    <em>(required)</em>
                    <input class="form-control" type="text" placeholder=""  name="jenis_kelamin" value="{{$pasienedit->jenis_kelamin}}">
                </div> 
                <label for="">Nomor HP</label>
                <div class="input-style input-style-2 input-required">
                    <em>(required)</em>
                    <input class="form-control" type="text" placeholder=""  name="nomor_hp" value="{{$pasienedit->nomor_hp}}">
                </div>  
                 
               

               
              

              
               

                <button href="#" class="btn btn-m mt-2 mb-4 btn-full bg-green1-dark rounded-sm text-uppercase font-900 btn-block">simpan</button>
                
            </div>
        </div>
</from>



@endsection