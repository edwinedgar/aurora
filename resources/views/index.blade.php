

@extends('welcome')
@section('content')


        <!-- Homepage Slider-->
        <div class="single-slider-boxed text-center owl-no-dots owl-carousel">
            <div class="card rounded-l shadow-l" data-card-height="320">
                <div class="card-bottom">
                    <h1 class="font-24 font-700">Selamat Datang</h1>
                    <p class="boxed-text-xl">
                        Selamat datang silayanan pesanan kesehatan kerumah
                    </p>
                </div>
                <div class="card-overlay bg-gradient-fade"></div>
                <div class="card-bg owl-lazy" data-src="images/pictures/2.jpg"></div>
            </div>
            <div class="card rounded-l shadow-l" data-card-height="320">
                <div class="card-bottom">
                    <h1 class="font-24 font-700">Informasi 1</h1>
                    <p class="boxed-text-xl">
                        Merupaka informasi satu
                    </p>
                </div>
                <div class="card-overlay bg-gradient-fade"></div>
                <div class="card-bg owl-lazy" data-src="images/pictures/3.jpg"></div>
            </div>
            <div class="card rounded-l shadow-l" data-card-height="320">
                <div class="card-bottom">
                    <h1 class="font-24 font-700">informasi 2</h1>
                    <p class="boxed-text-xl">
                        Merupakan Informasi dua
                    </p>
                </div>
                <div class="card-overlay bg-gradient-fade"></div>
                <div class="card-bg owl-lazy" data-src="images/pictures/4.jpg"></div>
            </div>
        </div>

@if(Auth::user()->role == 'petugas')      
        <div class="card card-style">
            <div class="content">
         <div class="row">
            <div class="col-6">
                    <a href="{{route('statuspetugas')}}" class="btn btn-full btn-border btn-m rounded-s text-uppercase font-900 shadow-l border-highlight color-highlight">Status Petugas</a>
                </div>
                <div class="col-6">
                    <a href="{{route('statuspetugas')}}" class="btn btn-full btn-m rounded-s text-uppercase font-900 shadow-xl bg-highlight"> <i><em class="badge bg-pink1-dark">3</em></i>Pesanan Petugas</a>
                </div>
                </div>         
            </div>
        </div>
@endif

      
            <div class="content mb-0">
                <h4 class="font-700">Solusi sehat di rumah</h4>
                <p class="mt-n2 mb-4">
                    Perawatan kesehatan bersama Aurora Home Care        
                </p>
                
                <div class="row mb-0">
                    <div class="col-6 pr-1">
                    <a href="{{ url('mlayanan/perawat') }}" class="btn btn-m btn-full mb-3 rounded-xs text-uppercase font-900 shadow-s bg-blue2-dark">Layanan Perawat</a>
                    <a href="#" class="btn btn-m btn-full mb-3 rounded-xs text-uppercase font-900 shadow-s bg-blue2-dark">Layanan Laborat</a>
                    </div>
                    <div class="col-6 pr-1">
                    <a href="{{ url('mlayanan/bidan') }}" class="btn btn-m btn-full mb-3 rounded-xs text-uppercase font-900 shadow-s bg-blue2-dark">Layanan Bidan</a>
                    <a href="#" class="btn btn-m btn-full mb-3 rounded-xs text-uppercase font-900 shadow-s bg-blue2-dark">Telekonsultasi</a>
                    </div>
                  
                </div>
            </div>
            

   
            

        <div class="card mt-4 preload-img" data-src="images/pictures/20s.jpg">
            <div class="card-body">
               
           
                <div class="card card-style ml-0 mr-0 bg-white">
                    <div class="row mt-3 pt-1 mb-3">
                        <div class="col-6">
                            <i class="float-left ml-3 mr-3" 
                               data-feather="home" 
                               data-feather-line="1" 
                               data-feather-size="35" 
                               data-feather-color="blue2-dark" 
                               data-feather-bg="white2-fade-light">
                            </i>
                            <h5 class="color-black float-left font-13 font-500 line-height-s pb-3 mb-3">Dirumah <br>Saja</h5>
                        </div>
                        <div class="col-6">
                            <i class="float-left ml-3 mr-3" 
                               data-feather="user-check" 
                               data-feather-line="1" 
                               data-feather-size="35" 
                               data-feather-color="blue2-dark" 
                               data-feather-bg="white2-fade-light">
                            </i>
                            <h5 class="color-black float-left font-13 font-500 line-height-s pb-3 mb-3">Tenaga <br> Profesional</h5>
                        </div>
                        <div class="col-6">
                            <i class="float-left ml-3 mr-3" 
                               data-feather="smartphone" 
                               data-feather-line="1" 
                               data-feather-size="35" 
                               data-feather-color="blue2-dark" 
                               data-feather-bg="white2-fade-light">
                            </i>
                            <h5 class="color-black float-left font-13 font-500 line-height-s">Pesan <br> Mudah</h5>
                        </div>
                        <div class="col-6">
                            <i class="float-left ml-3 mr-3" 
                               data-feather="award" 
                               data-feather-line="1" 
                               data-feather-size="35" 
                               data-feather-color="blue2-dark" 
                               data-feather-bg="white2-fade-light">
                            </i>
                            <h5 class="color-black float-left font-13 font-500 line-height-s">Layanan <br> Terbaik</h5>
                        </div>
                    
                    </div>
                </div>
            </div>
            <div class="card-overlay bg-highlight opacity-95"></div>
            <div class="card-overlay dark-mode-tint"></div>
        </div>
        

        
    
        
  
        
     
    
 

        @endsection