@extends('welcome')
@section('content')
<div class="card card-style">
            <div class="content">
         @if ($status->status_petugas=='1')
            <div class="col-12">
                    <a href="{{route('ubahstatus')}}" class="btn btn-full btn-m rounded-s text-uppercase font-900 shadow-xl bg-highlight bg-red2-light">Status Ofline</a>
                </div>
        @elseif  ($status->status_petugas=='0')
        <div class="col-12">
                    <a href="{{route('ubahstatus')}}" class="btn btn-full btn-m rounded-s text-uppercase font-900 shadow-xl bg-highlight bg-green2-light">Status Online</a>
                </div>
        @endif

            </div>
        </div>

@endsection