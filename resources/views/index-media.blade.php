@extends('welcome')
@section('content')
    
    

        
    
        
        <div class="card card-style">
            <div class="content">
                Portfolios or Galleries where you can show off your awesome projects. We've included a tone of userful and beautiful styles.
            </div>
        </div>
        
       
        <a href="index-components.html" data-card-height="120" class="card card-style mb-3">
            <div class="card-center pl-3 ml-2">
                <i data-feather="camera" 
                   data-feather-line="1" 
                   data-feather-size="50" 
                   data-feather-color="blue2-dark" 
                   data-feather-bg="blue2-fade-light">
                </i>
            </div>
            <div class="card-center pl-5 ml-5">
                <h4 class="pl-2">Galleries</h4>
                <p class="pl-2 mt-n2 font-12 color-highlight mb-0">Focus on your Images</p>
            </div>
            <div class="card-center opacity-30">
                <i class="fa fa-arrow-right opacity-50 float-right color-theme pr-3"></i>
            </div>
        </a>

        <a href="index-components.html" data-card-height="120" class="card card-style mb-3">
            <div class="card-center pl-3 ml-2">
                <i data-feather="image" 
                   data-feather-line="1" 
                   data-feather-size="50" 
                   data-feather-color="green1-dark" 
                   data-feather-bg="green1-fade-light">
                </i>
            </div>
            <div class="card-center pl-5 ml-5">
                <h4 class="pl-2">Portfolios</h4>
                <p class="pl-2 mt-n2 font-12 color-highlight mb-0">Focus on your Projects</p>
            </div>
            <div class="card-center opacity-30">
                <i class="fa fa-arrow-right opacity-50 float-right color-theme pr-3"></i>
            </div>
        </a>

        <a href="index-components.html" data-card-height="120" class="card card-style">
            <div class="card-center pl-3 ml-2">
                <i data-feather="zap" 
                   data-feather-line="1" 
                   data-feather-size="50" 
                   data-feather-color="yellow1-dark" 
                   data-feather-bg="yellow1-fade-light">
                </i>
            </div>
            <div class="card-center pl-5 ml-5">
                <h4 class="pl-2">Instants</h4>
                <p class="pl-2 mt-n2 font-12 color-highlight mb-0">Tap & Instantly Open</p>
            </div>
            <div class="card-center opacity-30">
                <i class="fa fa-arrow-right opacity-50 float-right color-theme pr-3"></i>
            </div>
        </a>

        <div class="card card-style">
            <div class="content">
                <h5>Can I build my own?</h5>
                <p>Of course! Our galleries use a Lightbox Plugin that has been adapted to be super easy to use! Any element you can tap/click on can be converted to a gallery or a portfolio. It's that easy!</p>
            </div>
        </div>
       
  
 @endsection