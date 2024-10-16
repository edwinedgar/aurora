
@extends('welcomelogin')
@section('content')
<form method="POST" action="{{ route('register') }}">
@csrf
<div class="page-title page-title-small">
            <h2><a href="#" data-back-button><i class="fa fa-arrow-left"></i></a>Daftar</h2>           
</div>
        <div class="card header-card shape-rounded" data-card-height="150">
            <div class="card-overlay bg-highlight opacity-95"></div>
            <div class="card-overlay dark-mode-tint"></div>
            <div class="card-bg preload-img" data-src="images/pictures/20s.jpg"></div>
        </div>
        
        <div class="card card-style">
            <div class="content mb-0 mt-1">
                <div class="input-style has-icon input-style-1 input-required">
                    <i class="input-icon fa fa-user color-theme"></i>
                    <span>Username</span>
                    <em>(required)</em>
                    <input type="name" placeholder="Username" name="name">
                </div> 
                <div class="input-style has-icon input-style-1 input-required">
                    <i class="input-icon fa fa-at color-theme"></i>
                    <span>Email</span>
                    <em>(required)</em>
                    <input type="email" placeholder="Email" name="email">
                </div> 
                <div class="input-style has-icon input-style-1 input-required">
                    <i class="input-icon fa fa-lock color-theme"></i>
                    <span>Password</span>
                    <em>(required)</em>
                    <input type="password" placeholder="Password" name="password">
                </div> 
                <div class="input-style has-icon input-style-1 input-required mb-4">
                    <i class="input-icon fa fa-lock color-theme"></i>
                    <span>Password</span>
                    <em>(required)</em>
                    <input type="password" placeholder="ulangi Password" name="password_confirmation">
                </div> 

                <button class="btn btn-m btn-full rounded-sm shadow-l bg-green1-dark text-uppercase font-900">Daftar</button>

                <div class="divider"></div>

                <p class="text-center">
                    <a href="{{url('/login')}}" class="color-highlight opacity-80 font-12">Sudah Punya Akun? Masuk</a>
                </p>

            </div>
        </div>
</form>
@endsection