<div class="menu-header">
 
</div>

<div class="menu-logo text-center">
    <a href="#"><img class="rounded-circle bg-highlight" width="80" src="images/avatars/5s.png"></a>
    
    <h1 class="pt-3 font-800 font-28 text-uppercase">{{ Auth::user()->name }}</h1>
    <p class="font-11 mt-n2">Hai</p>
 
</div>

<div class="menu-items">
    <h5 class="text-uppercase opacity-20 font-12 pl-3">Menu</h5>
    <a id="nav-welcome" href="/">
        <i data-feather="home" data-feather-line="1" data-feather-size="16" data-feather-color="blue2-dark" data-feather-bg="blue2-fade-dark"></i>
        <span>Beranda</span>
      
        <i class="fa fa-circle"></i>
    </a>

  
@if(Auth::user()->role == 'admin')  
    <a id="#" href="{{ route('minputpasien') }}">
        <i data-feather="settings" data-feather-line="1" data-feather-size="16" data-feather-color="gray2-dark" data-feather-bg="gray2-fade-dark"></i>
        <span>Master Pasien</span>
        <i class="fa fa-circle"></i>
    </a>
    <a id="#" href="{{ route('minputpetugas') }}">
        <i data-feather="settings" data-feather-line="1" data-feather-size="16" data-feather-color="gray2-dark" data-feather-bg="gray2-fade-dark"></i>
        <span>Master Petugas</span>
        <i class="fa fa-circle"></i>
    </a>

    <a id="nav-settings" href="{{ route('inputlayanan') }}">
        <i data-feather="settings" data-feather-line="1" data-feather-size="16" data-feather-color="gray2-dark" data-feather-bg="gray2-fade-dark"></i>
        <span>Master Layanan</span>
        <i class="fa fa-circle"></i>
    </a>
@endif
    <a href="{{ route('logout') }}" class="close-menu">
        <i data-feather="x" data-feather-line="3" data-feather-size="16" data-feather-color="red2-dark" data-feather-bg="red2-fade-dark"></i>
        <span>Keluar</span>
        <i class="fa fa-circle"></i>
    </a>
</div>

<div class="text-center pt-2">
 
</div>
