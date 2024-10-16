
@extends('welcomelogin')
@section('content')
<form method="POST" action="{{ route('login') }}">
@csrf
<div class="page-title page-title-small">
            <h2><a href="#" data-back-button></a>Masuk</h2>
          
        </div>
        <div class="card header-card shape-rounded" data-card-height="150">
            <div class="card-overlay bg-highlight opacity-95"></div>
            <div class="card-overlay dark-mode-tint"></div>
            <div class="card-bg preload-img" data-src="images/pictures/20s.jpg"></div>
        </div>
        
        <div class="card card-style">
            <div class="content mt-2 mb-0">
                <div class="input-style has-icon input-style-1 input-required pb-1">
                    <i class="input-icon fa fa-user color-theme"></i>
                    <span>Email</span>
                    <em>(required)</em>
                    <input type="email" placeholder="Email" name="email">
                </div> 
                <div class="input-style has-icon input-style-1 input-required pb-1">
                    <i class="input-icon fa fa-lock color-theme"></i>
                    <span>Password</span>
                    <em>(required)</em>
                    <input type="password" placeholder="Password" name="password">
                </div> 

                <button href="#" class="btn btn-m mt-2 mb-4 btn-full bg-green1-dark rounded-sm text-uppercase font-900 btn-block">Masuk</button>

                <div class="divider"></div>

            

                <div class="d-flex">
                    <div class="w-50 font-11 pb-2 color-theme opacity-60 pb-3 text-left"><a href="{{url('/register')}}" class="color-theme">Belum Punya Akun? Daftar</a></div>
                    <div class="w-50 font-11 pb-2 color-theme opacity-60 pb-3 text-right"><a href="#" class="color-theme">Lupa Password</a></div>
                </div>
            </div>
            
        </div>

</form>  
@endsection