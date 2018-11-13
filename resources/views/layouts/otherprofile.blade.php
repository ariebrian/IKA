@extends('layouts.app')

@section('pageTitle', 'Profil')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="row">
                <img style="width:100%;" src="{{ asset('icon/default-profile-picture.png') }}" alt="">
            </div>
            <!-- <div class="row">
                <center>
                    <a href="/edit/{{auth()->id()}}" class="btn btn-primary">Perbarui Profil</a>
                </center>
            </div>
            <br>
            <div class="row">
                <center>
                    <a href="{{ route('edit-work') }}" class="btn btn-secondary">Perbarui Pekerjaan</a>
                </center>
            </div> -->
        </div>
        <div id="profile-content" class="col-md-9 bg-red">
        </a>
            <br>
            <br>
            <h4>Nama:</h4>
            <p>{{$mahasiswa->nama}}</p>
            <h4>Jenis Kelamin:</h4>
            <p>{{$mahasiswa->gender}}</p>
            <h4>Tanggal lahir:</h4>
            <p>{{Carbon\Carbon::parse($mahasiswa->tgl_lahir)->format('d F Y')}}</p>
            <h4>Alamat:</h4>
            <p>{{$mahasiswa->alamat_rmh}}</p>
            <h4>Angkatan:</h4>
            <p>{{$mahasiswa->angkatan}}</p>
            <h4>Bidang Minat:</h4>
            @if ($mahasiswa->peminatan == 'SI')
            <p>Sistem Informasi dan Rekayasa Perangkat Lunak</p>
            @elseif ($mahasiswa->peminatan == 'AI')
            <p>Sistem Cerdas dan Sistem Grafika</p>
            @elseif ($mahasiswa->peminatan == 'JK')
            <p>Jaringan Komputer dan Komunikasi Data</p>
            @else
            <p>Belum Memilih Peminatan</p>
            @endif      
            <h4>Tahun Lulus:</h4>
            @if($mahasiswa->thn_lulus == null)
                <p>Belum Lulus</p>
            @else    
            <p>{{$mahasiswa->thn_lulus}}</p>
            @endif
            @if($mahasiswa->skripsi == null)
            @else
                <h4>Judul skripsi:</h4>
                <p>{{$mahasiswa->skripsi}}</p>
            @endif
            <h4>Kontak:</h4>
            <p>{{$mahasiswa->no_wa}}</p>  
            <h4>LinkedIn:</h4>
            <p>{{$mahasiswa->linkedin}}</p>  
            @foreach ($pekerjaan as $work)
                <h4>Tempat kerja:</h4>
                <p>{{$work['tempat_kerja']}}</p>
            @endforeach
        </div>
    </div>
</div>
@endsection