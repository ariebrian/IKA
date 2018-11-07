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
            <p>{{$mahasiswa->nama}}</p>
            <h4>Tanggal lahir:</h4>
            <p>{{$mahasiswa->mhs_tgl_lahir}}</p>
            <h4>Tahun Lulus:</h4>
            <p>{{$mahasiswa->mhs_thn_lulus}}</p>
            <h4>Judul skripsi:</h4>
            <p>{{$mahasiswa->mhs_skripsi}}</p>
            <h4>Kontak:</h4>
            <p>{{$mahasiswa->mhs_no_wa}}</p>  
            @foreach ($pekerjaan as $work)
                <h4>Tempat kerja:</h4>
                <p>{{$work['tempat_kerja']}}</p>
            @endforeach
        </div>
    </div>
</div>
@endsection