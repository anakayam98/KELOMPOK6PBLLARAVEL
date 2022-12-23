@extends('layouts/app')

@section('content')
<div class="container px-5">
    <div class="row gx-5 align-items-center">
        <div class="col-lg-6">
            <!-- Mashead text and app badges-->
            <div class="mb-5 mb-lg-0 text-center text-lg-start">
                <h1 class="display-1 lh-1 mb-3">Sipris.</h1>
                <p class="lead fw-normal text-muted mb-5">Aplikasi dan Web presensi pegawai menggunakan GPS
                    Location</p>
            </div>
        </div>
        <div class="col-lg-6">
            <img src="{{asset('images/illustration.jpg')}}" alt="" class="img-fluid">
        </div>
    </div>
</div>
@endsection
