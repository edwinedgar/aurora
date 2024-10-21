@extends('welcome1')
@section('content')

<div class="page-title page-title-small">
            <h2><a href="#" data-back-button><i class="fa fa-arrow-left"></i></a>Kembali</h2>
           
        </div>
        
        <div class="card card-style">
            <div class="content">
            Detail pesanan anda
            </div>
        </div>

       
        
        <div class="card card-style">
            <div class="content">
                <h3>Edwin</h3>
               
                <div class="d-flex pb-2">
                    <div class="mr-auto">
                        <img src="images/pictures/2s.jpg" class="rounded-m shadow-xl" width="110">
                        <a href="#" data-menu="cart-item-edit" class="color-white mt-n5 py-3 pl-2 d-block font-11"></a>
                    </div>
                    <div class="ml-auto w-100 pl-3">
                    <table>    
                        <tr>
                            <td>Tanggal Lahir</td>
                            <td>01-01-1990</td>
                        </tr>
                        <tr>
                            <td>Keluhan</td>
                            <td>Baik</td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>Besuki</td>
                        </tr>
                    </table>
                        <h5 class="font-14 font-600 opacity-80 pb-2">Patikan data diri anda benar</h5>
                        <div class="clearfix"></div>
                        
                       
                    </div>
                </div>
            
                                    
               
            </div>
        </div>
        
        <div class="card card-style">
            <div class="content">
                <h3>Metode Pembayaran</h3>
           
                <div class="input-style input-style-2 mb-3 input-required">
                    <span>Pilih Metode Pembayaran</span>
                    <em><i class="fa fa-angle-down"></i></em>
                    <select class="form-control">
                        <option value="1">Virtual Account</option>
                        <option value="1">Tunai</option>
                       
                    </select>
                </div>
            </div>
        </div>
     


   
              
        <div class="card mt-4 preload-img" data-src="images/pictures/20s.jpg">
            <div class="card-body py-4">
                <h2 class="color-white text-center">Detail Paket</h2>
               
                <div class="card card-style mx-0">
                    <div class="content">
                        <div class="row mb-0">
                           
                            <div class="col-6 text-left"><h6 class="font-600">nama Paket</h6></div>
                            <div class="col-6 text-right"><h6 class="font-600 color-green1-dark">$0<sup>.00</sup></h6></div>
                            <div class="col-12"><div class="divider mt-3"></div></div>
                            <div class="col-6 text-left"><h4>Total Pembayaran</h4></div>
                            <div class="col-6 text-right"><h4>$2133<sup>.98</sup></h4></div>
                        </div>

                        <div class="divider mt-4"></div>

                    
                    </div>
                </div>
            </div>
            <div class="card-overlay bg-highlight opacity-95"></div>
            <div class="card-overlay dark-mode-tint"></div>
        </div>
        
               

        
       
       
            



      

        
        <div id="footer-bar" class="footer-bar-5" style="background-color: #4A89DC" >

<a href="{{route('hasilrekap')}}" class="color-white pt-3 font-900 text-uppercase"><h2 class="color-white">Pesan sekarang</h2></a>


</div>      


@endsection

