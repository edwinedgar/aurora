@extends('welcome')
@section('content')

<div class="card card-style">
            <div class="content">
            Daftar Pesanan
            </div>
            
        </div>

       
       
        
        @foreach ($history as $kategori)


<a href="#" data-card-height="60" class="card card-style mb-3">
       
            <div class="card-center pl-3 ml-2">
                <i data-feather="heart" 
                   data-feather-line="1" 
                   data-feather-size="40" 
                   data-feather-color="blue2-dark" 
                   data-feather-bg="blue2-fade-light">
                </i>
            </div>
            <div class="card-center pl-5 ml-5">
                <h4 class="pl-2" name="layanan_pasien">{{$kategori->nama_pasien}}</h4>
                <p class="pl-2 mt-n2 font-12 color-highlight mb-0" name="tarif_pasien">Status Pembayaran : {{$kategori->statuspembayaran_pasien}} </p>
            </div>
         
            <div class="card-center">
                  </div>
</a>

@endforeach

@endsection