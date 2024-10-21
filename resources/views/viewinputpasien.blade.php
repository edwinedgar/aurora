@extends('welcome')
@section('content')
<form action="{{ route('simpanpasien') }}" method="POST" enctype="multipart/form-data">
@csrf
<div class="card card-style">
            <div class="content mb-0">        
                <h3>Master Pasien</h3>
                <p>
                    Merupakan database Pasien
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
<div class="card card-style">
<div class="content mb-0">    

        <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>ID Pasien</th>
                <th>Nama</th>
                <th>Nik</th>
                <th>Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Nomor HP</th>
                <th>Aksi</th>
              
             
            </tr>
        </thead>
        <tbody>
            @foreach ($inputpasien as $pasiens)
            <tr>
             
                <td>{{$pasiens->id_user}}</td>
                <td>{{$pasiens->nama_pasien}}</td>
                <td>{{$pasiens->nik_pasien}}</td>
                <td>{{$pasiens->tanggal_lahir}}</td>
                <td>{{$pasiens->jenis_kelamin}}</td>
                <td>{{$pasiens->nomor_hp}}</td>

            
               
                <td>  <a href="{{ url('hapuspasien/'.$pasiens->id) }}"><i class="fa fa-trash font-16 color-red2-dark"></a></i></td>
               
            </tr>
           @endforeach
           
        </tbody>
       
    </table>
</div>
<div>


@endsection