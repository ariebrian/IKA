@extends('layouts.app')

@section('pageTitle', 'Profil')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <img style="width:100%;" src="{{ asset('icon/default-profile-picture.png') }}" alt="">
        </div>
        <div id="profile-content" class="col-md-9 bg-red">
            <h4>Nama:</h4>
            <p>Ajad Suderajda</p>
            <h4>Tempat, tanggal lahir:</h4>
            <p>Bandung, 26 Agustus 1998</p>
            <h4>Tahun Lulus:</h4>
            <p>2020</p>
            <h4>Judul skripsi:</h4>
            <p>Aplikasi Pemetaan Daerah tempat Penimbunan Sampah di Daerah Kota Bandung Berbasis Android</p>
            <h4>Tempat kerja:</h4>
            <p>PT Ecomindo Sarana Cipta. Jakarta Selatan (Jakarta Raya)</p>
            <h4>Kontak:</h4>
            <p>0815741416242</p>  
        </div>
    </div>
</div>
@endsection