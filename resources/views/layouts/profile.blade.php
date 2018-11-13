@extends('layouts.app')

@section('pageTitle', 'Profil')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="card" style="width: 100%; background-color: #3e3e3e;">
                <img class="card-img-top" style="width:100%;" src="{{ asset('icon/default-profile-picture.png') }}" alt="Card image cap">
                <center>
                    <h4 class="card-title" style="color: #ffce22;">{{$mahasiswa->nama}}</h4>
                    <p class="card-text" style="color: #ffce22;">{{$mahasiswa->no_identitas}}</p>
                </center>
                <div class="card-body">
                    <center>
                        <a href="/edit/{{auth()->id()}}" class="btn btn-warning" style="width: 10rem;">Perbarui Profil</a>
                    </center>
                    <br>
                    <center>
                        <a href="{{ route('edit-work') }}" class="btn btn-warning" style="width: 10rem;">Perbarui Pekerjaan</a>
                    </center>
                    @if ($mahasiswa->linkedin == NULL)
                    @else
                    <br>
                    <center>
                        <a href="{{$mahasiswa->linkedin}}" class="btn btn-primary" style="width: 10rem;" target="_blank">Menuju LinkedIn</a>
                    </center>
                    @endif
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="card" style="width: 100%; background-color: #ffce22;">
                <div class="card-header"><h4>{{ __('PROFIL SAYA') }}</h4></div>
                <div class="card-body" id="profile-content">
                    <div class="row">
                        <h5>Tanggal Lahir:</h5>
                    </div>
                    <div class="row">
                        <p>{{Carbon\Carbon::parse($mahasiswa->tgl_lahir)->format('d F Y')}}</p>
                    </div>
                    <div class="row">
                        <h5>Jenis Kelamin:</h5>
                    </div>
                    <div class="row">
                        <p>{{$mahasiswa->gender}}</p>
                    </div>
                    <div class="row">
                        <h5>Alamat:</h5>
                    </div>
                    <div class="row">
                        <p>{{$mahasiswa->alamat_rmh}}</p>
                    </div>
                    <div class="row">
                        <h5>Angkatan:</h5>
                    </div>
                    <div class="row">
                        <p>{{$mahasiswa->angkatan}}</p>
                    </div>
                    <div class="row">
                        <h5>Bidang Minat:</h5>
                    </div>
                    <div class="row">
                        @if ($mahasiswa->peminatan == 'SI')
                            <p>Sistem Informasi dan Rekayasa Perangkat Lunak</p>
                        @elseif ($mahasiswa->peminatan == 'AI')
                            <p>Sistem Cerdas dan Sistem Grafika</p>
                        @elseif ($mahasiswa->peminatan == 'JK')
                            <p>Jaringan Komputer dan Komunikasi Data</p>
                        @else
                            <p>Belum Memilih Peminatan</p>
                        @endif
                    </div>
                    <div class="row">
                        <h5>Tahun Lulus:</h5>
                    </div>
                    <div class="row">
                        @if($mahasiswa->thn_lulus == null)
                            <p>Belum Lulus</p>
                        @else    
                            <p>{{$mahasiswa->thn_lulus}}</p>
                        @endif
                    </div>
                    @if($mahasiswa->skripsi == null)
                    @else
                    <div class="row">
                        <h5>Judul Skripsi:</h5>
                    </div>
                    <div class="row">
                        <p>{{$mahasiswa->skripsi}}</p>
                    </div>
                    @endif
                    <div class="row">
                        <h5>Nomor Telepon:</h5>
                    </div>
                    <div class="row">
                        <p>{{$mahasiswa->no_wa}}</p>
                    </div>
                    @foreach ($pekerjaan as $work)
                    <div class="row">
                        <h5>Tempat kerja:</h5>
                    </div>
                    <div class="row">
                        <p>{{$work['tempat_kerja']}}</p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection