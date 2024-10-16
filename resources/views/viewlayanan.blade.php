@extends('welcome')
@section('content')
<form action="{{ route('simpanlayanan') }}" method="POST" enctype="multipart/form-data">
@csrf
<div class="card card-style">
            <div class="content mb-0">        
                <h3>Master Layanan</h3>
                <p>
                    Merupakan database paket layanan
                </p>
                
                      
     

                <div class="input-style input-style-2 input-required">
                    <span class="color-highlight">Kode Layanan</span>
                    <em>(required)</em>
                    <input class="form-control" type="text" placeholder=""  name="kodelayanan">
                </div>  
                <div class="input-style input-style-2 input-required">
                    <span>Kategori Layanan</span>
                    <em><i class="fa fa-angle-down"></i></em>
                    <select class="form-control" name="kategorilayanan">
                        <option value="default" disabled selected>Pilih Kategori</option>
                        <option value="perawat">pelayanan perawat</option>
                        <option value="bidan" >Pelayanan Bidan</option>
                       
                    </select>
                </div>
                <div class="input-style input-style-2 input-required">
                    <span class="color-highlight">Jenis Layanan</span>
                    <em>(required)</em>
                    <input class="form-control" type="text" placeholder="" name="jenislayanan">
                </div>

              
                <div class="input-style input-style-2 input-required">
                    <span>Tarif Layanan</span>
                    <em>(required)</em>
                    <input class="form-control" type="text" placeholder="" name="tariflayanan"> 
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
                <th>Kode layanan</th>
                <th>Kategori Layanan</th>
                <th>Jenis Layanan</th>
                <th>Tarif Layanan</th>
                <th>Aksi</th>
             
            </tr>
        </thead>
        <tbody>
            @foreach ($layanan as $layanans)
            <tr>
                <td>{{$layanans->kode_layanan}}</td>
                <td>{{$layanans->kategori_layanan}}</td>
                <td>{{$layanans->jenis_layanan}}</td>
                <td>{{$layanans->tarif_layanan}}</td>
                <td>  <a href="{{ url('mhapuslayanan/'.$layanans->id) }}"><i class="fa fa-trash font-16 color-red2-dark"></a></i></td>
               
            </tr>
           @endforeach
           
        </tbody>
       
    </table>
</div>
<div>
@endsection  