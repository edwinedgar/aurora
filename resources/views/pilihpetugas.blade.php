@extends('welcome1')
@section('content')
      
<div class="page-title page-title-small">
            <h2><a href="{{ url()->previous() }}" data-back-button><i class="fa fa-arrow-left"></i></a>Kembali</h2>
           
        </div>
        
        <div class="card card-style">
            <div class="content">
            Pilih Petugas yang Aktif
            </div>
            
        </div>

      
        
       
       
@foreach ($petugas as $petugas1)  

<a href="{{ url('mpilihpetugas1/'.$petugas1->id_petugas) }}" data-card-height="60" class="card card-style mb-3">
       
       
            <div class="card-center pl-3 ml-2">
                <i data-feather="user-check" 
                   data-feather-line="1" 
                   data-feather-size="40" 
                   data-feather-color="blue2-dark" 
                   data-feather-bg="blue2-fade-light">
                </i>
            </div>
            <div class="card-center pl-5 ml-5">
                <h4 class="pl-2">{{$petugas1->kategori_petugas}} {{$petugas1->nama_petugas}}</h4>
                <p class="pl-2 mt-n2 font-12 color-highlight mb-0">{{$petugas1->jeniskelamin_petugas}}</p>
            </div>
            <div class="card-center">
                <i class=" float-right color-theme pr-4 "> <input id="box3-fac-radio" type="radio" value="" name="id_layanan" value="1"></i>
            </div>
       
</a>

@endforeach


        
        

        

<div id="footer-bar" class="footer-bar-5" style="background-color: #D770AD" >

<a href="" data-toast="notification-1"  class="color-white pt-3 font-900 text-uppercase"><h2 class="color-white">Selanjutnya</h2></a>


</div>  

<div id="notification-1" data-dismiss="notification-1" data-delay="3000" data-autohide="true" class="notification notification-ios bg-dark1-dark">
      
<span class="notification-icon">
            <i class="fa fa-bell"></i>
            <em>Silahkan pilih petugas kesehatan</em>
            <i data-dismiss="notification-1" class="fa fa-times-circle"></i>
        </span>
    </div>


@endsection
