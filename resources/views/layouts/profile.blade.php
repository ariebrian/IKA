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
            <p>{{Carbon\Carbon::parse($mahasiswa->mhs_tgl_lahir)->format('d F Y')}}</p>
            <h4>Alamat:</h4>
            <p>{{$mahasiswa->mhs_alamat_rmh}}</p>
            <h4>Angkatan:</h4>
            <p>{{$mahasiswa->mhs_angkatan}}</p>
            <h4>Bidang Minat:</h4>
            @if ($mahasiswa->mhs_peminatan == 'SI')
            <p>Sistem Informasi dan Rekayasa Perangkat Lunak</p>
            @elseif ($mahasiswa->mhs_peminatan == 'AI')
            <p>Sistem Cerdas dan Sistem Grafika</p>
            @else
            <p>Jaringan Komputer dan Komunikasi Data</p>
            @endif      
            <h4>Tahun Lulus:</h4>
            @if($mahasiswa->mhs_thn_lulus == null)
                <p>Belum Lulus</p>
            @else    
            <p>{{$mahasiswa->mhs_thn_lulus}}</p>
            @endif
            <h4>Judul skripsi:</h4>
            <p>{{$mahasiswa->mhs_skripsi}}</p>
            <h4>Kontak:</h4>
            <p>{{$mahasiswa->mhs_no_wa}}</p>  
            <h4>LinkedIn:</h4>
            <p>{{$mahasiswa->mhs_linkedin}}</p>  
            @foreach ($pekerjaan as $work)
                <h4>Tempat kerja:</h4>
                <p>{{$work['tempat_kerja']}}</p>
            @endforeach
        </div>
    </div>
</div>
@endsection