@extends('welcome')
@section('content')
<form action="{{ route('simpanpetugas') }}" method="POST" enctype="multipart/form-data">
@csrf
<div class="card card-style">
            <div class="content mb-0">        
                <h3>Master Petugas</h3>
                <p>
                    Merupakan database Tenaga Medis
                </p>
                
                      
     

                <div class="input-style input-style-2 input-required">
                    <span class="color-highlight">ID Petugas</span>
                    <em>(required)</em>
                    <input class="form-control" type="text" placeholder=""  name="id_petugas">
                </div>  

                <div class="input-style input-style-2 input-required">
                    <span class="color-highlight">Nama</span>
                    <em>(required)</em>
                    <input class="form-control" type="text" placeholder=""  name="nama_petugas">
                </div>  
                <div class="input-style input-style-2 input-required">
                    <span class="color-highlight">NIK</span>
                    <em>(required)</em>
                    <input class="form-control" type="text" placeholder=""  name="nik_petugas">
                </div>  
                <div class="input-style input-style-2 input-required">
                    <span class="color-highlight">Tanggal Lahir</span>
                    <em>(required)</em>
                    <input class="form-control" type="date" placeholder=""  name="tanggallahir_petugas">
                </div>  
                <div class="input-style input-style-2 input-required">
                    <span class="color-highlight">Jenis Kelamin</span>
                    <em>(required)</em>
                    <input class="form-control" type="text" placeholder=""  name="jeniskelamin_petugas">
                </div> 
                <div class="input-style input-style-2 input-required">
                    <span class="color-highlight">Nomor STR</span>
                    <em>(required)</em>
                    <input class="form-control" type="text" placeholder=""  name="str_petugas">
                </div>  
                 
                <div class="input-style input-style-2 input-required">
                    <span>Kategori petugas</span>
                    <em><i class="fa fa-angle-down"></i></em>
                    <select class="form-control" name="kategori_petugas">
                        <option value="default" disabled selected>Pilih Kategori</option>
                        <option value="perawat">perawat</option>
                        <option value="bidan" >Bidan</option>
                    </select>
                </div>

                <div class="input-style input-style-2 input-required">
                    <span>Jadwal Petugas</span>
                    <em><i class="fa fa-angle-down"></i></em>
                    <select class="form-control" name="status_petugas">
                        <option value="default" disabled selected>Pilih</option>
                        <option value="1">Aktif</option>
                        <option value="0" >Tidak Aktif</option>
                    </select>
                </div>
              

              
               

                <button href="#" class="btn btn-m mt-2 mb-4 btn-full bg-green1-dark rounded-sm text-uppercase font-900 btn-block">simpan</button>
                
            </div>
        </div>
</from>
<div class="card card-style">
<div class="content mb-0">    

        <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>ID Petugas</th>
                <th>Nama</th>
                <th>Nik</th>
                <th>Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>STR Petugas</th>
                <th>Kategori</th>
                <th>Status Petugas</th>
                <th>Aksi</th>
             
            </tr>
        </thead>
        <tbody>
            @foreach ($petugas as $petugass)
            <tr>
             
                <td>{{$petugass->id_petugas}}</td>
                <td>{{$petugass->nama_petugas}}</td>
                <td>{{$petugass->nik_petugas}}</td>
                <td>{{$petugass->tanggallahir_petugas}}</td>
                <td>{{$petugass->jeniskelamin_petugas}}</td>
                <td>{{$petugass->str_petugas}}</td>
                <td>{{$petugass->kategori_petugas}}</td>
                <td>{{$petugass->status_petugas}}</td>
               
                <td>  <a href="{{ url('hapuspetugas/'.$petugass->id) }}"><i class="fa fa-trash font-16 color-red2-dark"></a></i></td>
               
            </tr>
           @endforeach
           
        </tbody>
       
    </table>
</div>
<div>


@endsection