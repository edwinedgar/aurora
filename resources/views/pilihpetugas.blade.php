@extends('welcome1')
@section('content')
      
<div class="page-title page-title-small">
            <h2><a href="#" data-back-button><i class="fa fa-arrow-left"></i></a>Kembali</h2>
           
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
         
       
</a>

@endforeach


        
        

        

<div id="footer-bar" class="footer-bar-5" style="background-color: #4A89DC" >

<a href="" class="color-white pt-3 font-900 text-uppercase"><h2 class="color-white">Selanjutnya</h2></a>


</div>       


@endsection
