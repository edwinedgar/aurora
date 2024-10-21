@extends('welcome')
@section('content')
    

        
        
<div class="card card-style">
            <div class="content mb-2">
                <h3>Daftar Pertanyaan</h3>
                <p class="color-highlight font-12 mt-n2 mb-2">Inormasi tentang Aurora Home Care</p>
               

                <div class="divider mt-2 mb-2"></div>

                <div class="d-flex">
                    <div class="pt-1">
                        <h5 data-activate="question-1" class="font-600">Apa itu Aurora Home Caer?</h5>
                    </div>
                    <div class="ml-auto mr-1 pr-2">
                        <div class="custom-control classic-switch">
                            <input type="checkbox" class="classic-input" id="question-1">
                            <label class="custom-control-label" for="question-1"></label>
                            <i class="fa fa-angle-down font-11 color-green1-dark"></i>
                        </div>
                    </div>
                </div>
                <div data-switch="question-1" class="switch-is-unchecked">
                    <p class="pb-3">
                        Aurora Home Care Adalah
                    </p>
                </div>

                <div class="divider mt-2 mb-2"></div>

                <div class="d-flex">
                    <div class="pt-1">
                        <h5 data-activate="question-2" class="font-600">Layanan apa saja yang tersedia ?</h5>
                    </div>
                    <div class="ml-auto mr-1 pr-2">
                        <div class="custom-control classic-switch">
                            <input type="checkbox" class="classic-input" id="question-2">
                            <label class="custom-control-label" for="question-2"></label>
                            <i class="fa fa-angle-down font-11 color-green1-dark"></i>
                        </div>
                    </div>
                </div>
                <div data-switch="question-2" class="switch-is-unchecked">
                    <p class="pb-3">
                        Pelayanan Perawat adalah
                    </p>
                </div>

                <div class="divider mt-2 mb-2"></div>

                <div class="d-flex">
                    <div class="pt-1">
                        <h5 data-activate="question-3" class="font-600">Cara pemesanan ?</h5>
                    </div>
                    <div class="ml-auto mr-1 pr-2">
                        <div class="custom-control classic-switch">
                            <input type="checkbox" class="classic-input" id="question-3">
                            <label class="custom-control-label" for="question-3"></label>
                            <i class="fa fa-angle-down font-11 color-green1-dark"></i>
                        </div>
                    </div>
                </div>
                <div data-switch="question-3" class="switch-is-unchecked">
                    <p class="pb-3">
                       Cara pemesanan Aurora Home Care
                    </p>
                </div>      

                <div class="divider mt-2 mb-2"></div>

                <div class="d-flex">
                    <div class="pt-1">
                        <h5 data-activate="question-4" class="font-600">Berapa biaya layanan ?</h5>
                    </div>
                    <div class="ml-auto mr-1 pr-2">
                        <div class="custom-control classic-switch">
                            <input type="checkbox" class="classic-input" id="question-4">
                            <label class="custom-control-label" for="question-4"></label>
                            <i class="fa fa-angle-down font-11 color-green1-dark"></i>
                        </div>
                    </div>
                </div>
                <div data-switch="question-4" class="switch-is-unchecked">
                    <p>
                       Biaya layanan kami
                    </p>
                </div>

                <div class="divider mt-2 mb-2"></div>

               
            </div>
        </div>
@endsection
       

   