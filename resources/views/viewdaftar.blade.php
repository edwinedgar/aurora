@extends('welcome1')
@section('content')
<form action="{{ route('postrekap') }}" method="POST" enctype="multipart/form-data">
@csrf
<div class="page-title page-title-small">
            <h2><a href="#" data-back-button><i class="fa fa-arrow-left"></i></a>Kembali</h2>
           
        </div>
        
   
        
        <div class="card card-style">
            <div class="content mb-0">        
                <h3>Data Pesanan</h3>
                <p>
                Masukkan informasi dengan benar agar kami bisa memberikan layanan terbaik
                </p>
          
                <div class="input-style input-style-2 input-required">
                    
                
                    <input class="form-control" type="text" placeholder="dddd" value="{{$detail->nik_pasien}}" disabled>
                </div>   
                
                <div class="input-style input-style-2 has-icon input-required">
                    <i class="input-icon fa fa-user"></i>
                  
                 
                    <input class="form-control" type="name" placeholder="" value="{{$detail['nama_pasien']}}" disabled>
                </div> 

                <div class="input-style input-style-2 input-required">
                    
                    <input class="form-control" type="date" placeholder="" value="{{$detail['tanggallahir_pasien']}}" disabled>
                </div>

                <div class="input-style input-style-2 input-required">
       
                    
                    <input class="form-control" type="text" placeholder="" value="{{$detail['jeniskelamin_pasien']}}" disabled>
                </div>

                <div class="input-style input-style-2 input-required">
                   
                    <input class="form-control" type="tel" placeholder="" value="{{$detail['nomorhp_pasien']}}" disabled>
                </div>


                <div class="input-style input-style-2 input-required">
                    <span class="color-highlight">Masukkan keluhan</span>
                    <em>(required)</em>
                    <input class="form-control" type="text" placeholder="" name="keluhan_pasien">
                </div>
                   
                <div class="input-style input-style-2 input-required">
                    <span class="color-highlight">Alamat</span>
                    <em>(required)</em>
                    <input class="form-control" type="text" placeholder="" name="alamat_pasien">
                </div>
                 

               

               
                


                
            </div>
        </div>

      


<div id="footer-bar"  >


<button href="#" class="btn btn-m mt-2 mb-4 btn-full bg-green1-dark rounded-sm text-uppercase font-900 btn-block">selanjutnya</button>

</div>         
       
</form>

@endsection

