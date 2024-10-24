

<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
<title>Aurora | Home Care</title>
<link rel="stylesheet" type="text/css" href="styles/bootstrap.css">
<link rel="stylesheet" type="text/css" href="styles/style.css">
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900|Roboto:300,300i,400,400i,500,500i,700,700i,900,900i&amp;display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="fonts/css/fontawesome-all.min.css">    
<link rel="manifest" href="_manifest.json" data-pwa-version="set_in_manifest_and_pwa_js">
<link rel="apple-touch-icon" sizes="180x180" href="app/icons/5s.png">
<link href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.css" rel="stylesheet">
</head>
    
<body class="theme-light" data-highlight="blue2">
    
<div id="preloader"><div class="spinner-border color-highlight" role="status"></div></div>
    
<div id="page">
    
    <!-- header and footer bar go here-->
    <!-- <div class="header header-fixed header-auto-show header-logo-app">
        <a href="/" class="header-title">AURORA</a>
        <a href="#" data-menu="menu-main" class="header-icon header-icon-1"><i class="fas fa-bars"></i></a>
        <a href="#" data-toggle-theme class="header-icon header-icon-2 show-on-theme-dark"><i class="fas fa-sun"></i></a>
        <a href="#" data-toggle-theme class="header-icon header-icon-2 show-on-theme-light"><i class="fas fa-moon"></i></a>
        <!-- <a href="#" data-menu="menu-highlights" class="header-icon header-icon-3"><i class="fas fa-brush"></i></a> 
    </div>-->
    <div id="footer-bar" class="footer-bar-5">
        
        <!-- <a href="{{url('/index-components')}}"  class="{{ request()->is('index-components') ? 'active-nav' : '' }}"><i data-feather="heart" data-feather-line="1" data-feather-size="21" data-feather-color="red2-dark" data-feather-bg="red2-fade-light"></i><span>Layanan</span></a> -->
        <a href="{{url('/')}}" class="{{ request()->is('/') ? 'active-nav' : '' }}"><i data-feather="home" data-feather-line="1" data-feather-size="21" data-feather-color="blue2-dark" data-feather-bg="blue2-fade-light"></i><span>Beranda</span></a>
      <a href="{{url('/mhistorypasien')}}"  class="{{ request()->is('mhistorypasien') ? 'active-nav' : '' }} "><i data-feather="shopping-cart" data-feather-line="1" data-feather-size="21" data-feather-color="blue2-dark" data-feather-bg="blue2-fade-light" class=""> </i> <i><em class="badge bg-pink1-dark">3</em></i><span>Pesanan</span></a>
       
        <a href="{{url('/index-pages')}}"  class="{{ request()->is('index-pages') ? 'active-nav' : '' }}"><i data-feather="help-circle" data-feather-line="1" data-feather-size="21" data-feather-color="blue2-dark" data-feather-bg="blue2-fade-light"></i><span>Info</span></a>
        <a href="{{url('/index-settings')}}"  class="{{ request()->is('index-settings') ? 'active-nav' : '' }}"><i data-feather="user" data-feather-line="1" data-feather-size="21" data-feather-color="blue2-dark" data-feather-bg="blue2-fade-light"></i><span>Kontak</span></a>
    </div>
    <div class="page-title page-title-large">
            <h2 data-username="{{ Auth::user()->name }}" class="greeting-text"></h2>
            <a href="#" data-menu="menu-main" class="bg-fade-gray1-dark shadow-xl preload-img" data-src="images/avatars/5s.png"></a>
        </div>
        <div class="card header-card shape-rounded" data-card-height="210">
            <div class="card-overlay bg-highlight opacity-95"></div>
            <div class="card-overlay dark-mode-tint"></div>
            <div class="card-bg preload-img" data-src="images/pictures/20s.jpg"></div>
        </div>
 <div id="menu-main"
         class="menu menu-box-right menu-box-detached rounded-m"
         data-menu-width="260"
         data-menu-load="{{url('/menu-main')}}"
         data-menu-active="nav-welcome"
         data-menu-effect="menu-over">  
    </div>
    <div class="page-content">
        
      
        
        @yield('content')
        
        <!-- footer and footer card-->
        <!-- <div class="footer" data-menu-load="menu-footer.html"></div>  
    </div>     -->
    <!-- end of page content-->
    
    
    <!-- <div id="menu-share" 
         class="menu menu-box-bottom menu-box-detached rounded-m" 
         data-menu-load="menu-share.html"
         data-menu-height="420" 
         data-menu-effect="menu-over">
    </div>    
    
    <div id="menu-highlights" 
         class="menu menu-box-bottom menu-box-detached rounded-m" 
         data-menu-load="menu-colors.html"
         data-menu-height="510" 
         data-menu-effect="menu-over">        
    </div> -->
    
   
    
    <!-- Be sure this is on your main visiting page, for example, the index.html page-->
    <!-- Install Prompt for Android -->
 

  

    
</div>    
</div>

<script type="text/javascript" src="scripts/jquery.js"></script>
<script type="text/javascript" src="scripts/bootstrap.min.js"></script>
<script type="text/javascript" src="scripts/custom.js"></script>

<script src="https://cdn.datatables.net/2.1.8/js/dataTables.js" type="text/javascript"></script>
<script>
new DataTable('#example');
</script>


</body>

