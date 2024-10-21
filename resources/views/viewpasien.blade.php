@extends('welcome1')
@section('content')
      
<div class="page-title page-title-small">
            <h2><a href="" data-back-button><i class="fa fa-arrow-left"></i></a>Kembali</h2>
           
        </div>
        
        <div class="card card-style">
            <div class="content">
            Pilih Pasien atau tambahkan pasien
            </div>
            <div class="content mt-0">
           
                
                <div class="col-12">
                    <a href="{{ route('minputpasien1') }}" class="btn btn-full btn-border btn-m rounded-s text-uppercase font-900 shadow-l border-highlight color-highlight">+ Tambah Pasien</a>
                </div>
            
        </div>
        </div>

      
        
       
       
            
@foreach ($pilihpasien as $pasien)
<div href="{{ url('mdaftar/'.$pasien->id) }}" data-card-height="60" class="card card-style mb-3">

<a href="{{ url('mdaftar/'.$pasien->id) }}" >
            <div class="card-center pl-3 ml-2">
                <i data-feather="user" 
                   data-feather-line="1" 
                   data-feather-size="40" 
                   data-feather-color="blue2-dark" 
                   data-feather-bg="blue2-fade-light">
                </i>
            </div>
            <div class="card-center pl-5 ml-5">
            <p class="pl-2 mt-n2 font-12 color-highlight mb-0">Nama Pasien</p>
                <h4 class="pl-2">{{$pasien->nama_pasien}}</h4>
               
            </div>
            <a/>
         <a href="{{ url('meditpasien/'.$pasien->id) }}">
            <div class="card-center">
                <i class="fas fa-edit float-right color-theme pr-4 "> Edit</i>
            </div>
        </a>

</div>
@endforeach





      
        
        

<div id="footer-bar"  >


<button href="#" class="btn btn-m mt-2 mb-4 btn-full bg-green1-dark rounded-sm text-uppercase font-900 btn-block">selanjutnya</button>

</div>       
       


@endsection
