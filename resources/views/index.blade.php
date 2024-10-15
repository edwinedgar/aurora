

@extends('welcome')
@section('content')


        <!-- Homepage Slider-->
        <div class="single-slider-boxed text-center owl-no-dots owl-carousel">
            <div class="card rounded-l shadow-l" data-card-height="320">
                <div class="card-bottom">
                    <h1 class="font-24 font-700">Meet Azures</h1>
                    <p class="boxed-text-xl">
                        Azures brings beauty and colors to your Mobile device with a stunning user interface to match.
                    </p>
                </div>
                <div class="card-overlay bg-gradient-fade"></div>
                <div class="card-bg owl-lazy" data-src="images/pictures/17m.jpg"></div>
            </div>
            <div class="card rounded-l shadow-l" data-card-height="320">
                <div class="card-bottom">
                    <h1 class="font-24 font-700">Beyond Powerful</h1>
                    <p class="boxed-text-xl">
                        Azures is a Mobile Web App Kit, fully featured, supporting PWA and Native Dark Mode!
                    </p>
                </div>
                <div class="card-overlay bg-gradient-fade"></div>
                <div class="card-bg owl-lazy" data-src="images/pictures/8m.jpg"></div>
            </div>
            <div class="card rounded-l shadow-l" data-card-height="320">
                <div class="card-bottom">
                    <h1 class="font-24 font-700">A-Level Quality</h1>
                    <p class="boxed-text-xl">
                        We build custom, premium products, that are easy to use and provide all features for you! 
                    </p>
                </div>
                <div class="card-overlay bg-gradient-fade"></div>
                <div class="card-bg owl-lazy" data-src="images/pictures/14m.jpg"></div>
            </div>
        </div>

       

      
            <div class="content mb-0">
                <h4 class="font-700">Solusi sehat di rumah</h4>
                <p class="mt-n2 mb-4">
                    Perawatan kesehatan bersama Aurora Home Care        
                </p>
                <div class="row mb-0">
                    <div class="col-6 pr-1">
                    <a href="#" class="btn btn-m btn-full mb-3 rounded-xs text-uppercase font-900 shadow-s bg-blue2-dark">Layanan Perawat</a>
                    <a href="#" class="btn btn-m btn-full mb-3 rounded-xs text-uppercase font-900 shadow-s bg-blue2-dark">Layanan Laborat</a>
                    </div>
                    <div class="col-6 pl-1 pr-1">
                    <a href="#" class="btn btn-m btn-full mb-3 rounded-xs text-uppercase font-900 shadow-s bg-blue2-dark">Layanan Bidan</a>
                    <a href="#" class="btn btn-m btn-full mb-3 rounded-xs text-uppercase font-900 shadow-s bg-blue2-dark">Telekonsultasi</a>
                    </div>
                  
                </div>
            </div>
            

   
            

        <div class="card mt-4 preload-img" data-src="images/pictures/20s.jpg">
            <div class="card-body">
                <h4 class="color-white">Pesan dengan mudah</h4>
           
                <div class="card card-style ml-0 mr-0 bg-white">
                    <div class="row mt-3 pt-1 mb-3">
                        <div class="col-6">
                            <i class="float-left ml-3 mr-3" 
                               data-feather="globe" 
                               data-feather-line="1" 
                               data-feather-size="35" 
                               data-feather-color="blue2-dark" 
                               data-feather-bg="blue2-fade-light">
                            </i>
                            <h5 class="color-black float-left font-13 font-500 line-height-s pb-3 mb-3">Mobile<br>Website</h5>
                        </div>
                        <div class="col-6">
                            <i class="float-left ml-3 mr-3" 
                               data-feather="smartphone" 
                               data-feather-line="1" 
                               data-feather-size="35" 
                               data-feather-color="dark2-dark" 
                               data-feather-bg="dark2-fade-light">
                            </i>
                            <h5 class="color-black float-left font-13 font-500 line-height-s pb-3 mb-3">Mobile<br>PWA</h5>
                        </div>
                        <div class="col-6">
                            <i class="float-left ml-3 mr-3" 
                               data-feather="user" 
                               data-feather-line="1" 
                               data-feather-size="35" 
                               data-feather-color="brown2-dark" 
                               data-feather-bg="brown2-fade-light">
                            </i>
                            <h5 class="color-black float-left font-13 font-500 line-height-s">Mobile<br>Website</h5>
                        </div>
                        <div class="col-6">
                            <i class="float-left ml-3 mr-3" 
                               data-feather="box" 
                               data-feather-line="1" 
                               data-feather-size="35" 
                               data-feather-color="green1-dark" 
                               data-feather-bg="green1-fade-light">
                            </i>
                            <h5 class="color-black float-left font-13 font-500 line-height-s">Mobile<br>PWA</h5>
                        </div>
                    
                    </div>
                </div>
            </div>
            <div class="card-overlay bg-highlight opacity-95"></div>
            <div class="card-overlay dark-mode-tint"></div>
        </div>
        

        
    
        
  
        
     
    
 

        @endsection